<?php

namespace App\Http\Livewire\Profile;

use Filament\Forms;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Facades\Storage;
use Livewire\TemporaryUploadedFile;
use Livewire\WithFileUploads;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class Service extends Component implements HasForms
{
    use Forms\Concerns\InteractsWithForms;
    use WithFileUploads;
    


    public $nama = '';
    public $alamat = '';
    public $no_hp = '';
    public $description = '';
    public $user;
    public $image;

    public function render()
    {
        return view('livewire.profile.service');
    }
    public function updateService(){
        $validate =  $this->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'description' => 'required',
        ]);
        foreach($this->image as $image){
            $image_path = $image->path();
            $image_path = str_replace('E:\LARAVEL\ServiceIn\storage\app/public\livewire-tmp/', '', $image_path);
            break;
        }
        $this->user->detailService->update([
            'nama' => $this->nama,
            'alamat' => $this->alamat,
            'no_hp' => $this->no_hp,
            'description' => $this->description,
            'image' => $image_path,
        ]);
        $this->emit('serviceUpdated');
    }

    public function mount(): void 
    {
        // check if user already has data in table DetailService
        $this->user = User::find(Auth::user()->id);
        if ($this->user->detailService) {
            $this->nama = $this->user->detailService->nama;
            $this->alamat = $this->user ->detailService->alamat;
            $this->no_hp = $this->user->detailService->no_hp;
            $this->description = $this->user->detailService->description;
            $this->image_path = asset('storage/app/public/livewire-tmp/'.$this->user->detailService->image);
            
            $this->form->fill([
                'alamat' => $this->alamat,
                'no_hp' => $this->no_hp,
                'description' => $this->description,
                'image' => $this->image_path,
            ]);
        }
        
    }
    protected function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('nama')->required(),
            Forms\Components\TextInput::make('alamat')->required(),
            Forms\Components\TextInput::make('no_hp')->required(),
            Forms\Components\MarkdownEditor::make('description')->required(),
            SpatieMediaLibraryFileUpload::make('image')
                ->image()
                ->required()
                ->maxFiles(1),
        ];
    }
}
