<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Faker\Factory as faker;
use Illuminate\Support\Str;
use App\Models\DetailService;
use App\Models\DetailCostumer;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Symfony\Component\Console\Helper\ProgressBar;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $bar = new ProgressBar($this->command->getOutput(), 100);
        $bar->start();

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'costumer']);
        Role::create(['name' => 'service']);
        $bar->advance(5);
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'last_seen' => now(),
        ])->assignRole('admin');
        DetailCostumer::create([
            'user_id' => 1,
            'alamat' => 'Jl. Raya Cibaduyut',
            'no_hp' => '081234567890',
        ]);
        User::factory()->create([
            'name' => 'Costumer',
            'email' => 'costumer@gmail.com',
            'password' => Hash::make('costumer'),
            'last_seen' => now(),
        ])->assignRole('costumer');
        DetailCostumer::create([
            'user_id' => 2,
            'alamat' => 'Jl. Kebon Jeruk',
            'no_hp' => '08123456789',
        ]);
       
        
        User::factory()->create([
            'name' => 'service',
            'email' => 'service@gmail.com',
            'password' => Hash::make('service'),
            'last_seen' => now(),
        ])->assignRole('service');
        DetailService::create([
            'user_id' => 3,
            'nama' => 'Servis Elektronik',
            'slug' => 'servis-elektronik',
            'description' => faker::create('id_ID')->text(),
            'alamat' => faker::create('id_ID')->address(),
            'no_hp' => faker::create('id_ID')->phoneNumber(),
        ]);
        $bar->advance(20);
        //membuat akun dummy costumer
        user::factory(20)->create()->each(function ($user) {
            $user->assignRole('costumer');
            DetailCostumer::create([
                'user_id' => $user->id,
                'alamat' => faker::create('id_ID')->address(),
                'no_hp' => faker::create('id_ID')->phoneNumber(),
            ]);
        });
        $bar->advance(25);
        //membuat akun dummy service
        user::factory(89)->create()->each(function ($user) {
            $user->assignRole('service');
            $company = faker::create('id_ID')->company();
            $slug = Str::slug($company);
            DetailService::create([
                'user_id' => $user->id,
                'nama' => $company,
                'slug' => $slug,
                'description' => faker::create('id_ID')->text(),
                'alamat' => faker::create('id_ID')->address(),
                'no_hp' => faker::create('id_ID')->phoneNumber(),
            ]);
        });
        $bar->advance(50);
    }
}
