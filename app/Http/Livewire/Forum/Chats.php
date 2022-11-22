<?php

namespace App\Http\Livewire\Forum;

use App\Events\MessagePublic;
use App\Models\PublicMessage;
use App\Models\User;
use Livewire\Component;
use Termwind\Components\Dd;

class Chats extends Component
{
    public $messages;
    public $user;

    protected $listeners = [
        'send' => 'sendMessage',
        'refreshComponent' => '$refresh'
    ];

    public function render()
    {
        return view('livewire.forum.chats',[
            $this->messages = PublicMessage::all()
        ]);
    }
    public function mount(){
        $this->user = auth()->user();
    }
    public function sendMessage($message){
        // dd($message);
        PublicMessage::create([
            'user_id' => $this->user->id,
            'message' => $message,
        ]);
        $this->emitSelf('refreshComponent');
        event(
            new MessagePublic(
                $this->user->name,
                $message,
            )
        );
    }    
}
