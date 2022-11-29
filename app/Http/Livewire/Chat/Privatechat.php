<?php

namespace App\Http\Livewire\Chat;

use App\Models\User;
use App\Events\Notif;
use App\Models\Message;
use Livewire\Component;
use App\Models\Conversation;
use App\Events\MessagePrivate;
use Illuminate\Support\Facades\Auth;

class Privatechat extends Component
{

    public $conversations;
    public $conversation;
    public $cariNama;
    public $p_user;
    public $showchat;
    public $c_user;
    public $messages;
    public $message;

    protected $listeners = [
        'refresh' => '$refresh',
        'send' => 'sendMessage',
    ];

    public function render(){
        return view('livewire.chat.privatechat',[
        ]);
    }
    public function mount(){
        $this->conversations = Conversation::where('user_one', Auth::user()->id)
        ->orWhere('user_two', Auth::user()->id)
        ->latest()
        ->get();
        $this->showchat = false;
    }
    public function cariUser(){
        $this->p_user = User::where('name', 'like', '%'.$this->cariNama.'%')
        ->first();
        if($this->p_user === null){
            return $this->emit('userNotFound',$this->cariNama);
        }
        if($this->p_user->id === Auth::user()->id){
            return $this->emit('selfFound',$this->cariNama);
        }

        // cek apakah sudah ada percakapan
        $this->conversations = Conversation::where('user_one', Auth::user()->id)
        ->where('user_two', $this->p_user->id)
        ->orWhere('user_one', $this->p_user->id)
        ->where('user_two', Auth::user()->id)
        ->first();
        
        if($this->conversations == null){
            // buat percakapan baru
            Conversation::create([
                'user_one' => Auth::user()->id,
                'user_two' => $this->p_user->id
            ]);
        }
        $this->emit('userFound',$this->p_user->name);
        sleep(4);
        return redirect('/chat');
    }
    public function startConversation($id){
        $this->c_user = User::find($id);
        $this->showchat = true;
        // set conversation antara user yang login dan user yang dipilih
        $this->conversation = Conversation::where([
            ['user_one', Auth::user()->id],
            ['user_two', $this->c_user->id]
        ])->orWhere([
            ['user_one', $this->c_user->id],
            ['user_two', Auth::user()->id]
        ])->first();
        // get all messages from conversation
        $this->messages = Message::where('conversation_id', $this->conversation->id)->get();
    }
    // pass message to app.js to be check if it has bad words
    public function passMessage(){
        $this->emit('checkMessage',$this->message);
    }
    // hasil dari app.js setelah di filter
    public function sendMessage($message){
        // simpan hasil filter message ke database
        Message::create([
            'conversation_id' => $this->conversation->id,
            'user_id' => Auth::user()->id,
            'message' => $message,
        ]);
        // notif ke user yang menerima pesan
        event(
            new Notif(
                Auth::user()->id,
                Auth::user()->name,
                $this->c_user->id
            )
        );
        $this->emit('privateMessageSent',$this->c_user->name);
        $this->emitSelf('refresh');
    }
   
}
