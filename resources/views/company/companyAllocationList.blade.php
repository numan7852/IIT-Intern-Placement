@extends('layouts.app')

@section('content')
	<div class="col-md-8">
		<div class="well">
			<table class="table">
			  <thead class="thead-light">
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Student Name</th>
			      <th scope="col">Student Roll</th>
			      <th scope="col">Student Email</th>
			      <th scope="col">Allocate Company Name</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($allocations as $i => $allocation)
				    <tr>
				      <th scope="row">{{$i+1}}</th>
				      <td>{{$allocation->student->user->name}}</td>
				      <td>{{$allocation->student->roll}}</td>
				      <td>{{$allocation->student->user->email}}</td>
				      <td>{{$allocation->company->name}}</td>
				    </tr>
			    @endforeach
			  </tbody>
			</table>
		</div>
		
	</div>
@endsection