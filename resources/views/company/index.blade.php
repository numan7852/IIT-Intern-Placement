@extends('layouts.app')

@section('content')
	<div class="col-md-8">
		<div class="well">
			<table class="table table-responsive">
			  <thead class="thead-light">
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Name</th>
			      <th scope="col">Adress</th>
			      <th scope="col">Website</th>
			      
			    </tr>
			  </thead>
			  <tbody>
			    @foreach($companies as $i=>$company)

			    <tr>
			      <th scope="row">{{$i+1}}</th>
			      <td>{{$company->name}}</td>
			      <td>{{$company->address}}</td>
			      <td>{{$company->website}}</td>
			      
			    </tr>
			    @endforeach
			  </tbody>
			</table>
		</div>
	</div>
@endsection