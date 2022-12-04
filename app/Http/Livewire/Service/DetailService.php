<?php

namespace App\Http\Livewire\Service;

use App\Models\User;
use Livewire\Component;

class DetailService extends Component
{
    public $service;
    public $owner;
    public function mount($service)
    {
        $this->service = $service;
        $this->owner = User::where('id', $service->user_id)->first();
    }

    public function render()
    {
        return view('livewire.service.detail-service',[
            'service' => $this->service,
            'owner' => $this->owner
        ]);
    }
}
