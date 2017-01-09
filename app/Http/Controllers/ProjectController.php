<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;
use App\User;
use Auth;
use App\Http\Requests\ProjectRequest;
use DB;
use Carbon\Carbon;
class ProjectController extends Controller
{

    public function create()
	{
		return view('project.create');
	}

	public function store(ProjectRequest $request)
	{
		$project =new Project();

		$project->fill($request->all());

		Auth::user()->ownedprojects()->save($project);

		$project->members()->attach(Auth::user()->id);
	 
		return redirect('/project')->with('status','Project Successfully Added');
	}

	public function index()
    {
    	$projects = Auth::user()->projects()->paginate(9);
         return view('home',compact('projects'));
    }


    public function edit($projectid)
    {
    	$project = Project::findOrFail($projectid);
    	return view('project.edit',compact('project')); 
    }

    public function update(Requests $request)
    {
    	
    }

    public function show($projectid)
    {
    	$project= Project::findOrFail($projectid);

    	return $project;
    }

}
