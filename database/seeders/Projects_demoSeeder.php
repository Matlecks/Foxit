<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Projects_demoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'id' => '1',
            'title' => 'Медицинская помощь',
            'link' => 'https://психиатр32.рф/',
            'anounce_text' => '',
            'anounce_image' => 'folder/psihiatr32.jpg',
            'details_text' => '',
            'details_image' => 'folder/psihiatr32.jpg',
            'created_at' => '2023-05-13 19:31:08',
        ]);
        DB::table('projects')->insert([
            'id' => '2',
            'title' => 'ООО "АБА"',
            'link' => 'https://ce17558.tw1.ru/',
            'anounce_text' => '',
            'anounce_image' => 'folder/aba.jpg',
            'details_text' => '',
            'details_image' => 'folder/aba.jpg',
            'created_at' => '2023-05-13 19:31:08',
        ]);
        DB::table('projects')->insert([
            'id' => '3',
            'title' => 'УПК Трейд',
            'link' => 'https://bx.kosmeti4ka.ru/',
            'anounce_text' => '',
            'anounce_image' => 'folder/kosmetichka.jpg',
            'details_text' => '',
            'details_image' => 'folder/kosmetichka.jpg',
            'created_at' => '2023-05-13 19:31:08',
        ]);
        DB::table('projects')->insert([
            'id' => '4',
            'title' => 'International Medical Services',
            'link' => 'https://ims-clinics.com/',
            'anounce_text' => '',
            'anounce_image' => 'folder/ims.jpg',
            'details_text' => '',
            'details_image' => 'folder/ims.jpg',
            'created_at' => '2023-05-13 19:31:08',
        ]);
        DB::table('projects')->insert([
            'id' => '5',
            'title' => 'Флокс',
            'link' => 'https://floxgroup.ru',
            'anounce_text' => '',
            'anounce_image' => 'folder/flox.jpg',
            'details_text' => '',
            'details_image' => 'folder/flox.jpg',
            'created_at' => '2023-05-13 19:31:08',
        ]);
        DB::table('projects')->insert([
            'id' => '6',
            'title' => 'XENOL LUBRICANTS',
            'link' => 'https://xenol.ru',
            'anounce_text' => '',
            'anounce_image' => 'folder/xenol.jpg',
            'details_text' => '',
            'details_image' => 'folder/xenol.jpg',
            'created_at' => '2023-05-13 19:31:08',
        ]);
        DB::table('projects')->insert([
            'id' => '7',
            'title' => 'Интеграл Консалт',
            'link' => 'https://docs2works.ru/',
            'anounce_text' => '',
            'anounce_image' => 'folder/glogtech.jpg',
            'details_text' => '',
            'details_image' => 'folder/glogtech.jpg',
            'created_at' => '2023-05-13 19:31:08',
        ]);
        DB::table('projects')->insert([
            'id' => '8',
            'title' => 'Все Сенсоры',
            'link' => 'http://vsesensory.ru',
            'anounce_text' => '',
            'anounce_image' => 'folder/vsesensory.jpg',
            'details_text' => '',
            'details_image' => 'folder/vsesensory.jpg',
            'created_at' => '2023-05-13 19:31:08',
        ]);
        DB::table('projects')->insert([
            'id' => '9',
            'title' => 'Империя Света',
            'link' => 'https://империясвета.kz/',
            'anounce_text' => '',
            'anounce_image' => 'folder/impsveta.jpg',
            'details_text' => '',
            'details_image' => 'folder/impsveta.jpg',
            'created_at' => '2023-05-13 19:31:08',
        ]);
        DB::table('projects')->insert([
            'id' => '10',
            'title' => 'Viva Balt',
            'link' => 'https://vivabalt.ru',
            'anounce_text' => '',
            'anounce_image' => 'folder/viva.jpg',
            'details_text' => '',
            'details_image' => 'folder/viva.jpg',
            'created_at' => '2023-05-13 19:31:08',
        ]);
        DB::table('projects')->insert([
            'id' => '11',
            'title' => 'Альбертина',
            'link' => 'https://cn95059.webtm.ru/',
            'anounce_text' => '',
            'anounce_image' => 'folder/albertina.jpg',
            'details_text' => '',
            'details_image' => 'folder/albertina.jpg',
            'created_at' => '2023-05-13 19:31:08',
        ]);
        DB::table('projects')->insert([
            'id' => '12',
            'title' => 'TeploHome',
            'link' => 'http://new.teplohome.ru',
            'anounce_text' => '',
            'anounce_image' => 'folder/teplohome.jpg',
            'details_text' => '',
            'details_image' => 'folder/teplohome.jpg',
            'created_at' => '2023-05-13 19:31:08',
        ]);
        DB::table('projects')->insert([
            'id' => '13',
            'title' => 'Рябушка',
            'link' => 'https://ci12986.tw1.ru',
            'anounce_text' => '',
            'anounce_image' => 'folder/rabushka.jpg',
            'details_text' => '',
            'details_image' => 'folder/rabushka.jpg',
            'created_at' => '2023-05-13 19:31:08',
        ]);
        DB::table('projects')->insert([
            'id' => '14',
            'title' => 'АГРОМАРКЕТ',
            'link' => 'http://agromarket74.ru/',
            'anounce_text' => '',
            'anounce_image' => 'folder/agromarket.jpg',
            'details_text' => '',
            'details_image' => 'folder/agromarket.jpg',
            'created_at' => '2023-05-13 19:31:08',
        ]);
        DB::table('projects')->insert([
            'id' => '15',
            'title' => 'Колибри',
            'link' => 'http://cn02500.tw1.ru',
            'anounce_text' => '',
            'anounce_image' => 'folder/kolibri.jpg',
            'details_text' => '',
            'details_image' => 'folder/kolibri.jpg',
            'created_at' => '2022-05-13 19:31:08',
        ]);
        DB::table('projects')->insert([
            'id' => '16',
            'title' => 'ASTEURO GROUP',
            'link' => 'http://alergan.ru',
            'anounce_text' => '',
            'anounce_image' => 'folder/asteuro.jpg',
            'details_text' => '',
            'details_image' => 'folder/asteuro.jpg',
            'created_at' => '2022-05-13 19:31:08',
        ]);
        DB::table('projects')->insert([
            'id' => '17',
            'title' => 'Судебный Защитник',
            'link' => 'http://sudrf.pro',
            'anounce_text' => '',
            'anounce_image' => 'folder/sudzash.jpg',
            'details_text' => '',
            'details_image' => 'folder/sudzash.jpg',
            'created_at' => '2022-05-13 19:31:08',
        ]);
        DB::table('users_projects')->insert([
            'user_id' => '1',
            'projects_id' => '1',
        ]);
        DB::table('users_projects')->insert([
            'user_id' => '1',
            'projects_id' => '2',
        ]);
        DB::table('users_projects')->insert([
            'user_id' => '1',
            'projects_id' => '3',
        ]);
        DB::table('users_projects')->insert([
            'user_id' => '1',
            'projects_id' => '4',
        ]);
        DB::table('users_projects')->insert([
            'user_id' => '1',
            'projects_id' => '5',
        ]);
        DB::table('users_projects')->insert([
            'user_id' => '1',
            'projects_id' => '6',
        ]);
        DB::table('users_projects')->insert([
            'user_id' => '1',
            'projects_id' => '7',
        ]);
        DB::table('users_projects')->insert([
            'user_id' => '1',
            'projects_id' => '8',
        ]);
        DB::table('users_projects')->insert([
            'user_id' => '1',
            'projects_id' => '9',
        ]);
        DB::table('users_projects')->insert([
            'user_id' => '1',
            'projects_id' => '10',
        ]);
        DB::table('users_projects')->insert([
            'user_id' => '1',
            'projects_id' => '11',
        ]);
        DB::table('users_projects')->insert([
            'user_id' => '1',
            'projects_id' => '12',
        ]);
        DB::table('users_projects')->insert([
            'user_id' => '1',
            'projects_id' => '13',
        ]);
        DB::table('users_projects')->insert([
            'user_id' => '1',
            'projects_id' => '14',
        ]);
        DB::table('users_projects')->insert([
            'user_id' => '1',
            'projects_id' => '15',
        ]);
        DB::table('users_projects')->insert([
            'user_id' => '1',
            'projects_id' => '16',
        ]);
        DB::table('users_projects')->insert([
            'user_id' => '1',
            'projects_id' => '17',
        ]);
    }
}
