@extends('layouts.app')

@section('content')
   <div class="container">
   	  <div class="row">
   	  	 @foreach($post2 as $p2)
            <h1>Name: {{$p2->name}}</h1>
   	  	    <h1>Slug: {{$p2->slug}}</h1>
   	  	    <h1>Description: {{$p2->description}}</h1>
   	  	    <h1>Content: {{$p2->content}}</h1>
   	  	 @endforeach
   	  </div>
        <a href="{{route('post2.index')}}" class="btn btn-info">Back Home</a>
   </div>
@endsection()