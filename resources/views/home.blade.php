@extends('layouts.layout')


 @section('meta')

  <title> Projects </title>

 @endsection  

@section('content')



   <section class="content-header">
        <h1>
          Projects
          <small>Example 2.0</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          
          <li class="active">projects</li>
        </ol>
      </section>




<section class="content">
 @if (session('status'))
    <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i>  {{ session('status') }} </h4>
    </div>
@endif 


<div class="row">
      <div class="col-md-4 col-md-offset-8 ">
          <a href="project/create" class="btn btn-primary pull-right">Create New Project </a>
      </div>  
</div>

 




    <div class="row">
             
          
        @foreach ($projects as $project)
         <div class="col-md-4">
               <div class="box box-solid box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{$project->name}}</h3>
                      </div>
                      <div class=" box-body " style="height: 100px">
                            <span class="text">  
                                {{$project->description}}
                            </span>        
                      </div>

               </div>
        </div>
        @endforeach
          
            {{$projects->links()}}
    </div>
 

</section>
@endsection
