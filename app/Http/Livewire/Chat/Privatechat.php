<?php

namespace App\Http\Livewire\Chat;

use App\Models\User;
use Livewire\Component;
use App\Models\Conversation;
use Illuminate\Support\Facades\Auth;

class Privatechat extends Component
{

    public $conversations;
    public $cariNama;
    public $p_user;

    protected $listeners = [
        'refresh' => '$refresh',
    ];

    public function render()
    {
        return view('livewire.chat.privatechat',[
            // 'conversations'  => Conversation::where('user_one', Auth::user()->id)
            // ->orWhere('user_two', Auth::user()->id)
            // ->get()
        ]);
    }
    public function mount(){
        $this->conversations = Conversation::where('user_one', Auth::user()->id)
        ->orWhere('user_two', Auth::user()->id)
        ->latest()
        ->get();
    }
    public function cariUser(){
        $this->p_user = User::where('name', 'like', '%'.$this->cariNama.'%')
        ->where('id', '!=', Auth::user()->id)
        ->first();
        if($this->p_user->count() === 0){
            return $this->emit('userNotFound',$this->cariNama);
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
        return redirect('/chat')->with('success', 'Percakapan dengan '.$this->p_user->name.' berhasil dibuat');
    }
    
}
