<ul>
@foreach ($errors->all() as $message) 
  	<li>{{$message}}</li>
@endforeach
</ul>


<div class="form-group">
								     
	    {{Form::label('name', 'Project Name',['class'=>'col-sm-2 control-label']) }}
	    
	    <div class="col-sm-10">
	       
	      {{Form::text('name', null , ['class'=>'form-control','placeholder'=>'Project Name','required' ])}}
	    </div>
	  
	  </div>

	  <div class="form-group">
	     
	    {{Form::label('description', 'Project Description',['class'=>'col-sm-2 control-label']) }}
	    
	    <div class="col-sm-10">
	       
	      {{Form::textarea('description', null , ['class'=>'form-control' ,'placeholder'=>'Project Description'])}}
	    </div>
	  
	  </div>

	  <div class="form-group">
	   	{{Form::label('start_date', '  Start Date',['class'=>'col-sm-2 control-label']) }}
	    <div class="col-sm-10">
	    	{{Form::text('start_date', null , ['class'=>'form-control' ,'placeholder'=>'Project Start Date','required'])}}
	    </div>
	  </div>

	  <div class="form-group">
	   	{{Form::label('due_date', 'Due Date',['class'=>'col-sm-2 control-label']) }}
	    <div class="col-sm-10">
	    	{{Form::text('due_date', null , ['class'=>'form-control' ,'placeholder'=>'Project Due Date','required'])}}
	    </div>
	  </div>