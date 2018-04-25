<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Slider;
use App\Menu;
use App\Portfolio;
use Intervention\Image\Facades\Image;
use Storage;
use File;

class AdminController extends Controller
{

    const UPLOAD_PATH = '/uploads/';
    public function index()
    {
        $ser = Service::all();
        return view('admin.index', compact('ser'));
    }

    public function show()
    {
        $ser = Service::all();
        return view('admin.pages', compact('ser'));
    }


    public function portfolio()
    {
        $ser = Portfolio::all();
        return view('admin.portfolios', compact('ser'));
    }

    public function delete_slider()
    {
        Slider::where('image', request('image'))->delete();
        return redirect('/admin/delete-slider');
    }

    public function add_slider(Request $request)
    {
        $this->validate(request(), [
            'image' => 'required'
        ]);
        $slide = new Slider;
        $image = request()->image;
        $imageName = md5(uniqid(rand() * (time()))) . '.' . $image->getClientOriginalExtension();
        $savePath = public_path(self::UPLOAD_PATH . $imageName);
        Image::make($image)->save($savePath, 100);
        $fullImagePath =$imageName;
        $slide->image = $fullImagePath;
        $slide->save();
        return redirect('/admin/add-slider');
    }


    public function edit_menu($id)
    {
        $serv = Menu::find($id);
        return view('admin.menu_edit', compact('serv'));
    }


    public function submenu()
    {
        $this->validate(request(), [
            'title' => 'required'
        ]);
        $menu = new Menu;
        $menu->title = request('title');
        $menu->parent_id = Menu::where('title', request('submenu'))->first()->id;
        $menu->url = "";
        $menu->save();
        return redirect('/admin');
    }


    public function mainmenu()
    {
        $this->validate(request(), [
            'title' => 'required'
        ]);
        $menu = new Menu;
        $menu->title = request('title');
        $menu->save();
        return redirect('/admin');
    }


    public function edit($id)
    {
        $serv = Service::find($id);
        return view('admin.edit', compact('serv'));
    }

    public function update($id)
    {
        $this->validate(request(), [
            'image' => 'required',
            'icon'=>'required'
        ]);
        $serv = Service::find($id);
        $fn = $serv->title;
        $serv->title = request('title');
        $serv->description = request('description');
        $image = request()->image;
        $imageName = md5(uniqid(rand() * (time()))) . '.' . $image->getClientOriginalExtension();
        $savePath = public_path(self::UPLOAD_PATH . $imageName);
        Image::make($image)->save($savePath, 100);
        $fullImagePath =$imageName;
        $serv->image = $fullImagePath;
        $icon = request()->icon;
        $iconName = md5(uniqid(rand() * (time()))) . '.' . $icon->getClientOriginalExtension();
        $savePath = public_path() . self::UPLOAD_PATH . $iconName;
        Image::make($icon)->save($savePath, 100);
        $fullIconPath =$iconName;
        $serv->icon = $fullIconPath;
        $serv->menu_id=Menu::where('title',request('menu'))->first()->id;
        $serv->save();
        return redirect('/admin');
    }


    public function edit_portfolio($id)
    {
        $this->validate(request(), [
            'image' => 'required',
            'tag'=>'required'
        ]);
        $portfolio = Portfolio::find($id);
        $fn = $portfolio->title;
        $portfolio->title = request('title');
        $portfolio->description = request('description');
        $image = request()->image;
        $imageName = md5(uniqid(rand() * (time()))) . '.' . $image->getClientOriginalExtension();
        $savePath = public_path(self::UPLOAD_PATH . $imageName);
        Image::make($image)->save($savePath, 100);
        $fullImagePath =$imageName;
        $portfolio->image = $fullImagePath;
        $portfolio->tag = request('tag');
        $portfolio->weblink = request('weblink');
        $portfolio->menu_id=Menu::where('title',request('menu'))->first()->id;
        $portfolio->save();
        return redirect('/admin');
    }


    public function updatemenu($id)
    {
        $temp = Menu::find($id);
        $menu_name = $temp->title;
        $menu = Menu::where('title', "=", $menu_name)->first();
        $menu->title = request('title');
        $menu->save();
        return redirect('/admin');
    }


    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'icon' => 'required'
        ]);
        $serv = new Service;
        $serv->title = request('title');
        $serv->description = request('description');
        $image = request()->image;
        $imageName = md5(uniqid(rand() * (time()))) . '.' . $image->getClientOriginalExtension();
        $savePath = public_path(self::UPLOAD_PATH . $imageName);
        Image::make($image)->save($savePath, 100);
        $fullImagePath =$imageName;
        $serv->image = $fullImagePath;
        $icon = request()->icon;
        $iconName = md5(uniqid(rand() * (time()))) . '.' . $icon->getClientOriginalExtension();
        $savePath = public_path() . self::UPLOAD_PATH . $iconName;
        Image::make($icon)->save($savePath, 100);
        $fullIconPath =$iconName;
        $serv->icon = $fullIconPath;
        $serv->menu_id=Menu::where('title',request('submenu'))->first()->id;
        $serv->save();
        return redirect('/admin');
    }


    public function add_portfolio()
    {
        $this->validate(request(), [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'tag'=>'required'
            

        ]);
        $portfolio = new Portfolio();
        $portfolio->title = request('title');
        $portfolio->description = request('description');
        $image = request()->image;
        $imageName = md5(uniqid(rand() * (time()))) . '.' . $image->getClientOriginalExtension();
        $savePath = public_path(self::UPLOAD_PATH . $imageName);
        Image::make($image)->save($savePath, 100);
        $fullImagePath =$imageName;
        $portfolio->image = $fullImagePath;
        $portfolio->tag = request('tag');
        $portfolio->weblink = request('weblink');
        $portfolio->menu_id=Menu::where('title',request('submenu'))->first()->id;
       
        $portfolio->save();
        return redirect('/admin');
    }


    public function destroy($id)
    {
        $serv = Service::find($id);
        File::delete('uploads/'.$serv->image);
        File::delete('uploads/'.$serv->icon);
        $serv->delete();
        return redirect('/admin');
    }


    public function delete_portfolio($id)
    {

        $portfolio = Portfolio::find($id);
        File::delete('uploads/'.$portfolio->image);
        $portfolio->delete();
        return redirect('/admin');
    }


    public function del($id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        return redirect('/admin');
    }


}
