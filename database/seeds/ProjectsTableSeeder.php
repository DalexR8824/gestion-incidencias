<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
        		'name' => 'Proyecto A',
        		'description' => 'el proyecto A consiste en desarrollar un sitio Web moderno'
        	]);
        Project::create([
        		'name' => 'Proyecto B',
        		'description' => 'el proyecto B consiste en desarrollar una aplicación Android'
        	]);
    }
}
