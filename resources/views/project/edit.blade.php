@extends('layouts.layout')

 
@section('content')



   <section class="content-header">
        <h1>
          Edit Project
          <small> </small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          
          <li class="active">projects</li>
          <li class="active">edot</li>
        </ol>
      </section>




<section class="content">
 

	<div class="row">
		<div class="col-sm-8 col-md-offset-2">
			    <div class="box box-solid box-primary">
                     <div class="box-header with-border">
                        <h3 class="box-title">{{$project->name}}</h3>
                      </div>
                     

                      		{{Form::model($project , ['route'=>['project.update',$project->id] ,'class'=>'form-horizontal'])}}
                      		 <div class=" box-body">
                      			@include('project.form');
                      		 </div>


                      		  <div class="box-footer">
				                <a href="/project" class="btn btn-default">Cancel</a>
				                <button type="submit" class="btn btn-info pull-right">Save</button>
				              </div>


                            {{Form::close()}}       
                     

               </div>
		</div>	
	</div>		
 	
</section>

@endsection


@section('script')
	

@endsection 