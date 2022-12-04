<?php

namespace App\Http\Livewire\Profile;

use App\Models\User;
use Filament\Forms;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Costumer extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    public function render()
    {
        return view('livewire.profile.costumer');
    }

    public $alamat = '';
    public $no_hp = '';

    public function mount(): void 
    {
        // check if user already has data in table DetailCostumer
        $user = User::find(Auth::user()->id);
        if ($user->detailCostumer) {
            $this->alamat = $user->detailCostumer->alamat;
            $this->no_hp = $user->detailCostumer->no_hp;
            $this->form->fill([
                'alamat' => $this->alamat,
                'no_hp' => $this->no_hp,
            ]);
        }
        
    } 
    
    protected function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('alamat')->required(),
            Forms\Components\TextInput::make('no_hp')->required(),
            // Forms\Components\MarkdownEditor::make('no_hp')->required(),
        ];
    }
}
