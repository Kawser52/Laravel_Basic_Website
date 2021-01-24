@extends('layouts/app')
@section('content')
<h1>Form Section</h1>
{{ Form::open(array('url' => 'contact/submit')) }}
<div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Abdul">
  </div>
  <div class="form-group">
      <label for="exampleFormControlInput1">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="form-group">
      <label for="comment">Comment:</label>
      <textarea class="form-control" rows="5" id="comment" name="textmessage"></textarea>
    </div>
  <div class="form-group">
     <button class="btn btn-primary" name="submit">Submit</button>
    </div>
{{ Form::close() }}
@endsection