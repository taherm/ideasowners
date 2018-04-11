<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Slider;
use App\Menu;
use App\Portfolio;


class AdminController extends Controller
{
    

    public function index()
    {
       $ser=Service::all();
        return view('admin.index',compact('ser'));
    }

    public function show()
    {
       $ser=Service::all();
        return view('admin.pages',compact('ser'));
    }


    public function portfolio()
    {
       $ser=Portfolio::all();
        return view('admin.portfolios',compact('ser'));
    }

    public function delete_slider()
    {
       
        Slider::where('image',request('image'))->delete();

        return redirect('/admin/delete-slider');
    }
    public function add_slider()
    {
        $slide=new Slider;
        $temp=request('image');
        if(!(fnmatch('* http://www.youtube.com/* *',$temp)))		
        {
            $slide->image=$temp;
            $slide->save(); 
        }
else{
    $filename='img/slider/'.$temp;
    $slide->image=$filename;
   
    $slide->save();
}
        
        return redirect('/admin/add-slider');
    }


    public function edit_menu($id)
    {
        $serv=Menu::find($id);
        return view('admin.menu_edit',compact('serv'));
    }
    




    public function submenu()
    {
       
         $menu=new Menu;
         $menu->title=request('title');
         
        $menu->parent_id=Menu::where('title',request('submenu'))->first()->id;
        
         
         $menu->url="menu/".request('title');
         $menu->save();
        //$temp= File::get("C://xampp/htdocs/pim/resources/views/layouts/new-service-layout.blade.php");
        //File::put("C://xampp/htdocs/pim/resources/views/services/".request('title').'.blade.php',$temp);
         //dd(request()->all());
         return redirect('/admin');
    }



    
    public function mainmenu()
    {
       
         $menu=new Menu;
         $menu->title=request('title');
         
        $menu->parent_id='0';
        $menu->url="menu/".request('title');
         $menu->save();
        //$temp= File::get("C://xampp/htdocs/pim/resources/views/layouts/new-service-layout.blade.php");
        //File::put("C://xampp/htdocs/pim/resources/views/services/".request('title').'.blade.php',$temp);
         //dd(request()->all());
         return redirect('/admin');
    }


    public function edit($id)
    {
        $serv=Service::find($id);
        return view('admin.edit',compact('serv'));
    }

    public function update($id)
    {
        $serv=Service::find($id);
        $fn=$serv->title;
        $serv->title=request('title');
        $serv->description=request('description');
        $temp=request('image');
        $filename='img/services/'.$temp;
        $serv->image=$filename;
        $temp2=request('icon');
        $filename2='img/services/'.$temp2;
        $serv->icon=$filename2;
        
        $menu=Menu::where('title',"=",$fn)->first();
        $menu->title=request('title');
        $menu->url="services/menu/".$serv->title;
        if(request('menu')!='None')
{
    $menu->parent_id=Menu::where('title',request('menu'))->first()->id;

}
$menu->save();
        $serv->save();
        //File::move("C://xampp/htdocs/pim/resources/views/services/".$fn.'.blade.php',"C://xampp/htdocs/pim/resources/views/services/".request('title').'.blade.php');
        //dd(request()->all());
        return redirect('/admin');
    }




    public function edit_portfolio($id)
    {
        $portfolio=Portfolio::find($id);
        $fn=$portfolio->title;
        $portfolio->title=request('title');
        $portfolio->description=request('description');
        $temp=request('image');
        $filename='img/porfolio/'.$temp;
        $portfolio->image=$filename;
        $portfolio->tag=request('tag');
        
        $menu=Menu::where('title',"=",$fn)->first();
        $menu->title=request('title');
        $menu->url="portfolio/menu/".$portfolio->title;
        if(request('menu')!='None')
{
    $menu->parent_id=Menu::where('title',request('menu'))->first()->id;

}
$menu->save();
        $portfolio->save();
        //File::move("C://xampp/htdocs/pim/resources/views/services/".$fn.'.blade.php',"C://xampp/htdocs/pim/resources/views/services/".request('title').'.blade.php');
        //dd(request()->all());
        return redirect('/admin');
    }







