<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

//khai bao moi 1 route
Route::get('/intro', function (){
    return view('intro');
});

Route::get('/contact', function (){
    return view('contact');
});

Route::get('/danh-muc/quan-ao-tre-em', function (){
    return view('danhmuc.quanaotreem');
});

Route::get('/tin-tuc/{id}', function ($id){
    echo "<br> bien id duoc lay tren url" .$id;
    return view('tintuc');
});

Route::get('/binh-luan/{id?}', function ($id = 0){
    echo "<br> bien id duoc lay tren url" .$id;
});

Route::get('/post/{postId}/comment/{commentId}', function ($postId, $commentId){
    echo "<br> bien postId duoc lay tren url" .$postId;
    echo "<br> bien commentID duoc lay tren url" .$commentId;
});

Route::get('/tin-tuc-trong-ngay/{id}', function ($id){
    echo "<br> bien id duoc lay tren url" .$id;
    //truyen mang xuong view
    $data = [];
    $data['id_tin'] = $id;
    $data['message'] = "ha noi";
    $data['code'] = "php";
    return view('tintuctrongngay',$data);
});

Route::get('/lien-he', function (){
    echo "router lien he";
})->name('lienhe');

Route::get('/lien-he-admin', 'lienheController@index');

Route::get('/lien-he-mod', 'CodeBase\ContactController@index');

Route::get('/lien-he-mod-var/{categoryId}/{postId}', 'CodeBase\ContactController@index2');

Route::get('codebase/blog/index', 'Codebase\BlogController@index');
Route::get('codebase/blog/create', 'Codebase\BlogController@create');
Route::get('codebase/blog/edit/{id}', 'Codebase\BlogController@edit');
Route::get('codebase/blog/delete/{id}', 'Codebase\BlogController@delete');

Route::get('/blade/index', 'Codebase\BladeController@index');
Route::get('/blade/index-master', 'Codebase\BladeController@indexMaster');
Route::get('/blade/home', 'Codebase\BladeController@home');
Route::get('/blade/intro', 'Codebase\BladeController@intro');
Route::get('/blade/contact', 'Codebase\BladeController@contact');
Route::get('/blade/news', 'Codebase\BladeController@news');

Route::get("/product/create", "Codebase\ProductController@create");
Route::post("/product/store", "Codebase\ProductController@store");

/*===============end==========*/
/*=============== test 1==========*/

Route::get("/product/detail/{id}/{return}", "Codebase\ProductController@detail");
Route::get("/product/responsel", "Codebase\ProductController@demoResponsel");
Route::get("/product/responsel2", "Codebase\ProductController@demoResponsel2")->name("responsel2");
//chuyen huong den 1 url ben ngoai trang web
Route::get("/product/responsel3", "Codebase\ProductController@demoResponsel3");
Route::get("/product/responsel4", "Codebase\ProductController@demoResponsel4");
Route::get("/product/response5", "Codebase\ProductController@demonResponse5");

Route::get("/product/response6", "Codebase\ProductController@demoResponse6");
Route::get("/product/response7/{id}", "Codebase\ProductController@demoResponse7")->name("response7");

Route::get("/product/response8", "Codebase\ProductController@demoResponse8");
Route::get("/product/response9", "Codebase\ProductController@demoResponse9");

Route::get("/di-an-sang", function (){
   echo "<br> đi an sang";
})->middleware("openhour");

Route::get("/dong-cua", function (){
    echo"<br> dang dong cua chua den gio lam viec";
});

//Route::get("/create", "Codebase\ProductController@handl");
//Route::get("/dong-cua", "Codebase\ProductController@dongcua");




