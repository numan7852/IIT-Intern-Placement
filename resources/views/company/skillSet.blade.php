@extends('layouts.app')

@section('content')
	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-body">
				<form class="form" method="POST" action="{{ route('rpoSkillSet_Store') }}">
					{{ csrf_field() }}


					<div id = "dynamic_distribution">
						<div class="row">
							
							<div class="col-sm-9">
								<div class="form-group">
									<input type="text" id="skills" name="skills[]" maxlength="50" placeholder="Skill" class="form-control" required>
									<label for="skills"></label>

								</div>
							</div>

							<div class="col-sm-2">
								<div class="form-group">
									<p class="btn btn-success" id="add_skills"><i class="fa fa-plus" aria-hidden="true"></i></p>

								</div>
							</div>
						</div>
					</div>

					<div class="form-group">        
					      <div class="col-sm-offset-2 col-sm-10">
					        <button type="submit" class="btn btn-default">Submit</button>
					      </div>
					</div>
				</form>	
			</div>
		</div>
	</div>
@endsection


@section('script')
	<script>
		var i = 0;
        $('#add_skills').click(function(){
            i++;
            var new_skills = '<div class="row" id="row'+i+'">' +

                '<div class="col-sm-9"><div class="form-group">' +

                '<input type="text" id="skills" placeholder="Skill" maxlength="50" name="skills[]" ' +

                'class="form-control"><label for="skills">' +

                '</label></div></div>' +

				'<div class="col-sm-2">' +

                '<div class="form-group"><p class="btn btn-danger waves-effect waves-light btn-remove" id="'+i+'">' +

                '<i class="fa fa-minus" aria-hidden="true"></i></p></div></div></div>';

            $('#dynamic_distribution').append(new_skills);

        });

        $(document).on('click','.btn-remove', function(){

            var button_id = $(this).attr("id");

            $('#row'+button_id).remove();

        });

	</script>
@endsection