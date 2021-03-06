@extends('base')

@section('main')
             @if(isset($success))
		<div class="alert alert-success" role="alert">{{ $success }}</div>
            @endif
             @if (isset($fail))
                <div class="alert alert-danger" role="alert"> {{ $fail }} </div>
             
             @endif
              <form class="form-control" method="post">
                  <label><h4>Tên bài viết</h4>
                      <input type="text" placeholder="Nhập tên bài viết" name='title'>
                  </label><br>
                  <label><h4>Nội dung tóm tắt</h4>
                      <textarea placeholder="Nhập nội dung tóm tắt" name="excerpt"></textarea>
                  </label><br>
                  <label><h4>Nội dung</h4>
                         <textarea placeholder="Nhập nội dung" name="content"></textarea>
                  </label><br>
                  <label>
                      <center><button type="submit" class="btn btn-info" >Create</button></center>
                  </label>
                   {{csrf_field()}}
              </form>
 @endsection()

 @section('bottom')
  @endsection   