@extends('layouts.app')

@section('content')
	<div class="col-md-8">
		<div class="well">
			<table class="table">
			  <thead class="thead-light">
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Company Name</th>
			      <th scope="col">Rating</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($ratings as $i => $rating)
			    <tr>
			      <th scope="row">{{$i+1}}</th>
			      <td>{{$rating->company->name}}</td>
			      <td>5</td>
			    </tr>
			    @endforeach
			  </tbody>
			</table>
		</div>
	</div>
@endsection