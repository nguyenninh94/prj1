@extends('layouts.app')

@section('content')
   <div class="container">
   	  <div class="row">
   	  	 <div class="col-md-8 col-md-offset-3">
   	  	 	<form action="" method="POST">
   	  	 		{{csrf_field()}}
   	  	 		<div class="form-group">
   	  	 			<span for="name">Name</span>
   	  	 			<input type="text" name="name" class="form-control" placeholder="name...">
   	  	 		</div>
   	  	 		<div class="form-group">
   	  	 			<span for="description">Description</span>
   	  	 			<input type="text" name="description" class="form-control" placeholder="description...">
   	  	 		</div>
   	  	 		<div class="form-group">
   	  	 			<span for="content">Content</span>
   	  	 			<textarea name="content" id="mycontent" cols="120" rows="10" placeholder="content..."></textarea>
   	  	 			<script src="{{asset('ckeditor/ckeditor/ckeditor.js')}}"></script> 
   	  	 			<script>
   	  	 				var options = {
   	  	 					filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
   	  	 					filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
   	  	 					filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
   	  	 					filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
   	  	 				};
                    </script>
                    <script>
                        CKEDITOR.replace('myeditor', options);
                    </script>
   	  	 			 
   	  	 		</div>
   	  	 		<div class="form-group">
   	  	 			<button class="btn btn-default" type="reset">Reset</button>
   	  	 			<button class="btn btn-primary" type="submit">Add</button>
   	  	 		</div>
   	  	 	</form>
   	  	 </div>
   	  </div>
   </div>
@endsection