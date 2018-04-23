<?php

use Illuminate\Database\Seeder;

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
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' =>'$2y$10$doWZSN7FVNm33hhaqPR0.evGIXekAZQi6OHuesMeKCQHDu8C036SS'
        ]);
    }
}