    public function updatemenu($id)
    {
            $serv=Menu::find($id);
            $fn=$serv->title;
            if($service=Service::where('title',"=",$fn)->first())
            {
             $service->title=request('title');
             $service->save();
            }

            $serv->title=request('title');
            
            $menu=Menu::where('title',"=",$fn)->first();
            $menu->title=request('title');
            $menu->url="menu/".$serv->title;
            if(request('menu')!='None')
            {
                $menu->parent_id=Menu::where('title',request('menu'))->first()->id;
            
            }
    $menu->save();
    //File::move("C://xampp/htdocs/pim/resources/views/services/".$fn.'.blade.php',"C://xampp/htdocs/pim/resources/views/services/".request('title').'.blade.php');
            //dd(request()->all());
            return redirect('/admin');
    }

    





    public function store()
    {
        $serv=new Service;
        $serv->title=request('title');
        $serv->description=request('description');
        $temp=request('image');
        $filename='img/services/'.$temp;
        $serv->image=$filename;
        $temp2=request('icon');
        $filename2='img/services/'.$temp2;
        $serv->icon=$filename2;
        $serv->save();
    
    //File::put("C://xampp/htdocs/pim/resources/views/services/".request('title').'.blade.php','John Doe is a good boy');


    $menu=new Menu;
    $menu->title=request('title');
    if (isset($_POST['menu'])) {
        $menu->parent_id='0';
        // Checkbox is selected
    } else {
        $menu->parent_id=Menu::where('title',request('submenu'))->first()->id;
    }
    
   // $menu->url=request('url');
   $menu->url="services/menu/".request('title'); 
   
   $menu->save();

    //dd(request()->all());
    return redirect('/admin');
    }

  






    public function add_portfolio()
    {
        $portfolio=new Portfolio();
        $portfolio->title=request('title');
        $portfolio->description=request('description');
        $temp=request('image');
        $filename='img/portfolio/'.$temp;
        $portfolio->image=$filename;
        
        $portfolio->tag=request('tag');
        $portfolio->save();
    
    //File::put("C://xampp/htdocs/pim/resources/views/services/".request('title').'.blade.php','John Doe is a good boy');


    $menu=new Menu;
    $menu->title=request('title');
    if (isset($_POST['menu'])) {
        $menu->parent_id='0';
        // Checkbox is selected
    } else {
        $menu->parent_id=Menu::where('title',request('submenu'))->first()->id;
    }
    
   // $menu->url=request('url');
   $menu->url="portfolio/menu/".request('title'); 
   
   $menu->save();

    //dd(request()->all());
    return redirect('/admin');
    }

  



    public function destroy($id)
    {
        
        $serv=Service::find($id);
        $menu=Menu::where('title',"=",$serv->title)->first();
        //$temp=$menu->title;
        //File::delete("C://xampp/htdocs/pim/resources/views/services/".$temp.'.blade.php');
        $menu->delete();
        
        $serv->delete();
        
        return redirect('/admin');
    }


    public function delete_portfolio($id)
    {
        
        $portfolio=Portfolio::find($id);
        $menu=Menu::where('title',"=",$portfolio->title)->first();
        //$temp=$menu->title;
        //File::delete("C://xampp/htdocs/pim/resources/views/services/".$temp.'.blade.php');
        $menu->delete();
        
        $portfolio->delete();
        
        return redirect('/admin');
    }





    public function del($id)
    {
       $menu= Menu::find($id);
       if($service=Service::where('title',"=",$menu->title)->first())
       {
        $service->delete();
    }
       //$temp=$menu->title;
       //File::delete("C://xampp/htdocs/pim/resources/views/services/".$temp.'.blade.php');
       $menu->delete();
      
       //$temp=$menu->title;
      // File::delete("C://xampp/htdocs/pim/resources/views/services/".$temp.'.blade.php');
 
      //Menu::where('title',request('submenu'))->delete();
    return redirect('/admin');
    }

    




}
