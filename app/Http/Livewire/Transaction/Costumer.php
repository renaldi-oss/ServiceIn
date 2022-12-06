<?php

namespace App\Http\Livewire\Transaction;

use Closure;
use Filament\Tables;
use Livewire\Component;
use App\Models\Transaction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Columns\BadgeColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\Action;


class Costumer extends Component implements HasTable
{
    use Tables\Concerns\InteractsWithTable;
    
    public function render()
    {
        return view('livewire.transaction.costumer');
    }
    
    protected function getTableQuery(): Builder 
    {
        return Transaction::Where('costumer_id',auth()->user()->id);
    }
    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('transaction_number')->label('Id transaksi')->searchable()->sortable(),
            Tables\Columns\TextColumn::make('user.name')->label('From')->searchable()->sortable(),
            Tables\Columns\TextColumn::make('description')->label('Deskripsi transaksi'),
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
    protected function getTableActions(): array
    {
        return [
            Action::make('pay')->label('Bayar')->action(fn ($record) => $this->pay($record)),
        ];
    }

    public function pay($transaction)
    {
        $this->emit('costumer-paying',$transaction->snap_token);
    }
}
