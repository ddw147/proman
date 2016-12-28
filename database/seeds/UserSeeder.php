<?php

use Illuminate\Database\Seeder;

Use App\User;
class UserSeeder extends Seeder
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
    	User::truncate();
    	DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    	$users = [
    				['name'=>'Dhiraj Wakchaure','email'=>'ddw147@proman.com','password'=>'demo','mobile'=>'8275466726']
	   			 ];

		foreach ($users as $key => $user) 
		{
			User::create($user);
		}	   			 


    }
}
