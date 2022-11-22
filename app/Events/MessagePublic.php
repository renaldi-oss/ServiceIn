<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessagePublic implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    
    public $name;
    public $message;
    
    public function __construct($name, $message)
    {
        $this->name = $name;
        $this->message = $message;
    }
    public function broadcastOn()
    {
        return new Channel('publicChat');
    }
    public function broadcastWith()
    {
        return [
            'name' => $this->name,
            'message' => $this->message,
        ];
    }
}
