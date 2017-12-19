@extends('layouts.app')

@section('content')
    <div class="col-md-8">
    	<div class="panel panel-default">
    		<div class="panel-body">
    			<form class="form-horizontal" method="POST" action="{{ route('choice_store') }}">
						{{ csrf_field() }}
	    			<div class="row">
	    				<div class="col-md-3">
	    					<label for="session">Session:</label>
	    				</div>
	    				<div class="col-md-9">
	    					<input class="form-control" type="text" name="session" value="{{$student->session}}">
	    				</div>
	    			</div>
	<br/>
	    			<div class="row">
	    				<div class="col-md-3">
	    					<label for="roll">Roll:</label>
	    				</div>
	    				<div class="col-md-9">
	    					<input class="form-control" type="text" name="roll" value="{{$student->roll}}">
	    				</div>
	    			</div>
	<br/>
					<p style="text-align: center;"><b>Company Choice Form</b></p>
	<br/>
					@foreach($companies as $company)
					<div class="row">
							<div class="col-md-4">
								<input type="hidden" name="id[]" value={{$company->id}}>
								<p><b> {{$company->name}}:</b></p>

							</div>
							<div class="col-md-8	">
								<p>
									<div class="form-group">
									  <label for="priority">Priority Value:</label>
									  <select class="form-control" id="priority" name="priority[]">
									    
									    @foreach($companies as $i => $item)
									    	<option value="{{$i+1}}">{{$i+1}}</option>
									    @endforeach
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
    		</div>
    	</div>
    </div>
@endsection


