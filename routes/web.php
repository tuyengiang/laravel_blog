<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/ahihi',function(){
    return view('home.ahihi');
});
Route::get('/ahihi/{thamso}',function(Request $reuest,$thamso){
    return view('home.ahihi',array(
        'thamso'=>$thamso
    ));
    
    
});


Route::get('cute',function(){
    return view('home.cute');
    
});


Route::get('/blog',function(){
    return view('blog.index');
});


Route::get('/blog/create',function(){
   return view('blog.create-post',
           array(
               'title'=>'Tạo bài viết'
           )); 
    
});
Route::get('/blog/single',function(){
    return view('blog.single');
});