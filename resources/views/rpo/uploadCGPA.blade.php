@extends('layouts.app')

@section('content')
	<div class="col-md-8">
		<div class="well">
				<form class="form-horizontal" method="POST" action="{{ route('cgpa_store') }}">
					{{ csrf_field() }}

					@foreach($students as $student)
						<div class="row">
						
							<div class="col-md-3">
								<input type="hidden" name="id[]" value={{$student->id}}>
								<p><b>{{$student->session}}</b></p>
							</div>

							<div class="col-md-3">
								<p><b>{{$student->user->name}}</b></p>
							</div>

							<div class="col-md-3">
								<p><b>{{$student->roll}}</b></p>
							</div>

							<div class="col-md-3">
								<p>
									<div class="form-group">
									  <label for="cgpa">CGPA:</label>
									  <input class="form-control" type="number" step="0.01" min="0" max="4.0" name="cgpa[]" value="{{$student->cgpa}}">
									</div>
								</p>
							</div>
						</div>
					@endforeach

				    <div class="form-group">        
				      <div class="col-sm-offset-5 col-sm-10">
				        <button type="submit" class="btn btn-default">Submit</button>
				      </div>
			    	</div>
				</form>
		</div>
	</div>
@endsection