<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Collections;
use Illuminate\Routing\Controller;
use Illuminate\View\Middleware\ShareErrorsFromSession;




Route::get('/blog.category',function(Request $request){
    return view('blog.create-category',array(
        'title'=>'Tao chuyen muc'
        
    ));
});
//Route::post('/blog.category',function(Request $request){
//    $cate=new Category();
//    $validator=Validator::make($request->all(),[
//       'title'=>'required|min:5|max:150',
//        'content'=>'required'
//    ]);
//    // kiem tra dl
//    if($validator->fails()){
//        return Redirect('/blog.create')
//                ->withErrors($validator)
//                ->withInput();
//    }else{
//            $cate->title=$request->title;
//            $cate->content=$request->content;
//            $cate->save();
//            return Redirect('blog.create-category')
//                ->with('message',"Tao chuyen muc thanh cong");
//    }
//    
//});