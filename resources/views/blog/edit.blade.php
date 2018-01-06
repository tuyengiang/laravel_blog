@extends('base')

@section('header')
@endsection()

@section('main')
    <form class="form-control" method="post">
                  <label><h4>Tên bài viết</h4>
                      <input type="text" placeholder="Nhập tên bài viết" name='title' value='{{ $post->title }}'>
                  </label><br>
                  <label><h4>Nội dung tóm tắt</h4>
                      <textarea placeholder="Nhập nội dung tóm tắt" name="excerpt">{{ $post->excerpt }}</textarea>
                  </label><br>
                  <label><h4>Nội dung</h4>
                         <textarea placeholder="Nhập nội dung" name="content">{{ $post->content }}</textarea>
                  </label><br>
                  <label>
                      <center><button type="submit" class="btn btn-success" > Cap nhat </button></center>
                  </label>
                   {{csrf_field()}}
     </form>
@endsection()

@section('bottom')
@endsection()