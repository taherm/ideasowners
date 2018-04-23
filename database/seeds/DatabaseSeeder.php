<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PortfoliosTableSeeder::class,
            ServicesTableSeeder::class,
            MenusTableSeeder::class,
            SlidersTableSeeder::class,
            UsersTableSeeder::class,
        ]);
    }
}
