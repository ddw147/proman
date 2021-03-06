@extends('layouts.layout')

 
@section('content')



   <section class="content-header">
        <h1>
          Create Project
          <small> </small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          
          <li class="active">projects</li>
          <li class="active">create</li>
        </ol>
      </section>




<section class="content">
 

	<div class="row">
		<div class="col-sm-8 col-md-offset-2">
			    <div class="box box-solid box-primary">
                     <div class="box-header with-border">
                        <h3 class="box-title">Add New Project</h3>
                      </div>
                     

                      		{{Form::open(['url'=>'project','class'=>'form-horizontal'])}}
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