<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder {
    
    public function run()
    {
        factory('App\Project', 10)->create();
    }

}