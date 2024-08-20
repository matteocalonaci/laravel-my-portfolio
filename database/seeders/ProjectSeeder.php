<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $newProject = new Project();
            $newProject->name = $faker->name();
            $newProject->image= "https://picsum.photos/id/" . rand(1, 500) . "/800/200";
            $newProject->description = $faker->text(100);
            $newProject->github_url = $faker-> text(20);
            $newProject->technology_id = $faker->numberBetween(1,4);

            $newProject->save();
            $newProject->languages()->attach($faker->numberBetween(1,4)) ;


    }
    }
}
