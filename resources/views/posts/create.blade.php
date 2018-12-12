@extends('main')
@section('content')
@section('title','| Creat New P ost '    )

<div class="row">
	<div class="col-md-8  col-md-offset-2">
		
		<h1>create a new post </h1>
		<hr>
		{!! Form::open(['route' => 'posts.store','files'=>'true' ]) !!}

                                {{form::label('title','Title:')}}
                                {{form::text('title',null , array('class'=>'form-control'))   }}


                                 

                                {{form::label('body',"post here :" )     }}
                             
                                {{form::textarea('body',null,array('class'=>'form-control'))}}
                                
                                {{ Form::file('image',array('class'=>'form-control'))     }}  
                                {{form::submit('creat a post ',array('class'=>'btn btn-success btn-lg btn-block'  ))  }}
                            
                                {!! Form::close() !!}
       <form  >         </form>
	</div>
</div>
@endsection 