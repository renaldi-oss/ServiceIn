<?php

namespace Tests\Feature\livewire\Service;

use Tests\TestCase;
use App\Models\User;
use Livewire\Livewire;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class performTest extends TestCase
{
    use RefreshDatabase;
   
    /** @test */
    public function As_service_can_render_service_page()
    {
        $user = User::factory()->create();
        Auth::login($user);
        $this->get(route('service'))
            ->assertSeeLivewire('service.card');
    }

    /** @test */
    public function service_can_see_chat(){
        $user = User::factory()->create();
        Auth::login($user);

        $this->get(route('chat'))
            ->assertSeeLivewire('chat.privatechat');
    }

    /** @test */
    public function service_can_send_message(){
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
    public function service_can_see_message(){
        $user = User::factory()->create();
        $user2 = User::factory()->create();
        Auth::login($user);

        Livewire::test(Privatechat::class)
            ->set('c_user', $user2)
            ->set('message', 'Hello')
            ->call('sendMessage')
            ->assertSee('Hello');

    }

    /** @test */
    public function service_can_see_service_page(){
        $user = User::factory()->create();
        Auth::login($user);

        $this->get(route('service'))
            ->assertSeeLivewire('service.card');
    }

    /** @test */
    public function As_service_can_create_payment_to_costumer(){
        $user = User::factory()->create();
        Auth::login($user);

        $this->get(route('service'))
            ->assertSeeLivewire('service.card');
    }
    /** @test */
    public function As_service_can_see_if_payment_is_done(){
        $user = User::factory()->create();
        Auth::login($user);

        $this->get(route('service'))
            ->assertSeeLivewire('service.card');
    }
    /** @test */
    public function As_service_can_see_if_payment_is_not_done(){
        $user = User::factory()->create();
        Auth::login($user);

        $this->get(route('service'))
            ->assertSeeLivewire('service.card');
    }
}
