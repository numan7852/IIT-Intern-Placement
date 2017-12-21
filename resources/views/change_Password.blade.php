@extends('layouts.blank')

@section('content')
    <div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="jumbotron">
				<h3 class="text-center">Change Password</h3>
				<hr/>
				<form>
				    <div class="form-group">
				        <label>Enter Email id :</label>
				        <input type="text" class="form-control"/>
				    </div>
				     <div class="form-group">
				        <label>Change Password :</label>
				        <input type="password" class="form-control"/>
				    </div>
				     <div class="form-group">
				        <label>COnfirm Password :</label>
				        <input type="password" class="form-control"/>
				    </div>
				    <button class="btn btn-primary btn-sm center-block">
				        Submit
				    </button>
				</form>
			</div>
		</div>
	</div>
@endsection