@extends('layouts.app')

@section('content')
   <div class="container">
   	  <div class="row">
   	  	 <h2>{{$post1->title}}</h2>
   	  	 <h3>{{$post1->content}}</h3>
   	  	 <h3 style="color:red;">{{ Counter::showAndCount('post', $post1->id) }} views   
   	  	 </h3>
   	  </div>
   </div>
@endsection()