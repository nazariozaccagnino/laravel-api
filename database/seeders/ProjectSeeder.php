<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0; $i < 5 ; $i++){
            $newProject = new Project();
            $newProject->title = 'Titolo'. $i;
            $newProject->content = 'Corpo del testo';
            $newProject->slug = Project::generateSlug($newProject->title);
            $newProject->save();

        }
    }
}
