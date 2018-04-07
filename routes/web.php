<?php
use App\Service;
use App\Slider;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $slider=Slider::all();
    $ser=Service::all();

    return view('index',compact('slider','ser'));
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services/web-development', function () {
    return view('services.web-development');
});

Route::post('/contact-mail','ContactController@send');
Route::get('services/menu/{url}','ServicesController@show');
Route::get('services/{id}','ServicesController@find');
Route::get('menu/{url}','MenuController@show');


Route::get('admin','AdminController@index');
Route::post('admin/slider','AdminController@add_slider');
Route::delete('admin/del-slider','AdminController@delete_slider');
Route::get('admin/delete-slider',function () {
    return view('admin.delete-slider');
});
Route::get('admin/add-slider',function () {
    return view('admin.add-slider');
});
Route::get('admin/create-page', function () {
    return view('admin.pages');
});
Route::delete('del','AdminController@del');
Route::post('sub-menu','AdminController@submenu');
Route::post('main-menu','AdminController@mainmenu');
Route::post('admin','AdminController@store');
Route::delete('admin/{id}','AdminController@destroy');
Route::get('admin/{id}/edit','AdminController@edit');
Route::post('admin/{id}','AdminController@update');
Route::get('admin/sub-menu', function () {
    return view('admin.sub-menu');
});
Route::get('admin/main-menu', function () {
    return view('admin.main-menu');
});
Route::get('admin/delete-menu', function () {
    return view('admin.delete-menu');
});
