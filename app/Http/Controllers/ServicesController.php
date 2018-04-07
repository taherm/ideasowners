<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Service;


class ServicesController extends Controller
{
    
    public function index()
    {
        $ser=Service::all();
        return view('services',compact('ser'));
    }

    public function find($id)
    {
        $ser=Service::find($id);
        //return view('services/'.$ser->title,compact('ser'));
        return view('layouts.new-service-layout',compact('ser'));
    }


    public function create()
    {
        
        return view('services.create');
    }

   

    public function edit($id)
    {
        $serv=Service::find($id);
        return view('services.edit',compact('serv'));
    }

    


    public function update($id)
    {
        //dd('stopo here');
        $this->validate(request(),[
        'title'=>'required',
        'description'=>'required',
        'image'=>'required'
         ]);
        
        $serv=Service::find($id);

        $serv->title=request('title');
        $serv->description=request('description');
        $temp=request('image');
        $filename='img/services/'.$temp;
        $serv->image=$filename;
        
        $serv->save();
        //dd(request()->all());
        return redirect('/services');
    }




    public function store()
    {
    
    $this->validate(request(),[
       'title'=>'required',
       'description'=>'required'
       
        ]);
   
      $temp= File::get("C://xampp/htdocs/pim/resources/views/layouts/new-service-layout.blade.php");
       

    if(request('submenu')=="services")
    {
        File::put("C://xampp/htdocs/pim/resources/views/services/".request('title').'.blade.php',$temp);
        $serv=new Service;
        $serv->title=request('title');
        $serv->description=request('description');
        $temp=request('image');
        $filename='img/services/'.$temp;
        $serv->image=$filename;
        $serv->save();
    }
    else{
        File::put("C://xampp/htdocs/pim/resources/views/menu/".request('title').'.blade.php',$temp);

    }
    //File::put("C://xampp/htdocs/pim/resources/views/services/".request('title').'.blade.php','John Doe is a good boy');

    if(request('submenu')!='None')
    {
    $menu=new Menu;
    $menu->title=request('title');
    $menu->url=request('url');
    $menu->parent_id=Menu::where('title',request('submenu'))->first()->id;
    $menu->save();
    }
    else
    {

    }

    //dd(request()->all());
    return redirect('/services');
    }


    public function destroy($id)
    {
        
        $serv=Service::find($id);
        $menu=Menu::where('title',"=",$serv->title)->first();
        $menu->delete();
        
        $serv->delete();
        return redirect('/services');
    }


    public function show($url)
    {
       
        $ser=Service::where('title', '=', $url)->first();
        //return view('services.'.$url,compact('ser'));
        return view('layouts.new-service-layout',compact('ser'));
    }



}
