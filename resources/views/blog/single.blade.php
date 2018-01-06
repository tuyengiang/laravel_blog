@extends('base')

@section('header')
@endsection()

@section('main')
    @if(!empty($message))
        {{ $message }}
    
    @endif
    <div class="post-preview">
              <h2 class="post-title">
                {{ $post->title }}
              </h2>
              <h3 class="post-subtitle">
                {{ $post->excerpt }}
              </h3>
        
        <p> {{ $post->content }}</p>
        
        
        <hr>
        <form method="post">
                <a href='{{ url('/blog/edit/'. $post->id)}}' class="btn btn-danger">Edit</a>
           

        </form>
    </div>
@endsection()

@section('bottom')
@endsection()