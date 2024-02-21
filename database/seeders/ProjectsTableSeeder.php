<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Project::create([
            'title' => 'Progetto 1',
            'description' => 'Descrizione Progetto 1'
        ]);
        Project::create([
            'title' => 'Progetto 2',
            'description' => 'Descrizione Progetto 2'
        ]);
        Project::create([
            'title' => 'Progetto 3',
            'description' => 'Descrizione Progetto 3'
        ]);
        Project::create([
            'title' => 'Progetto 4',
            'description' => 'Descrizione Progetto 4'
        ]);
        Project::create([
            'title' => 'Progetto 5',
            'description' => 'Descrizione Progetto 5'
        ]);
    }
}
