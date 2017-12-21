@extends('layouts.app')

@section('content')
	<div class="col-md-8">
		<div class="well">
			<form  method="GET" action=" {{ route('RatingStore') }} ">
				<legend>Company Rating Form</legend>
				
				<table class="table table-hover table-responsive">
					<tbody>
						<tr>
							<td>
								<div class="col-md-10">
									1. Speed of service?
								</div>
								<div class="col-md-2">
									<select class="form-control" name="rating[]">
									  <option>1</option>
									  <option>2</option>
									  <option>3</option>
									  <option>4</option>
									  <option>5</option>
									</select>
								</div>	
							</td>
						</tr>
						<tr>
							<td>
								<div class="col-md-10">
									2. Friendliness of staffs?
								</div>
								<div class="col-md-2">
									<select class="form-control" name="rating[]">
									  <option>1</option>
									  <option>2</option>
									  <option>3</option>
									  <option>4</option>
									  <option>5</option>
									</select>
								</div>	
							</td>
						</tr>
						<tr>
							<td>
								<div class="col-md-10">
									3. Helfpfulness of staffs?
								</div>
								<div class="col-md-2">
									<select class="form-control" name="rating[]">
									  <option>1</option>
									  <option>2</option>
									  <option>3</option>
									  <option>4</option>
									  <option>5</option>
									</select>
								</div>	
							</td>
						</tr>
						<tr>
							<td>
								<div class="col-md-10">
									4. Environment of office?
								</div>
								<div class="col-md-2">
									<select class="form-control" name="rating[]">
									  <option>1</option>
									  <option>2</option>
									  <option>3</option>
									  <option>4</option>
									  <option>5</option>
									</select>
								</div>	
							</td>
						</tr>
						<tr>
							<td>
								<div class="col-md-10">
									5. Training system of office?
								</div>
								<div class="col-md-2">
									<select class="form-control" name="rating[]">
									  <option>1</option>
									  <option>2</option>
									  <option>3</option>
									  <option>4</option>
									  <option>5</option>
									</select>
								</div>	
							</td>
						</tr>
						<tr>
							<td>
								<div class="col-md-10">
									6. Choice of products?
								</div>
								<div class="col-md-2">
									<select class="form-control" name="rating[]">
									  <option>1</option>
									  <option>2</option>
									  <option>3</option>
									  <option>4</option>
									  <option>5</option>
									</select>
								</div>	
							</td>
						</tr>
					</tbody>
				</table>
			
				<div class="form-group" align="center">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
	</div>
@endsection