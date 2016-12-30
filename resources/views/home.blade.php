@extends('layouts.app')

@section('content')
<div class="container">



<div class="row">
      <div class="col-md-4 col-md-offset-8 ">
          <a href="project/create" class="btn btn-primary pull-right">Create New Project </a>
      </div>  
</div>

<div class="clearfix">..</div>

    <div class="row">
               
             
        @foreach ($projects as $project)
         <div class="col-md-4">
               <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{$project->name}}</h3>
                      </div>
                      <div class=" panel-body " style="height: 100px">
                            <span class="text">  
                                {{$project->description}}
                            </span>        
                      </div>

               </div>
        </div>
        @endforeach
          
            {{$projects->links()}}
    </div>
</div>
@endsection
