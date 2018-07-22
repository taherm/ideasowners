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
           
        ]);
        $this->call(MenusTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(PortfoliosTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
