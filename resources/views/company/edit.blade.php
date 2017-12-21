@extends('layouts.app')

@section('content')
	<div class="col-md-8">
		<form class="form-horizontal" method="POST" action="{{ route('company_update') }}">
			{{ csrf_field() }}
			<div class="form-group">
			      <label class="control-label col-sm-2" for="name">Company Name:</label>
			      <div class="col-sm-10">
			        <input type="text" class="form-control" id="name" placeholder="Company name" name="name" value="{{$company->name}}">
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-2" for="address">Company Address:</label>
			      <div class="col-sm-10">          
			        <input type="text" class="form-control" id="address" placeholder="Company Address" name="address" value="{{$company->address}}">
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-2" for="website">Company Website:</label>
			      <div class="col-sm-10">          
			        <input type="text" class="form-control" id="website" placeholder="Company Website" name="website" value="{{$company->website}}">
			      </div>
			    </div>

			    <div class="form-group">
			      <label class="control-label col-sm-2" for="num">Number of Interns</label>
			      <div class="col-sm-10">          
			        <input type="number" class="form-control" id="num" placeholder="Number of Interns" name="num" value={{$company->number_of_interns}}>
			      </div>
			    </div>
			    <div class="form-group">        
			      <div class="col-md-offset-4 col-md-4">
			        <button type="submit" class="btn btn-default">Submit</button>
			      </div>
			    </div>

		</form>
	</div>
@endsection