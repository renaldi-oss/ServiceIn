<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Faker\Factory as faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
 
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'costumer']);
        Role::create(['name' => 'service']);
        
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'no_hp' => faker::create('id_ID')->phoneNumber(),
            'image' => 'default',
            'last_seen' => now(),
        ])->assignRole('admin');
        User::factory()->create([
            'name' => 'Costumer',
            'email' => 'costumer@gmail.com',
            'password' => Hash::make('costumer'),
            'no_hp' => faker::create('id_ID')->phoneNumber(),
            'image' => 'default',
            'last_seen' => now(),
        ])->assignRole('costumer');
        User::factory()->create([
            'name' => 'service',
            'email' => 'service@gmail.com',
            'password' => Hash::make('service'),
            'no_hp' => faker::create('id_ID')->phoneNumber(),
            'image' => 'default',
            'last_seen' => now(),
        ])->assignRole('service');

        //membuat akun dummy costumer
        user::factory(20)->create()->each(function ($user) {
            $user->assignRole('costumer');
        });
        //membuat akun dummy service
        user::factory(8)->create()->each(function ($user) {
            $user->assignRole('service');
        });
    }
}
