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
                'description' => '
<p>Our team of professional web designers have years of experience in developing world class websites. Based on your specific needs our core team of developers can help your business grow on the internet.</p>
<p><strong>We also provide SEO techniques to your projects to make your mark in the online world.</strong></p>',
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
                'description' => '
<p>Mobile app development indeed nowadays necessary for all the business. We, as a mobile application development company can provide high quality standard mobile apps. We have worked with diverse brands, organizations, start-ups and individuals to create powerful apps from excellent idea.</p>',
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
                'description' => '
<p>A feasibility study is a type of analysis used in measuring the ability and likelihood to successfully complete a project including all relevant factors. It must account for factors that affect it such as economic, technological, legal and scheduling factors. Project managers use feasibility studies to determine potential positive and negative outcomes of a project before  a considerable amount of time and money into it. Instead of diving into a project and hoping for the best, a feasibility study acts as a precursor for project managers to investigate the possible negative and positive outcomes of a project before investing too much time and money.</p>
<div style="overflow: hidden; color: #000000; background-color: #ffffff; text-align: left; text-decoration: none;"><br />Our Works:-</div>
<p><a href="../../portfolios/7">HA Home Made Soap Project</a> <br /> <a href="../../portfolios/8">Daily Dresses Project</a> <br /> <a href="../../portfolios/9">Nursery Baby Project in Kuwait</a></p>',
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
                'description' => '
<p>A great visual representation is not only the face of the company, especially nowadays; it is rather one of the key elements of the business success that should be thoroughly considered, because we absolutely believe that every industrious entrepreneur deserves to make the most of their hard work. Further, there is a wide audience out there, packed with potential customers expecting to see something fresh, new and inventive, something that will help them decide precisely for the specific product or service.</p>',
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
                'description' => '
<p>Ideasowners prides itself in its unique approach to provide customized video production solutions to our corporate and individual clients. Our mantra is "<strong>we are storytellers first and videographers second</strong>." This core philosophy is what sets us apart from the average point-and-shoot camera layman, and makes us stand out</p>',
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
                'description' => '
<p>We offer graphic design for all purposes. We create your marketing concepts and all other communication material such as brochures and business cards. Particularly important is that each company gets a meaningful logo with a high level of recognition.</p>',
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
                'description' => '<p>Social media marketing is a powerful way for businesses of all sizes to reach prospects and customers. Your customers are already interacting with brands through social media, and if you\'re not speaking directly to your audience through social platforms like Facebook, Twitter, Instagram, and Pinterest, you\'re missing out! Great marketing on social media can bring remarkable success to your business, creating devoted brand advocates and even driving leads and sales.</p>',
                'image' => '4b6d40f0309f5945c4b0582223a496eb.jpg',
                'icon' => '0c5c58e9dbea7123796d4edc2c3c276a.png',
                'created_at' => '2018-07-22 07:47:34',
                'updated_at' => '2018-07-22 07:47:34',
            ),
        ));
        
        
    }
}