@extends('layouts.app')

@section('content')
	<div class="col-md-8">
		<div class="well">
				<form class="form-horizontal" method="POST" action="{{ route('company_store') }}">
					{{ csrf_field() }}

					@foreach($skills as $skill)
						<div class="row">
							<div class="col-md-3">
								<input type="hidden" name="id[]" value={{$skill->id}}>
								<p><b>{{$skill->name}}:</b></p>
							</div>
							<div class="col-md-9">
								<p>
									<div class="form-group">
									  <label for="skill_score">Skill Score:</label>
									  <select class="form-control" id="sell" name="skill_score[]">
									    <option value="0">0</option>
									    <option value="1">1</option>
									    <option value="2">2</option>
									    <option value="3">3</option>
									    <option value="4">4</option>
									    <option value="5">5</option>
									  </select>
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