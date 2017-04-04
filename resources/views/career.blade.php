@extends('layouts.app')

@section('content')

	<div class="container">

			@if (session('message'))

			<div class="alert alert-{{session('status')}}">				
				{{session('message')}}
			</div>

			@endif
		
		<div class="row">
			
			<div class="col-md-12 col-career">
				<a href="{{URL('/career/add')}}" class="btn new-career"><b>+ Add Job</b></a><br/><br/><br/>
			<table class="table table-hover">
  				
  				<thead>
  					<td>#</td>
  					<td>Job Name</td>
  					<td>Description</td>
  					<td>Responsibilites</td>
  					<td>Tool</td>
  					<td>Requirements</td>
  					<td>Action</td>
  				</thead>

  				@foreach($career as $key => $careers)

  					<tr>
	  					<td>{{$key+1}}</td>
	  					<td>{{$careers->name}}</td>
	  					<td><pre>{{$careers->description}}</pre></td>
	  					<td><pre>{{$careers->responsibility}}</pre></td>
	  					<td><pre>{{$careers->tool}}</pre></td>
	  					<td><pre>{{$careers->requirement}}</pre></td>
	  					<td><a href="{{URL('/career/edit/' . $careers->id)}}">Edit</a> - <a href="{{URL('/career/delete/' . $careers->id)}}">Delete</a></td>
	  				</tr>

  				@endforeach

			</table>
			<center>{{ $career->links() }}</center>
		</div>
    
	</div>

@endsection
