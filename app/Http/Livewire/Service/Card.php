<?php

namespace App\Http\Livewire\Service;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class Card extends Component
{
    use WithPagination;


    public function render()
    {
        return view('livewire.service.card',[
            'services' => User::whereHas('roles', function($q){
                $q->where('name', 'service');
            })->paginate(9),
        ]);
    }
    public function mount(){
        
    }
}
