<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Дамир',
            'surname' => 'Хайбулин',
            'email' => 'admin@mail.ru',
            'login' => 'admin@mail.ru',
            'role' => 'Admin',
            'password' => Hash::make('admin@mail.ru'),
        ]);
    }
}
