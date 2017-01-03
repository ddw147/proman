<?php

use Illuminate\Database\Seeder;


use App\Project;
use App\User;

 
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

    	DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    	Project::truncate();
    	DB::statement('truncate table project_user;');
    	DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    	$projects = [
    					['name'=>'Proman','description'=>'Promam \n An Asana Ripoff','created_by'=>1,'start_date'=>'30/12/2016','due_date'=>'10/01/2017']

    				];
 

			$user =User::find(1) ;     				
		foreach ($projects as $key => $project)
			{
				$p = Project::create($project);
				$p->members()->attach($user);


		    }    				

    }
}
