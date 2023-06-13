<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'id' => '1',
            'role' => 'Admin',
            'title' => 'Админ',
        ]);
        DB::table('roles')->insert([
            'id' => '2',
            'role' => 'User',
            'title' => 'Зарегистрированный пользователь',
        ]);
        DB::table('roles')->insert([
            'id' => '3',
            'role' => 'Sotrudnik',
            'title' => 'Сотрудник',
        ]);
        DB::table('roles')->insert([
            'id' => '4',
            'role' => 'Client',
            'title' => 'Клиент',
        ]);
    }
}
