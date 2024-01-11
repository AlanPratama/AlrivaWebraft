<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'phone' => '085715876505',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'slug' => 'admin',
            'password' => bcrypt('admin'),
            'role' => 'Admin'
        ]);

        User::create([
            'name' => 'Alan Pratama Rusfi',
            'phone' => '085817000942',
            'email' => 'pralan@gmail.com',
            'username' => 'alan',
            'slug' => 'alan',
            'password' => bcrypt('alan'),
            'role' => 'User'
        ]);
    }
}
