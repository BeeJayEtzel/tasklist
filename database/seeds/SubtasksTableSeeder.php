<?php

use Illuminate\Database\Seeder;

class SubtasksTableSeeder extends Seeder {
    
    public function run()
    {
        factory('App\Subtask', 100)->create();
    }

}