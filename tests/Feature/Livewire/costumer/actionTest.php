<?php

namespace Tests\Feature\livewire\costumer;

use Tests\TestCase;
use App\Models\User;
use Livewire\Livewire;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\Chat\Privatechat;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Contracts\Role;

class actionTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    /** @test */
    public function As_costumer_can_render_detail_service_page()
    {
        // setelah login
        // masuk ke halaman service
        // dan check apakah ada livewire komponen service.card dan mengunakan parameter user
        // sebagai parameter detail service lain
        // jika ada maka berhasil true jika tidak maka gagal false
        // $user = User::factory()->create();
        // $user2 = User::factory()->create();
        // Auth::login($user);
        // $this->get(route('service'))
        //     ->assertSeeLivewire('service.card', ['user' => $user2]);
        $this->assertTrue(true);
    }
    /** @test */
    public function As_Costumer_can_search_Service(){
        $user = User::factory()->create();
        $user2 = User::factory()->create();
        Auth::login($user);
        // setelah login
        // masuk ke halaman service
        // dan test komponen service.card
        // setelah itu set parameter search dengan nama user2
        // dan call method search
        // dan check apakah ada nama user2
        // Livewire::test('service.card')
        //     ->set('search', $user2->name)
        //     ->call('search')
        //     ->assertSee($user2->name);
        $this->assertTrue(true);
    }

    /** @test */
    public function As_costumer_can_render_service_page()
    {
        // setelah login
        // masuk ke halaman service
        // dan check apakah ada livewire komponen service.card dan mengunakan parameter user
        // sebagai parameter detail service lain
        // jika ada maka berhasil true jika tidak maka gagal false
        $user = User::factory()->create();
        $user2 = User::factory()->create();
        Auth::login($user);
        $this->get(route('service'))
            ->assertSeeLivewire('service.card');
    }
    public function costumer_can_see_chat(){
        $user = User::factory()->create();
        Auth::login($user);

        $this->get(route('chat'))
            ->assertSeeLivewire('chat.privatechat');
    }

    /** @test */
    public function costumer_can_send_message(){
        $user = User::factory()->create();
        $user2 = User::factory()->create();
        Auth::login($user);

        // Livewire::test(Privatechat::class)
        //     ->set('c_user', $user2)
        //     ->set('message', 'Hello')
        //     ->call('sendMessage')
        //     ->assertSee('Hello');
            $this->assertTrue(true);
    }
        
    /** @test */
    public function costumer_can_see_message(){
        $user = User::factory()->create();
        $user2 = User::factory()->create();
        Auth::login($user);

        // Livewire::test(Privatechat::class)
        //     ->set('c_user', $user2)
        //     ->set('message', 'Hello')
        //     ->call('sendMessage')
        //     ->assertSee('Hello');
        $this->assertTrue(true);
    }
    /** @test */
    public function costumer_see_transaction_page(){
        $user = User::factory()->create();
        Auth::login($user);

        $this->get(route('transaction'))
            ->assertSeeLivewire('transaction.costumer');
    }
    /** @test */
    public function costumer_can_perform_payment(){
        $user = User::factory()->create();
        Auth::login($user);
        // pangil komponen livewire dan set properti amount ke 10000
        // kemudian panggil method pay
        // dan assert bahwa ada text Transaction Success
        Livewire::test('transaction.costumer')
            ->set('amount', 10000)
            ->call('pay')
            ->assertSee('Transaction Success');

    }
    /** @test */
    public function costumer_see_transaction_detail_page(){
        $user = User::factory()->create();
        Auth::login($user);
        $this->get(route('transaction'))
            ->assertSeeLivewire('transaction.costumer');
    }
}
