<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin-One',
            'email' => 'admin1@admin.com',
            'password' => Hash::make('123456789'), // Encrypt the password
            'branch_id' => 1
        ]);

        User::create([
            'name' => 'Admin-Two',
            'email' => 'admin2@admin.com',
            'password' => Hash::make('123456789'), // Encrypt the password
            'branch_id' => 2
        ]);

        User::create([
            'name' => 'Admin-Three',
            'email' => 'admin3@admin.com',
            'password' => Hash::make('123456789'), // Encrypt the password
            'branch_id' => 3
        ]);

    }
}
