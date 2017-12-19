@extends('layouts.app')

@section('content')
	<div class="col-md-8">
		<table class="table">
		  <thead class="thead-light">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Name</th>
		      <th scope="col">Adress</th>
		      <th scope="col">Website</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		    @foreach($companies as $i=>$company)

		    <tr>
		      <th scope="row">{{$i+1}}</th>
		      <td>{{$company->name}}</td>
		      <td>{{$company->address}}</td>
		      <td>{{$company->website}}</td>
		      <td>
		      	<a class="btn btn-primary" href="{{route('companyInformation')}}">View</a>
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
@endsection