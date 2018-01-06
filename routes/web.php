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
use App\Post;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Collections;
use Illuminate\Routing\Controller;
use Illuminate\View\Middleware\ShareErrorsFromSession;

/* 
 * khi co request vao cai url /blog thi se xu ly o suoi day
 */
Route::get('/',function(){
    $post=Post::all();
    return view('home.index',compact('post'));
});

/*
 * khi co request GEt vao url /blog:create thi cxl duoi day
 */
Route::get('/blog.create',function(Request $request){
    return view('blog.create-post',array(
        'title'=>'Tạo bài viết'
        
    ));
});

Route::post('/blog.create',function(Request $request){
    $post=new Post();
    $validator=Validator::make($request->all(),[
       'title'=>'required|min:5|max:150',
        'excerpt'=>'required|min:5|max:150',
        'content'=>'required'
    ]);
    // kiem tra dl
    if($validator->fails()){
        return Redirect('/blog.create')
                ->withErrors($validator)
                ->withInput();
    }else{
            $post->title=$request->title;
            $post->excerpt=$request->excerpt;
            $post->content=$request->content;
            $post->save();
            return Redirect('/blog.create')
                ->with('message',"Tao bai viet thanh cong");
    }
   
    
   
    
});
Route::get('/blog/single/{id}',function(Request $request,$id){
    $posts=Post::find($id);
    return view('blog.single')->with('post',$posts);
});

Route::get('/blog/edit/{id}',function(Request $request,$id){
    $posts=Post::find($id);
    return view('blog.edit')->with('post',$posts);
});

Route::post('/blog/edit/{id}',function(Request $request,$id){
    $posts=Post::find($id);
    $updated=DB::table("posts")
            ->where('id','=',$id)
            ->update([
                'title'=>$request->input('title'),
                'excerpt'=>$request->input('excerptp'),
                'content'=>$request->input('content')
            ]);
    return Redirect::back()
            ->with('message','Cap nhat thanh cong')
            ->withInput();
});

Route::get('/blog/delete/{id}',function(Request $request,$id){
    $posts=Post::find($id);
    $posts->delete($id);
    return Redirect()->action('/');
    
});

