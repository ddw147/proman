<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use App\Project;
class ProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

    	$project = Project::find($this->project);
		$projectid = is_null($project)?0:$project->id;		 
    	  
        return [
            'name'=>'required|unique:projects,name,'.$projectid,
            'start_date'=>'date_format:d/m/Y|after:yesterday' ,
             'due_date'=>'date_format:d/m/Y|after:start_date' 
        ];

    }
}
