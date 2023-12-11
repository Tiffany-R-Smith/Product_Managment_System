<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //Admin
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'status' => 'active',
            ],

        //Agent
            [
                'name' => 'Agent',
                'email' => 'agent@example.com',
                'password' => Hash::make('password'),
                'role' => 'agent',
                'status' => 'active',
            ],
            //User
            [
                'name' => 'User',
                'email' => 'user@example.com',
                'password' => Hash::make('password'),
                'role' => 'user',
                'status' => 'active',
            ],
            ]);
    }
}
