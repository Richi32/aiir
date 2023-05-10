<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        User::create([
            'name' => 'admin',
            'nomor_telepon' => '085235822686',
            'level' => 'admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('dinamoptsp'),
        ]);
    }
}
