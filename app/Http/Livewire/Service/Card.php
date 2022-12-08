<?php

namespace App\Http\Livewire\Service;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class Card extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {
        return view('livewire.service.card',[
            // 'services' => User::whereHas('roles', function($q){
            //     $q->detailService->where('name', 'service');
            // })->where('name','like','%'.$this->search.'%')->paginate(9)
            // get all user who has role service and have relation with detail service
            'services' => User::whereHas('roles', function($q){
                $q->where('name', 'service');
            })->whereHas('detailService', function($q){
                $q->where('nama','like','%'.$this->search.'%')
                ->orWhere('name','like','%'.$this->search.'%');
            })->paginate(9)
        ]);
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }
}
