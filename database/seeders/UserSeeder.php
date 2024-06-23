<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
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
            User::create([
                'name' => 'Rizki idham sofyan',
                'email' => 'admin123@gmail.com',
                'password' => hash::make('admin12345678'),
                'role' => 'admin',
                
            ]);
            User::create([
                'name' => 'RaksaBumi',
                'email' => 'pamong123@gmail.com',
                'password' => hash::make('pamong12345678'),
                'role' => 'pamong',
                
            ]);

            // User::factory(10)->create();
    }
}
