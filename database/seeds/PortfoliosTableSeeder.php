<?php

use Illuminate\Database\Seeder;

class PortfoliosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([

            [
                'title' => 'Home Key',
                'description' => '
                <p>Search for Properties and Real Estates and save the search information for the next time.<br>
                 Do a map search to make it easier to search in a way that suits you.
                Make adjustments to your search to find the right property for you.<br>
                We help you to access in a smart way almost the same as looking for a property in person.<br>
                Search thoroughly and in detail about the property.<br>
                Search Properties for sale, rent or share.<br>
                Save the properties in the favorite section to quickly find them for the next time.<br>
                Smart alerts and notifications to help you find out the things that you may be interested in.<br>
                </p>
                <br>
                <a href="https://play.google.com/store/apps/details?id=com.homekeyapp">
                https://play.google.com/store/apps/details?id=com.homekeyapp</a>',
                'weblink'=>'https://play.google.com/store/apps/details?id=com.homekeyapp',
                'menu_id' => '2',
                'tag'=>'app',
                'image' => '1fccb29aa14ff936fe39cffd432fe7eb.jpeg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Tasaweeq',
                'description' => '<p>Tasaweeq</p>',
                'weblink'=>'http://tasaweeq.com/',
                'menu_id' => '2',
                'tag'=>'websites',
                'image' => 'db5f98da60b196fb479b9eb80eebae0c.jpeg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' =>'Vazzat',
                'description' => '<p>
                WWW.VAZZAT.COM is a website managed by (Vazzat General Trading Company SPC, incorporated and registered officially in the State of Kuwait. The website is designed to act as the platform of flowers and plants shops and persons specialized in this field. These shops display their products on the website, in order for this website to act as the destination of every person wishing to buy flowers and plants by browsing the website and moving across its sections in order to view the products of the shops and select the suitable product. 
                </P>
                <br>
                <a href="https://play.google.com/store/apps/details?id=com.vazzat">https://play.google.com/store/apps/details?id=com.vazzat
                </a>',
                'weblink'=>'https://play.google.com/store/apps/details?id=com.vazzat',
                'menu_id' => '2',
                'tag'=>'websites',
                'image' => 'd668d438ae9f6ebd404aae215ad11f6e.jpeg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' =>'Petrolet',
                'description' => '<p>
                Oil & gas is a vital business spread across the globe requiring a gamut of services, supplies and expertise. Petrolet offers a platform for all such services, supplies and expertise to showcase their capabilities, specializations and supply chain strengths to the oil & gas business globally, with most of its services free to all registered members.
                </p>
                <br>
                <p>
                Individuals involved in oil & gas business are also free to register at this site, which allows them to display their experience and expertise to wider audience and intended to serve as platform for career advancement. 
                </p>
                <br>
                <p>
                Specially designed to show case strength and uniqueness of services provided by each of the contractors registered, including a short presentation about the contractor. For easy search of prospective end users, contractors are classified in to many work categories. Contractors are permitted to register in multiple work categories and judicious selection of applicable work category for registration vest with the contractor. Incase of contractors with specialized contracting services beyond the list of categories provided, the portal encourages and accommodates requests from such specialized contractors for creation of new work categories. 
                </p>
                <br>
                <a href="http://petrolet.com/">http://petrolet.com/</a>',
                'weblink'=>'http://petrolet.com/',
                'menu_id' => '2',
                'tag'=>'websites',
                'image' => '4db36f2cc52cda78b80df4230ec3da82.jpeg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' =>'Abaty',
                'description' => '<p>Abati is an application concerned for Abyat and hijab fashion. the app target the gulf market (kuwait, saudi arabia, oman, dubai , UAE, Qatar, Bahain)</p>
                <br>
                <a href="https://play.google.com/store/apps/details?id=com.abaty">https://play.google.com/store/apps/details?id=com.abaty
                </a>',
                'weblink'=>'https://play.google.com/store/apps/details?id=com.abaty',
                'menu_id' => '2',
                'tag'=>'app',
                'image' => 'f63ad699f42b8ea25789a9215c0758b2.jpeg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' =>'MissToMrs',
                'description' => '<p>Miss to Mrs is an application that covers all the details of everything you may need in order to organize your wedding away from stress and hassle.
                </p>
                <br>
                <a href="https://play.google.com/store/apps/details?id=com.misstomrs">https://play.google.com/store/apps/details?id=com.misstomrs</a>',
                'weblink'=>'https://play.google.com/store/apps/details?id=com.misstomrs',
                'menu_id' => '2',
                'tag'=>'app',
                'image' => '8153a430b0f6b0aa2cbb181c6c4d113b.jpeg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

        ]);

    }
}
