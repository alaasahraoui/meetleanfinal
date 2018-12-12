@extends('main')
@section('content')
<form>

<div class="row">
<div class="col-md-12">
<h1>Get in touch</h1>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
 
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form>
<button type="submit" value="send a msg " class="btn btn-success">Send ! </button>	
</div>
        </div> 
</div>
    @endsection 
