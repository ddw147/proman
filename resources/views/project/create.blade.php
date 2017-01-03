@extends('layouts.app')

@section('meta')
	
	<link rel="stylesheet" type="text/css" href="/css/bootstrap-datepicker.standalone.min.css">

@endsection

@section('content')

<div class="container">

	<div class="row">
		<div class="col-sm-8 col-md-offset-2">
			<div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Add New Project</h3>
                      </div>
                      <div class=" panel-body">

                      		{{Form::open(['url'=>'project','class'=>'form-horizontal'])}}

                      			@include('project.form');

                            {{Form::close()}}       
                      </div>

               </div>
		</div>	
	</div>		
</div>	


@endsection


@section('script')
	
	<script type="text/javascript" src="/js/bootstrap-datepicker.min.js"></script>	
	<script type="text/javascript">
		$("#start_date").datepicker({
										autoclose:true,
										format:'dd/mm/yyyy'
									});
	</script>
@endsection 