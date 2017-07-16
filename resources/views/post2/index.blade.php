@extends('layouts.app')

@section('content')
    <div class="container">
    	<div class="row">
            <a href="{{route('post2.create')}}" class="btn btn-success">Add Post2</a>
    		<table class="table table-border">
    			<thead>
    				<th>id</th>
    				<th>Name</th>
    				<th>Description</th>
                    <th>Content</th>
    				<th>Time</th>
    			</thead>
    			<tbody>
    			    @foreach($post2s as $post2)
    				<tr>
    					<td>{{$post2->id}}</td>
    					<td>{{$post2->name}}</td>
    					<td>{{$post2->description}}</td>
                        <td>{{$post2->content}}</td>
    					<td>{{ $post2->created_at }}</td>
                        <td>
                          <form method="POST" action="{{route('post2.destroy', $post2->id)}}">
                             {{ csrf_field() }}
                             {{ method_field('DELETE') }}
                             <button class="btn btn-danger" type="submit">x</button>
                          </form>
                          <a href="{{route('post2.show', $post2->slug)}}" class="btn btn-info">View</a>  
                        </td>
    				</tr>
    				@endforeach
    			</tbody>
    		</table>
    	</div>
    </div>
@endsection()