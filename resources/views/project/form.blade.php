<div class="form-group">
								     
	    {{Form::label('name', 'Project Name',['class'=>'col-sm-2 control-label']) }}
	    
	    <div class="col-sm-10">
	       
	      {{Form::text('name', null , ['class'=>'form-control' ],'Name ')}}
	    </div>
	  
	  </div>

	  <div class="form-group">
	     
	    {{Form::label('description', 'Project Description',['class'=>'col-sm-2 control-label']) }}
	    
	    <div class="col-sm-10">
	       
	      {{Form::textarea('description', null , ['class'=>'form-control' ],'Name ')}}
	    </div>
	  
	  </div>

	  <div class="form-group">
	     
	    {{Form::label('start_date', '  Start Date',['class'=>'col-sm-2 control-label']) }}
	    
	    <div class="col-sm-10">
	       
	      {{Form::text('start_date', null , ['class'=>'form-control' ],'Name ')}}
	    </div>
								  
</div>