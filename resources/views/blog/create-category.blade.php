@extends('base')
@extends('base')

@section('main')
             @if(isset($success))
		<div class="alert alert-success" role="alert">{{ $success }}</div>
            @endif
             @if (isset($fail))
                <div class="alert alert-danger" role="alert"> {{ $fail }} </div>
             
             @endif
              <form class="form-control" method="post">
                  <label><h4>Tên </h4>
                      <input type="text" placeholder="Nhập tên chuyên mục" name='title'>
                  </label><br>
                  <label><h4>Nội dung</h4>
                         <textarea placeholder="Nhập nội dung chuyên mục" name="content"></textarea>
                  </label><br>
                  <label>
                      <center><button type="submit" class="btn btn-warning" >Create Category</button></center>
                  </label>
                   {{csrf_field()}}
              </form>
 @endsection()

 @section('bottom')
  @endsection   

