@extends('main')
@section('content')
@section('title','|View post')
<h1>  {{ $post->title    }} </h1>
<h1> this is a post  </h1> 
<p> {{ $post->body  	}} </p>
 
<img src=" {{ $post->image  	}}" alt="" class="img-fluid image">
<a href="" class="btn btn-primary">Go to all posts</a>

@endsection 