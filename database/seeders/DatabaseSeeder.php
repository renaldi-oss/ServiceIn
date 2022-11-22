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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'costumer']);
        Role::create(['name' => 'service']);
        
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'no_hp' => faker::create('id_ID')->phoneNumber(),
            'image' => 'default',
        ])->assignRole('admin');
        User::factory()->create([
            'name' => 'Costumer',
            'email' => 'test1@gmail.com',
            'password' => Hash::make('test1'),
            'no_hp' => faker::create('id_ID')->phoneNumber(),
            'image' => 'default',
        ])->assignRole('costumer');
        User::factory()->create([
            'name' => 'service',
            'email' => 'test2@gmail.com',
            'password' => Hash::make('test2'),
            'no_hp' => faker::create('id_ID')->phoneNumber(),
            'image' => 'default',
        ])->assignRole('service');

        //membuat akun dummy costumer
        user::factory(10)->create()->each(function ($user) {
            $user->assignRole('costumer');
        });

    }
}
