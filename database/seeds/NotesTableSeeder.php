<?php

use Illuminate\Database\Seeder;

class NotesTableSeeder extends Seeder {
    
    public function run()
    {
        factory('App\Note', 100)->create();
    }

}