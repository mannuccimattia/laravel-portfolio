<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 10; $i++) {

            $newProject = new Project();

            $newProject->name = $faker->sentence(4);
            $newProject->client = $faker->company();
            $newProject->date = $faker->date("Y-m-d");
            $newProject->description = $faker->paragraph(6);

            $newProject->save();
        }
    }
}
