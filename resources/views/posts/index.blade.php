@extends('main')
 @section('title','|All Posts')
	{{-- expr --}}
 @section('content')
<div class="row ">
	<div class="col-md-10"> 
	<h1>All posts</h1>
	</div>
	<div  class="col-md-2" >
		<a style="margin:3px" href="{{  route('posts.create') }}" class="btn btn-lg btn-block btn-primary"> Post now !   </a>
	</div>

           	  
  <div class="card-group">
  <div class="row">	<div class="col-12">
  <div class="card">
	
    <img class="card-img-top" src="https://scontent-mad1-1.xx.fbcdn.net/v/t1.15752-9/47575634_2091089347593454_4791426487049781248_n.jpg?_nc_cat=109&_nc_ht=scontent-mad1-1.xx&oh=a52ef6eb55010647f3c8870853895971&oe=5CA49711" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">  Avec les amis </h5>
      <p class="card-text">Lorem ipsum dolor. ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, quisquam.This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <a href="pages.post1.html" class="btn btn-primary">Go to the post</a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://scontent-mad1-1.xx.fbcdn.net/v/t1.15752-9/47578255_260275987998782_6366745161791176704_n.jpg?_nc_cat=109&_nc_ht=scontent-mad1-1.xx&oh=0bcb9b4dc258c020a2cf2b037dd969d9&oe=5CA47652" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Au Quartier</h5>
      <p class="card-text">Lorem ipsum dolor sit  ad stias facilis, aperiam vero culpa, perspiciatis minus ipsam animi quidem    ? Archit emque dignissimos fugiat voluptates modi, ipsa quia. ipsum dolor sit amet, consectetur adipisicing elit. Inventore fugiat ea vero? Dolorem ipsa natus, culpa a voluptatem repudiandae quam.t.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
       <a href="" class="btn btn-primary">Go to the post</a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://scontent-mad1-1.xx.fbcdn.net/v/t1.15752-9/48270822_323251904932800_3176042562074968064_n.jpg?_nc_cat=108&_nc_ht=scontent-mad1-1.xx&oh=f69e2aa30d46df7fc884a9320d77714e&oe=5CA48B0D" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Cleaning the beach </h5>
      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, inventore.is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <a href="" class="btn btn-primary">Go to the post</a>
    </div>
    
  </div>
</div>
</div>
</div>
@endsection  