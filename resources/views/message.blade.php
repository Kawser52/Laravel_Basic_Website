@extends('layouts/app')

@section('content')
<div class="row">
 <div class="col-md-6">
  <h2>Home Section</h2>
  @if(count($message)>0)
     @foreach($message as $messages)
     <ul class="list-group">
                   <li class="list-group-item">Name:{{$messages->name}}</li>
                   <li class="list-group-item">Name:{{$messages->email}}</li>
                   <li class="list-group-item">Name:{{$messages->messages}}</li>

                 </ul>
                @endforeach
  @endif

 </div>
</div>
@endsection