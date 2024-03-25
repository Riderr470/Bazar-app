<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Ridan',
            'email' => 'Ridan@gmail.com',
            'password' => bcrypt('123456'),
            'address' => ' ',
            'phone' => ' ',
            'image' => ' ',
            'role' => 'admin'
        ]);
    }
}
