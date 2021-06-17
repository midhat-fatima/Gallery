<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@yopmail.com',
                'password' => Hash::make('admin123'),
            ],
            [
                'name' => 'admin1',
                'email' => 'admin1@yopmail.com',
                'password' => Hash::make('admin123'),
            ],
            [
                'name' => 'admin2',
                'email' => 'admin2@yopmail.com',
                'password' => Hash::make('admin123'),
            ],
            [
                'name' => 'admin3',
                'email' => 'admin3@yopmail.com',
                'password' => Hash::make('admin123'),
            ],
            [
                'name' => 'admin4',
                'email' => 'admin4@yopmail.com',
                'password' => Hash::make('admin123'),
            ],
    ]);
    }
}