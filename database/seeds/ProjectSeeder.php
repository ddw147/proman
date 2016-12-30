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
    					['name'=>'Proman','description'=>'Promam \n An Asana Ripoff','created_by'=>1,'start_date'=>'2016-30-12','due_date'=>'2017-01-10']

    				];

    	$faker =  Faker\Factory::create();
    	for ($i=1; $i <= 20 ; $i++) 
    	{ 
    		$projects[]= ['name'=>$faker->name,'description'=>$faker->text,'created_by'=>1,'start_date'=>$faker->date,'due_date'=>$faker->date];
	
    	}
    	

			$user =User::find(1) ;     				
		foreach ($projects as $key => $project)
			{
				$p = Project::create($project);
				$p->members()->attach($user);


		    }    				

    }
}
