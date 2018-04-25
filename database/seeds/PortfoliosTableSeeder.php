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
            [
                'title' =>'HA Home Made Soap Project',
                'description' => '<p>أ&zwnj;)&nbsp;&nbsp;&nbsp; نظرة عامة على السوق وحجمه<br />i-&nbsp;&nbsp;&nbsp; صف السوق الأساسي للشركة الخاصة بك ومكانك فيه<br />&nbsp;&nbsp;&nbsp; تجارة الجملة&nbsp; بدولة الكويت <br />&nbsp;&nbsp;&nbsp; تجارة التجزئة <br />&nbsp;&nbsp;&nbsp; الجميعيات التعاونية <br />&nbsp;&nbsp;&nbsp; جميع&nbsp; السكان داخل الدولة. <br />&nbsp;&nbsp;&nbsp; النوادي الترفيهية والفنادق. <br />&nbsp;&nbsp;&nbsp; النوادي الصحية للرجال والنساء<br />&nbsp;&nbsp;&nbsp; البقالات <br />&nbsp;&nbsp;&nbsp; الفنادق<br />ii-&nbsp;&nbsp;&nbsp; قدّر حجم السوق ونسبة نموه المتوقعة للخمس سنوات المقبلة<br />السكان في دولة الكويت ومعدل النمو <br />النمو السكاني على مستوة الدولة : <br />السنة&nbsp;&nbsp;&nbsp; كويتي&nbsp;&nbsp;&nbsp; غير كويتي&nbsp;&nbsp;&nbsp; عدد السكان الإجمالي <br />2010&nbsp;&nbsp;&nbsp; 1,148,363&nbsp;&nbsp;&nbsp; 2,433,691&nbsp;&nbsp;&nbsp; 3,582,054<br />2011&nbsp;&nbsp;&nbsp; 1,183,185&nbsp;&nbsp;&nbsp; 2,514,107&nbsp;&nbsp;&nbsp; 3,697,292<br />2012&nbsp;&nbsp;&nbsp; 1,212,436&nbsp;&nbsp;&nbsp; 2,611,292&nbsp;&nbsp;&nbsp; 3,823,728<br />2013&nbsp;&nbsp;&nbsp; 1,242,499&nbsp;&nbsp;&nbsp; 2,722,645&nbsp;&nbsp;&nbsp; 3,965,144<br />2014&nbsp;&nbsp;&nbsp; 1,275,857&nbsp;&nbsp;&nbsp; 2,816,136&nbsp;&nbsp;&nbsp; 4,091,993<br />2015&nbsp;&nbsp;&nbsp; 1,307,605&nbsp;&nbsp;&nbsp; 2,931,401&nbsp;&nbsp;&nbsp; 4,239,006<br />2016&nbsp;&nbsp;&nbsp; 1,337,693&nbsp;&nbsp;&nbsp; 3,073,431&nbsp;&nbsp;&nbsp; 4,411,124<br />2017&nbsp;&nbsp;&nbsp; 1,370,013&nbsp;&nbsp;&nbsp; 3,130,463&nbsp;&nbsp;&nbsp; 4,500,476<br /><br />&nbsp; بلـغ عدد دولة الكويت في العام&nbsp; 2017 في التعداد العام&nbsp; 4.500&nbsp; مليون نسمة مقارنة بـ 3.582 مليون نسمة تقريبا&nbsp; في عام 2010، ويشكل السـكان الكوييتيين 1.370 مليون نسمة، أي بنسبة (32.28%)&nbsp; وغير الكوتيين نسبة (68% ) من جملة السكان <br />مما يظهر مؤشر معدل نمو السكان في&nbsp; دولة الكويت&nbsp; 4.5% &nbsp;&nbsp;&nbsp; <br />متوسط دخل الفرد :<br />بلغ متوسط حجم الأسرة في دولة الكويت من 1 الى 3&nbsp; أفراد وبلغ متوسط الدخل السنوي للفرد دولة الكويت 7259.2 د.ك سنويا&nbsp; ومتوسط دخل الاسرة الكويتية سنويا&nbsp; 3351 شهريا . <br /><br /><br />ب&zwnj;)&nbsp;&nbsp;&nbsp; اتجاهات القطاع<br />i-&nbsp;&nbsp;&nbsp; ناقش الاتجاهات العامة في القطاع<br />قطاع تصنيع وتوزيع منتجات الصابون ومشتقاتها في نمو مستمر حيث أنها من المنتجات الإستهلاكية اليومية والتي لا غنى عنها&nbsp; لكل افراد المجتمع. <br /><br />ii-&nbsp;&nbsp;&nbsp; اشرح الاتجاهات المقبلة التي قد تغيّر السوق<br />&nbsp;&nbsp;&nbsp; التقدم التكونولوجي في تقيم المنتجات.&nbsp; <br />&nbsp;&nbsp;&nbsp; زيادة المعروض من المنتجات <br />&nbsp;&nbsp;&nbsp; زيادة الطلب على&nbsp; منتجات المشروع. <br /><br />iii-&nbsp;&nbsp;&nbsp; حلّل أثر التغيرات في السوق (تغيير على سبيل المثال في الفائدة، صدمة العرض / الطلب ...) على الشركة واقترح وسائل للتغلب عليها<br />1.&nbsp;&nbsp;&nbsp; زيادة اعداد المنافسين لنفس نوع&nbsp; المنتج . <br />2.&nbsp;&nbsp;&nbsp; نقص الطلب على منتجات المشروع. <br />يمكن التغلب على التغيرات في السوق عن طريق <br />3.&nbsp;&nbsp;&nbsp; وضع هامش ربح مناسب بما يتلائم مع العرض المتوقع حيث ان المنتجات ذات مرونة سعرية. <br />4.&nbsp;&nbsp;&nbsp; إنشاء التخفيضات الموسمية <br />5.&nbsp;&nbsp;&nbsp; عمل خصومات للكميات <br />6.&nbsp;&nbsp;&nbsp; تقليل&nbsp; نسب المخزون. <br /><br />ت&zwnj;)&nbsp;&nbsp;&nbsp; أجزاء السوق المستهدف<br />i-&nbsp;&nbsp;&nbsp; حدّد السوق الذي سوف تستهدفه والذي سيتم تجاهله (الاحتياجات الملّحة، التركيبة السكانية، الموقع، والاتجاهات الموسمية، القوة الشرائية للمشتريين، والقوة الشرائية للموردين)<br />السوق المستهدف : <br />&nbsp;&nbsp;&nbsp; جميع السكان من جميع الفئات والاعمال.<br />&nbsp;&nbsp;&nbsp; تجار الجملة.<br />&nbsp;&nbsp;&nbsp; تجارة التجزئة.<br />&nbsp;&nbsp;&nbsp; الجمعيات التعاونية. <br />&nbsp;&nbsp;&nbsp; النوادي الصحية.<br />&nbsp;&nbsp;&nbsp; الفنادق والمطاعم الكبيرة. <br />&nbsp;&nbsp;&nbsp; البقالات. <br />&nbsp;&nbsp;&nbsp; الصيدليات. <br />&nbsp;&nbsp;&nbsp; المستشفيات العامة والخاصة. <br />&nbsp;&nbsp;&nbsp; العيادات الخاصة.<br />&nbsp;&nbsp;&nbsp; الفنادق<br /><br />ii-&nbsp;&nbsp;&nbsp; حدّد مستوى اختراق السوق/ الحصة السوقية التي تملكها الشّركة، إذا كانت الشركة قائمة، والمستوى الذي تهدف إلى تحقيقه في السنوات الخمس المقبلة<br />المستوى الذي نرغب الوصول اليه في السنوات الخمس القادمة ( الاستحواذ على نسبة وحصة عالية من السوق ) بنسة 3% من حجم الطلب الحالي والمتوقع. <br />مع زيادة النسبة سنويا الى&nbsp; 2% من اجمالي حجم الطلب المتوقع للسنوات الخمس القادمة.</p>
                <br>
                <a href="/uploads/HA_Home_Made_Soap.pdf">PDF</a>',
                'weblink'=>'/',
                'menu_id' => '2',
                'tag'=>'feasibility',
                'image' => '6d2eb2856e0ddbc6daac76035f3a761e.jpeg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' =>'Daily Dresses Project',
                'description' => '<p>يعتبر مشروع إنشاء مصنع ملابس جاهزة نسائية من المشاريع الحديثة الهامة والتي تفيد المجتمع بجميع طوائفة وفي ظل التقدم التكنولوجي الحديث فكان لابد من أن نفكر في كيفية استغلال هذه التكنولوجيا بشكل فعال داخل المجتمع ومن هنا جاء التفكير في إنشاء مصنع للملابس النسائية الجاهزه و للملابس النسائية التى ترتديها النساء وظيفتنان أساسيتان هما المظهر اللائق والملائمة مع ثقافة البلاد وأيضاً المحافظة على الصحة العامة ومع التغيرات التي طرأت عبر مئات السنين الماضية على مستوى المعيشة الثقافي والإجتماعي ونمط الملابس ، غذت الملابس الخارجية جزء أساسي&nbsp; يعبرعن&nbsp; شخصية الإنسان بغض النظرعن وظيفتها الاساسية زاد الإهتمام المتعلق بجودة الملابس من حيث التصميم ومادة الصنع. <br /><br />وسوف يقوم المشروع موضوع الدراسة بإنتاج الملابس النسائية الجاهزة بمواصفات فنية وجودة عالية وتوفير الملابس الجاهزة المنتجة محليا بأسعار مناسبة وجودة عالية تفي بمتطلبات المنافسة للمنتجات المستوردة والتي تتناسب مع الذوق الخليجي، حيث أن هناك نواقص مازالت موجودة في صناعة الملابس الجاهزة وهي ما يمكن الاستفادة منها عبر رفع القيمة المضافة من حيث تقنيات الصناعة وتصميم الملابس والذوق العام الذي ينظر إليه المستهلك بالدرجة الأولى. وسوف يقوم المشروع بإنتاج الملابس الجاهزة من جميع الأقمشة مثل (العباءات والدارعات والقمصان الحريمي بمختلف أوزانها وأحجامها ومنتجات الأزياء)..<br />المشروع المقترح يقوم بإنتاج الملابس النسائية الجاهزه والتي تغطي احتياجات الإناث بجميع الفئات وسيقوم المشروع المقترح بإنتاج الأصناف التالية : <br />1.&nbsp;&nbsp;&nbsp; دراعات للفتيات والنساء موديل A<br />2.&nbsp;&nbsp;&nbsp; عبايات للفتيات والنشاء&nbsp; موديل A<br />3.&nbsp;&nbsp;&nbsp; عبايات للفتيات والنشاء&nbsp; موديل B<br />4.&nbsp;&nbsp;&nbsp; عبايات للفتيات والنشاء&nbsp; موديل B<br />5.&nbsp;&nbsp;&nbsp; بنطلون للسيدات والنساء.<br />6.&nbsp;&nbsp;&nbsp; ملابس خارجية اخرى للسيدات والبنات. <br />7.&nbsp;&nbsp;&nbsp; ملابس ينوفورم ( النساء &ndash; البنات). <br /><br />يمكن تصنيف الملابس النسائية إلى الانواع التالية : <br />صناعة الأزياء النسائية الرسمية أو "الفورمال". <br />صناعية الازياء النسائية العملية. <br />صناعة الأزياء النسائية المنزلية. <br />صناعة الازياء النسائية&nbsp; للمناسبات العامة والخاصة. <br /><br />يهدف المشروع المقترح إلى إنتاج الملابس النسائية والمصنوعة من النسيج القطني والحرير الطبيعي وغيرها وتوفيرها في السوق المحلي والخليجي بسعر مناسب.&nbsp; <br />ومن أهم مبررات المشروع:</p>
                <p><br /> <a href="../../uploads/daily_dresses.pdf">PDF</a></p>',
                'weblink'=>'/',
                'menu_id' => '2',
                'tag'=>'feasibility',
                'image' => '30442c19bad4c896515ac4b9c3966d3f.jpeg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' =>'Nursery Baby Project in Kuwait',
                'description' => '<p>i-&nbsp;&nbsp; &nbsp;صف السوق الأساسي للشركة الخاصة بك ومكانك فيه<br />هذه الدراسة ستأخذ في الإعتبار النمو السكاني ومرونة الطلب والعرض السعرية ، بالإضافة إلى العوامل الأخرى المؤثرة على الطلب، وتأثيرها على خدمات&nbsp; الحضانات ، مع العلم أن هناك&nbsp; حضانات معتمدة طبقا لإحصائية&nbsp; وزارة الشئون الاجتماعية والعمل في دولة الكويت تقدر عدد الحضانات حوالي (462 ) والمشاركين بالحضانات للعام 2017 (433 مشترك)&nbsp; ، كما هو موضع بالجدول التالي جدول رقم (1)&nbsp; : <br />السنة&nbsp;&nbsp; &nbsp;عدد الحضانات&nbsp;&nbsp; &nbsp;عدد الأطفال الملتحقين<br />2010&nbsp;&nbsp; &nbsp;212&nbsp;&nbsp; &nbsp;14744<br />2011&nbsp;&nbsp; &nbsp;219&nbsp;&nbsp; &nbsp;15796<br />2012&nbsp;&nbsp; &nbsp;243&nbsp;&nbsp; &nbsp;16502<br />2013&nbsp;&nbsp; &nbsp;312&nbsp;&nbsp; &nbsp;23807<br />2014&nbsp;&nbsp; &nbsp;320&nbsp;&nbsp; &nbsp;21760<br />2015&nbsp;&nbsp; &nbsp;359&nbsp;&nbsp; &nbsp;30879<br />2016&nbsp;&nbsp; &nbsp;398&nbsp;&nbsp; &nbsp;33508<br />2017&nbsp;&nbsp; &nbsp;433&nbsp;&nbsp; &nbsp;37616<br />المصدر : وزارة الشئون الإجتماعية والعمل دولة الكويت<br />جدول رقم (1)<br /><br />&nbsp;<br /><br /><br />جوانب الطلب على خدمات&nbsp; المشروع : <br />العوامل المؤثرة على الطلب : - <br /><br />يتحدد الطلب على خدمات&nbsp; المشروع المختلفة، بعدة متغيرات مثل عوامل سكانية وإجتماعية وإقتصادية مثل مستوى الدخول، من أبرزها الزيادة المستمرة في حجم السكان (المواطنين والوافدين) على حد سواء وتطور القطاعات الصناعيه والثقافة والتعليمية للأفراد والنساء الموظفات , حيث يوجد علاقة طردية بين الطلب على الحضانات مع نمو النساء الموظفات داخل&nbsp; الدولة وطبيعة المعيشة في دولة الكويت. <br />لذا يتعين التركيز على مواكبة النمو على الطلب على مشروع الحضانات قيد الدراسة، من خلال دراسة العوامل السابقة لمعرفة حجم الطلب المتوقع على المشروع خلال السنوات المقبل. &nbsp;<br />والحضانات من المشاريع&nbsp; التي تتمتع بمرونه&nbsp; طلب عاليه.&nbsp; ومن المشاريع الواعدة جدا وخاصة مع التطور المستمر في تكنولوجيا التعليم والتطوير، بالإضافة إلى الفجوة الكبيرة المتوقعة في الطب خلال الأعوام القادمة، والطلب المتنامي عليها ، والخطط الطموحة في مجال تنمية الموارد البشرية والاهتمام بالجوانب الصحية للأفراد وإرتفاع الثقافة الإستهلاكية للمجتمع. حيث لا يخفي على أحد الأهمية الإقتصادية والإجتماعية والبيئية للتعليم المبكر والمتمثل في&nbsp; إنشاء الحضانات&nbsp; مما يوضح الأثر الأيجابي الذي تعكسة على الوضع الإقتصادي والقيمة المضافة والتأثير البيئي وغيره من الإيجابيات الأخرى للمشروع.<br />النمو السكاني على مستوة الدولة :</p>
                <br>
                <a href="/uploads/nursery_baby.pdf">PDF</a>',
                'weblink'=>'/',
                'menu_id' => '2',
                'tag'=>'feasibility',
                'image' => 'b7133b8181f261fdb87b5b5f48176e9e.jpeg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
            

        ]);

    }
}
