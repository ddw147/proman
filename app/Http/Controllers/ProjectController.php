<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;
use App\User;



class ProjectController extends Controller
{
    //


    public function create()
	{

		return view('project.create');
	}

}
