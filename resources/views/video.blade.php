@extends('layouts.app')

@section('content')
   <div class="container">
       @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


   	   <div class="row">
   	   	 <div class="col-md-8 col-md-ofset-3">
   	   	 	<form action="{{ route('video.store') }}" method="POST" enctype="multipart/form-data">
   	   	 		<div class="form-group">
   	   	 			<label for="title">Title</label>
   	   	 			<input type="text" name="title" class="form-control" placeholder="title...">
   	   	 		</div>
   	   	 		<div class="form-group">
   	   	 			<label for="content">Content</label>
   	   	 			<input type="text" name="content" class="form-control" placeholder="content...">
   	   	 		</div>
   	   	 		<div class="form-group">
   	   	 			<label for="video">Video</label>
   	   	 			<input type="file" name="video" class="form-control">
   	   	 		</div>
   	   	 		<div class="form-group">
   	   	 			<button type="submit" class="btn btn-success">Upload</button>
   	   	 			<button type="reset" class="btn btn-info">Reset</button>
   	   	 		</div>

   	   	 		{{ csrf_field() }}
   	   	 	</form>
   	   	 </div>
   	   </div>
   </div>
@endsection()