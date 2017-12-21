@extends('layouts.app')

@section('content')
	<div class="col-md-8">
		<div class="well">
			<table class="table">
			  <thead class="thead-light">
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Name</th>
			      <th scope="col">Email</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>

			  	@foreach($students as $i=>$student)

			    <tr>
			      <th scope="row">{{$i+1}}</th>
			      <td>{{$student->user->name}}</td>
			      <td>{{$student->user->email}}</td>
			      <td>
			      	<a class="btn btn-primary" href="{{route('studentInformation', $student->id)}}">View</a>
			      	@if(Auth::user()->type == "RPO")
			      		<a class="btn btn-warning" href="">Edit</a>
			      		<a class="btn btn-danger" href="">Delete</a>
			      	@endif
			      </td>
			    </tr>
			    @endforeach
			  </tbody>
			</table>
		</div>
	</div>
@endsection