@extends('layouts.app')

@section('content')
	<div class="col-md-8">
		<table class="table">
		  <thead class="thead-light">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Student Name</th>
		      <th scope="col">Allocate Company Name</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th scope="row">1</th>
		      <td>Mark</td>
		      <td>Otto</td>
		      <td>
		      	@if(Auth::user()->type == 'IPOH')
		      		<a class="btn btn-primary" href="">View</a>
		      		<a class="btn btn-warning" href="">Edit</a>
		      		<a class="btn btn-danger" href="">Delete</a>
		      	@endif
		      </td>
		    </tr>
		    <tr>
		      <th scope="row">2</th>
		      <td>Jacob</td>
		      <td>Thornton</td>
		      <td>
		      	<a class="btn btn-primary" href="">View</a>
		      	<a class="btn btn-warning" href="">Edit</a>
		      	<a class="btn btn-danger" href="">Delete</a>		      	
		      </td>
		    </tr>
		    <tr>
		      <th scope="row">3</th>
		      <td>Larry</td>
		      <td>the Bird</td>
		      <td>
		      	<a class="btn btn-primary" href="">View</a>
		      	<a class="btn btn-warning" href="">Edit</a>
		      	<a class="btn btn-danger" href="">Delete</a>
		      </td>
		    </tr>
		  </tbody>
		</table>
		@if(Auth::user()->type == 'IPOH')
			<button class="btn btn-primary btn-sm center-block">
			    Confirm Allocation List
			</button>
		@endif
		
	</div>
@endsection