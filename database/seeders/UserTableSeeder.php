<?php

namespace Database\Seeders;

use App\Models\Admin;
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
        Admin::create([
            'name' => 'Ridan',
            'email' => 'Ridan@gmail.com',
            'password' => bcrypt('123456'),
            'address' => null,
            'dob' => null,
            'age' => null,
            'phone' => null,
            'role' => 'admin'
        ]);
    }
}
