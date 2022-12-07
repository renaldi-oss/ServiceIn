<?php

namespace App\Http\Livewire\Transaction;

use App\Events\TransactionCreated;
use Closure;
use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Livewire\Component;
use App\Models\Transaction;
use App\Models\DetailCostumer;
use Illuminate\Support\Carbon;
use Filament\Forms\Components\Select;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Contracts\HasTable;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Services\Midtrans\CreateSnapTokenService;

class Service extends Component implements HasTable,HasForms
{
    use Forms\Concerns\InteractsWithForms;
    use Tables\Concerns\InteractsWithTable;
    
    public $name;
    public $email;
    public $total;
    public $description;
    public $alamat;


    protected $listeners = [
        'refreshServices' => '$refresh',
    ];
    
    public function render()
    {
        return view('livewire.transaction.service');
    }
    public function createTransaction(){
        $user = User::where('email',$this->email)->first();
        $q = DetailCostumer::where('user_id',$user->id)->first();
        if($q == null){
            $this->emit('userNotCompletedValidation');
            return;
        }
        // membuat transaksi
        $transaksi = Transaction::create([
            'user_id' => auth()->user()->id,
            'costumer_id' => $user->id,
            'transaction_number' => 'TRANSACTION-'.auth()->user()->id.'-'.$user->id.'-'.rand(1000,9999),
            'description' => $this->description,
            'alamat' => $q->alamat,
            'total' => $this->total,
            'status' => 'PENDING',
        ]);
        // membuat snap token
        $this->emit('transactionCreated');
        $snap = new CreateSnapTokenService($transaksi);
        $token = $snap->getSnapToken();
        // update token ke database
        $transaksi->update([
            'snap_token' => $token,
        ]);
        
        // event ke costumer
        event(
            new TransactionCreated(
                auth()->user()->id,
                auth()->user()->name,
                $user->id,
            )
        );
        $this->emitSelf('refreshServices');
    }
    // form
    protected function getFormSchema(): array
    {
        return [
            Select::make('name')
                ->label('kepada')
                ->searchable()
                ->required()
                ->getSearchResultsUsing(fn (string $search) => 
                    User::role('costumer')->where('name', 'like', "%{$search}%")      
                        ->limit(50)->pluck('name', 'id'))
                ->getOptionLabelUsing(fn ($value): ?string => User::find($value)?->name)
                ->disablePlaceholderSelection()
                ->reactive()
                ->afterStateUpdated(function ($state,callable $set) {
                    $set('email', User::where('id', $state)->first()->email);                
                }),
            TextInput::make('email')
                ->label('email')
                ->disabled()
                ->required(),
            TextInput::make('total')
                ->label('total bayar')
                ->required(),
            Textarea::make('description')
                ->label('deskripsi')
                ->required()
                ->hint('deskripsi mengenai service yang dikerjakan'),            
        ];
    }

    // table service
    protected function getTableQuery(): Builder 
    {
        return Transaction::Where('user_id',auth()->user()->id);
    }
    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('transaction_number')->label('Id transaksi')->searchable()->sortable(),
            Tables\Columns\TextColumn::make('costumer.name')->label('Nama costumer')->searchable()->sortable(),
            Tables\Columns\TextColumn::make('costumer.email')->searchable()->sortable()->label('Email'),
            Tables\Columns\TextColumn::make('alamat'),
            // Tables\Columns\TextColumn::make('description')->label('Deskripsi pelayanan'),
            Tables\Columns\TextColumn::make('total')->sortable()->label('Total')->money('idr'),
            Tables\Columns\BadgeColumn::make('status')->searchable()->sortable()
            ->colors([
                'bg-yellow-300 text-yellow-600' => 'PENDING',
                'bg-gray-300 text-gray-600' => 'CANCELLED',
                'bg-red-300 text-red-600' => 'FAILED',
                'bg-green-300 text-green-600' => 'SUCCESS',
            ]),
        ];
    }
}
