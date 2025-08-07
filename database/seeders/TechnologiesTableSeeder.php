<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $technologies = [
            "HTML/CSS",
            "Bootstrap",
            "Javascript",
            "Node.js",
            "React",
            "MySQL",
            "PHP",
            "Laravel"
        ];

        foreach ($technologies as $tech) {
            $newTech = new Technology();

            $newTech->name = $tech;
            $newTech->color = $faker->hexColor();

            $newTech->save();
        }
    }
}
