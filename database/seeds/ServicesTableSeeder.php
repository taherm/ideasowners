<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'menu_id' => 1,
                'id' => 1,
                'title' => 'Web Development',
                'description' => '<p>Web Development</p>',
                'image' => 'b3652a74abfd66320af39b483020e3ad.jpg',
                'icon' => '0a5d94bd16e9edf21b19ab7cd1a5a914.png',
                'created_at' => '2018-07-22 07:47:34',
                'updated_at' => '2018-07-22 07:47:34',
            ),
            1 => 
            array (
                'menu_id' => 1,
                'id' => 2,
                'title' => 'App Development',
                'description' => '<p>App Development</p>',
                'image' => 'b33d3f3acbfbcad72dc26aa09039c269.jpg',
                'icon' => '04731938baf0f77af4b3b9180719d40e.png',
                'created_at' => '2018-07-22 07:47:34',
                'updated_at' => '2018-07-22 07:47:34',
            ),
            2 => 
            array (
                'menu_id' => 1,
                'id' => 3,
                'title' => 'Feasibility Study',
                'description' => '<br>
<a href="/portfolios/7">HA Home Made Soap Project</a>
<br>
<a href="/portfolios/8">Daily Dresses Project</a>
<br>
<a href="/portfolios/9">Nursery Baby Project in Kuwait</a>',
                'image' => '7ad17a4f3f7a6e5e7fc7cee32ba94661.jpg',
                'icon' => '5153abe3b776884dd1ab35bd8281e2e9.png',
                'created_at' => '2018-07-22 07:47:34',
                'updated_at' => '2018-07-22 07:47:34',
            ),
            3 => 
            array (
                'menu_id' => 1,
                'id' => 4,
                'title' => 'Graphic Designing',
                'description' => '<p>Graphic Designing</p>',
                'image' => '315923288798832441ee08e3ef7f88f8.jpg',
                'icon' => '5aa0cdb20f663ce5ca1c0974ec27058f.png',
                'created_at' => '2018-07-22 07:47:34',
                'updated_at' => '2018-07-22 07:47:34',
            ),
            4 => 
            array (
                'menu_id' => 1,
                'id' => 5,
                'title' => 'Video Ads Production',
                'description' => '<p>Video Ads Production</p>',
                'image' => '82945620381e58824dded44f79abc3a7.jpg',
                'icon' => '3726bd6afd5cf5d78433f95b1664aea9.png',
                'created_at' => '2018-07-22 07:47:34',
                'updated_at' => '2018-07-22 07:47:34',
            ),
            5 => 
            array (
                'menu_id' => 1,
                'id' => 6,
                'title' => 'Logo Design',
                'description' => '<p>Logo Design</p>',
                'image' => '17b9a837304aab7488d9a9fbfe1f912e.jpg',
                'icon' => 'b74d37d15b569174de3e11dcdc923ecd.png',
                'created_at' => '2018-07-22 07:47:34',
                'updated_at' => '2018-07-22 07:47:34',
            ),
            6 => 
            array (
                'menu_id' => 1,
                'id' => 7,
                'title' => 'Social Media Marketing',
                'description' => '<p>Social Media Marketing</p>',
                'image' => '4b6d40f0309f5945c4b0582223a496eb.jpg',
                'icon' => '0c5c58e9dbea7123796d4edc2c3c276a.png',
                'created_at' => '2018-07-22 07:47:34',
                'updated_at' => '2018-07-22 07:47:34',
            ),
        ));
        
        
    }
}