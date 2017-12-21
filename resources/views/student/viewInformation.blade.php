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
						<p>{{$student->user->name}}</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">
						<p><b>Email:</b></p>
					</div>
					<div class="col-md-9">
						<p>{{$student->user->email}}</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">
						<p><b>Session:</b></p>
					</div>
					<div class="col-md-9">
						<p>{{$student->session}}</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">
						<p><b>Roll:</b></p>
					</div>
					<div class="col-md-9">
						<p>{{$student->roll}}</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">
						<p><b>CGPA:</b></p>
					</div>
					<div class="col-md-9">
						<p>{{$student->cgpa}}</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">
						<p><b>SkillSet:</b></p>
					</div>
					<div class="col-md-9">
						<p>
							@foreach($skillSets as $skillSet)
							<p>
								<span>{{$skillSet->skill->name}} - </span>
								<span>{{$skillSet->score}}</span>
							</p> 
							@endforeach
						</p>
					</div>
				</div>

			</div>
		</div>
	</div>
@endsection