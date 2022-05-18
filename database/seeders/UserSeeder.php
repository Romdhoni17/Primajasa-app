<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Administrator',
            'username' => 'admin',
            'level' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'remember_token' => Str::random(60),

        ]);

        User::create([
            'name' => 'Nur Ahmad Romdhoni',
            'username' => 'romdhoni17',
            'level' => 'pengurus',
            'email' => 'romdhoni17@gmail.com',
            'password' => bcrypt('romdhoni123'),
            'remember_token' => Str::random(60),

        ]);

        User::create([
            'name' => 'Arul Rachman Faruqhy',
            'username' => 'arulrf_',
            'level' => 'user',
            'email' => 'arulrachmanfaruqhy@gmail.com',
            'password' => bcrypt('arul123'),
            'remember_token' => Str::random(60),

        ]);
    }
}
