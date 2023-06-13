<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BaseInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('base_infos')->insert([
            'id' => '1',
            'phone' => '+7 (927) 935-83-55',
            'email' => 'damir-khaybulin@mail.ru',
            'time' => 'Пн - Вс: 11.00 - 19.00',
            'address' => 'Верхнеторговая площадь, 4
            ​Кировский район, г.Уфа​, 450077',
            'vk' => 'https://vk.com/damir_khaybulin',
            'inst' => 'https://instagram.com/mmatleecckss?igshid=MzNlNGNk...',
            'tg' => 'https://t.me/Matlecks',
            'whatsapp' => 'https://wa.me/79279358355?text='
        ]);
    }
}
