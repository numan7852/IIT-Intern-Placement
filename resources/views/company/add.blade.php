@extends('layouts.app')

@section('content')
	<div class="col-md-8">
		<form class="form-horizontal" method="POST" action="{{ route('company_store') }}">
			{{ csrf_field() }}
			<div class="form-group">
			      <label class="control-label col-sm-2" for="name">Company Name:</label>
			      <div class="col-sm-10">
			        <input type="text" class="form-control" id="name" placeholder="Company name" name="name">
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-2" for="address">Company Address:</label>
			      <div class="col-sm-10">          
			        <input type="text" class="form-control" id="address" placeholder="Company Address" name="address">
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-2" for="website">Company Website</label>
			      <div class="col-sm-10">          
			        <input type="text" class="form-control" id="website" placeholder="Company Website" name="website">
			      </div>
			    </div>
			    <div class="form-group">        
			      <div class="col-sm-offset-2 col-sm-10">
			        <button type="submit" class="btn btn-default">Submit</button>
			      </div>
			    </div>
		</form>
	</div>
@endsection