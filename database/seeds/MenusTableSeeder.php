<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Services',
                'created_at' => '2018-07-22 07:47:34',
                'updated_at' => '2018-07-22 07:47:34',
            ),
        ));
        
        
    }
}