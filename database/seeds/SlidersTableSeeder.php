<?php

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sliders')->delete();
        
        \DB::table('sliders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => '938b393f0eb0c8867d4c277928db101f.jpg',
                'created_at' => '2018-07-22 07:47:34',
                'updated_at' => '2018-07-22 07:47:34',
            ),
            1 => 
            array (
                'id' => 2,
                'image' => 'a59833af7e0254aabec1680de1aa3c4d.jpg',
                'created_at' => '2018-07-22 07:47:34',
                'updated_at' => '2018-07-22 07:47:34',
            ),
        ));
        
        
    }
}