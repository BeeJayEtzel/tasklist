<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder {
    
    public function run()
    {
        factory('App\Task', 50)->create();
    }

}