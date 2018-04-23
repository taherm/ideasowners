<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([

            [
                'title' => 'Web Development',
                'description' => '<p>Web Development</p>',
                'menu_id' => '1',
                'icon'=>'0a5d94bd16e9edf21b19ab7cd1a5a914.png',
                'image' => 'b3652a74abfd66320af39b483020e3ad.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Graphic Designing',
                'description' => '<p>Graphic Designing</p>',
                'menu_id' => '1',
                'icon'=>'5aa0cdb20f663ce5ca1c0974ec27058f.png',
                'image' => '315923288798832441ee08e3ef7f88f8.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' =>'Video Ads Production',
                'description' => '<p>Video Ads Production</p>',
                'menu_id' => '1',
                'icon'=>'3726bd6afd5cf5d78433f95b1664aea9.png',
                'image' => '82945620381e58824dded44f79abc3a7.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' =>'Logo Design',
                'description' => '<p>Logo Design</p>',
                'menu_id' => '1',
                'icon'=>'b74d37d15b569174de3e11dcdc923ecd.png',
                'image' => '17b9a837304aab7488d9a9fbfe1f912e.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' =>'Social Media Marketing',
                'description' => '<p>Social Media Marketing</p>',
                'menu_id' => '1',
                'icon'=>'0c5c58e9dbea7123796d4edc2c3c276a.png',
                'image' => '4b6d40f0309f5945c4b0582223a496eb.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
            
        ]);
    }
}
