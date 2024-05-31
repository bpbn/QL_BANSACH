<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'taiphan',
                'email' => 'kid0866@gmail.com',
                'password' => Hash::make('123456'),
                'phone' => '0344312253',
                'address' => 'Bến Tre',
                'role' => 1,


            ]]);
    }
}