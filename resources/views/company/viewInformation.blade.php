@extends('layouts.app')

@section('content')
	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
					<div class="col-md-3">
						<p><b>Name:</b></p>
					</div>
					<div class="col-md-9">
						<p>{{$company->name}}</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">
						<p><b>Address:</b></p>
					</div>
					<div class="col-md-9">
						<p>{{$company->address}}</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">
						<p><b>Website:</b></p>
					</div>
					<div class="col-md-9">
						<a target="new" href="https://{{$company->website}}">{{$company->website}}</a>
					</div>
				</div>
				<div class="col-md-offset-4 col-md-4">
					<a href="{{route('editCompanyInformation')}}" class="btn btn-default">Edit Information</a>
				</div>
			</div>

			
			
		</div>
	</div>
@endsection