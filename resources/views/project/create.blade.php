@extends('layouts.app')


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

                      			<div class="form-group">
								     
								    {{Form::label('name', 'Project Name',['class'=>'col-sm-2 control-label']) }}
								    
								    <div class="col-sm-10">
								       
								      {{Form::text('name', null , ['class'=>'form-control' ],'Name ')}}
								    </div>
								  
								  </div>

                            {{Form::close()}}       
                      </div>

               </div>
		</div>	
	</div>		
</div>	


@endsection