@extends('layouts.app')

@section('content')
   <div class="container">
      @if(Session::has('success'))
         <div class="alert alert-danger">
          {{ Session::get('success') }}
         </div>
       @endif
      <div class="row">
          <div class="col-md-8 col-md-offset-3">
              video day
          </div>
      </div>
       <div class="row">
           @foreach($post1 as $p1)
              <a href="{{ route('post.show', $p1->id) }}">{{$p1->title}}</a>
              <h2>{{$p1->content}}</h2><br/>
              
            <h2 style="color:red;">{{ Counter::show('post', $p1->id) }} views</h2>
                  
           @endforeach
       </div>
       <hr>
   </div>
@endsection()