@extends('main')
@section('content')
@section('title','|View post')
<h1>  {{ $post->title    }} </h1>
 	
<p> {{ $post->body  }} </p>
@endsection 