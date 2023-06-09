<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Services_demoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'id' => '1',
            'title' => 'Лендинговый сайт',
            'anounce_text' => 'Даже самому небольшому бизнесу, небольшой фирме, ИП или просто самозанятому обязательно иметь сайт для продвижения своих услуг в интернете. Заявите о себе целому миру с помощью небольшого удобного лендинга. ',
            'anounce_image' => 'folder/1-service.jpg',
            'details_image' => 'folder/1-service.jpg',
            'cost' => '25 000₽',
            'users_id' => '1',
            'section_id' => '1',
        ]);
        DB::table('services')->insert([
            'id' => '2',
            'title' => 'Персональный сайт',
            'anounce_text' => 'Вы творческая личность, отличный специалист или вам просто хочется рассказать о своем хобби? Вам нужно разместить свое портфолио , записи блога? Персональная страница поможет вам всем на что вы способны',
            'anounce_image' => 'folder/2-service.png',
            'details_image' => 'folder/2-service.png',
            'cost' => '25 000₽',
            'users_id' => '1',
            'section_id' => '1',
        ]);
        DB::table('services')->insert([
            'id' => '3',
            'title' => 'Интернет-магазин',
            'anounce_text' => 'Увеличение продаж, масштабирование бизнеса, выход на новые рынки сбыта, возможность продажи из любой точки мира - это лишь малая часть того, что может сделать для вас интернет-магазин. ',
            'anounce_image' => 'folder/3-service.jpg',
            'details_image' => 'folder/3-service.jpg',
            'cost' => '40 000₽',
            'users_id' => '1',
            'section_id' => '1',
        ]);
        DB::table('services')->insert([
            'id' => '4',
            'title' => 'Корпоративный сайт',
            'anounce_text' => 'В коммерческих организациях часто упускается много незафиксированной информации, даже если сотрудники ответственны и имеют хорошую память. Автоматизация отдела продаж поможет это исправить. ',
            'anounce_image' => 'folder/4-service.png',
            'details_image' => 'folder/4-service.png',
            'cost' => '50 000₽',
            'users_id' => '1',
            'section_id' => '1',
        ]);
    }
}
