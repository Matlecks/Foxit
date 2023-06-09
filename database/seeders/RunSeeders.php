<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RunSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
{
    $this->call([
        UsersTableSeeder::class,
        ServicesTreeTableSeeder::class,
        Services_demoSeeder::class,
        Posts_demoSeeder::class,
        Projects_demoSeeder::class,
        Reviews_demoSeeder::class,
    ]);
}
}
