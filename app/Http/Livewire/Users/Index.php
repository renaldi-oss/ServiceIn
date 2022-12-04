<?php

namespace App\Http\Livewire\Users;

use Filament\Forms;
use App\Models\User;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Table;
use Illuminate\Auth\Events\Validated;
use Livewire\Component;

class Index extends Component implements HasTable,HasForms
{
    use Forms\Concerns\InteractsWithForms;
    use Tables\Concerns\InteractsWithTable; 
    
    protected $listeners = [
        'refreshUsers' => '$refresh',
        'addService' => 'addService',
    ];
    
    public function render()
    {
        return view('livewire.users.index');
    }
    public function addService($email,$name,$password)
    {
        $user = User::create([
            'email' => $email,
            'name' => $name,
            'password' => $password,
        ]);
        $user->assignRole('service');
        $this->emit('serviceAdded');
        $this->emit('refreshUsers');
    }




    protected function getTableQuery(): Builder 
    {
        return User::query();
    } 
    protected function getTableColumns(): array 
    {
        return [
            Tables\columns\ImageColumn::make('avatar')->label('Avatar'),
            Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
            Tables\Columns\TextColumn::make('email')->searchable()->sortable(),
            Tables\Columns\BadgeColumn::make('roles.name')->searchable()->sortable()
            ->colors([
                'bg-red-300 text-red-600' => 'admin',
                'bg-blue-300 text-blue-600' => 'costumer',
                'bg-cyan-300 text-cyan-600' => 'service',
            ]),
            Tables\Columns\TextColumn::make('last_seen')->sortable(),
        ];
    }

}
