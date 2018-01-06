 @extends('base')
 
 @section('header')
 @endsection()
 
@section('main')
    @foreach ($post as $posts)
    <div class="post-preview">
            <a href="{{ url('/blog/single/'.$posts->id)}}">
              <h2 class="post-title">
                {{ $posts->title }}
              </h2>
               </a>
              <p class="post-subtitle">
                {{$posts->excerpt}}
              </p>
            
            <p class="post-meta">Posted by
              <a href="#">Tuyen giang</a></p>
    </div> 
    @endforeach
    <hr>
    <!-- Pager -->
    <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
     </div>
@endsection()
@section('bottom')
@endsection()
