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
            'email' => 'damir-khaybulin@mail.ru',
            'phone' => '+7 (927) 935-83-55',
            'login' => 'damir-khaybulin@mail.ru',
            'anounce_image' => 'folder/Person.png',
            'details_image' => 'folder/Person.png',
            'avatar' => 'folder/logo.png',
            'logo' => 'folder/logo.png',
            'role' => 'Admin',
            'job' => 'Веб-разработчик',
            'password' => Hash::make('admin@mail.ru'),
        ]);
    }
}
