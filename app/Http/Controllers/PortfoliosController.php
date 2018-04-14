<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class PortfoliosController extends Controller
{
    public function show($url)
    {
       
        $ser=Portfolio::where('title', '=', $url)->first();
        //return view('services.'.$url,compact('ser'));
        return view('layouts.new-portfolio-layout',compact('ser'));
    }

    public function find($id)
    {
        $ser=Portfolio::find($id);
        //return view('services/'.$ser->title,compact('ser'));
        return view('layouts.new-portfolio-layout',compact('ser'));
    }



}
