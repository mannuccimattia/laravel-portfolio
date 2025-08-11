<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class ProjectTechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projectIds = Project::pluck('id')->toArray();
        $techIds = Technology::pluck('id')->toArray();

        foreach ($projectIds as $projectId) {
            $randomTechs = Arr::random($techIds, random_int(1, 3));

            Project::find($projectId)->technologies()->attach($randomTechs);
        }
    }
}
