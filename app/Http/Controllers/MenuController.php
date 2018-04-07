<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Service;


class MenuController extends Controller
{
    public function index()
    {
        return view('menu.create');
    }

    public function store()
    {
        $this->validate(request(),[
            'title'=>'required',
            'url'=>'required'
            
             ]);
         $menu=new Menu;
         $menu->title=request('title');
         if(request('submenu')=="None")
        {
            $menu->parent_id='0';
        }
        else
        {
            $menu->parent_id=Menu::where('title',request('submenu'))->first()->id;
        }
         
         $menu->url=request('url');
         $menu->save();
         
         return redirect('/');
    }


    public function del()
    {
        
        Menu::where('title',request('submenu'))->delete();
        return redirect('/');
    }


    public function show($url)
    { 
        $ser=Menu::where('title', '=', $url)->first();
        //return view('services.'.$url,compact('ser'));
        return view('layouts.new-service-layout',compact('ser'));
    }  

}
