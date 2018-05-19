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
            MenusTableSeeder::class,
            ServicesTableSeeder::class,
            PortfoliosTableSeeder::class,
            SlidersTableSeeder::class,
            UsersTableSeeder::class,
        ]);
    }
}
