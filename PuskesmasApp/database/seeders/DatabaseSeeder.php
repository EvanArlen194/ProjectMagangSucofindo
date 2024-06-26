<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin')
        ]);

        User::factory()->create([
            'email' => 'dokter@gmail.com',
            'password' => Hash::make('dokter')
        ]);

    }
}
