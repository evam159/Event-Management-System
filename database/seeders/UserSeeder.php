<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
   
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => "Admin1",
            'user_name' => "admin",
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'admin' => true,
        ]);
    }
}
