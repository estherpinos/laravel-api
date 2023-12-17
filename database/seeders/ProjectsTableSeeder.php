<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Type;
use App\Functions\Helper;


use Faker\Generator as Faker;



class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
            $new_project = new Project();

            $new_project->title = $faker->sentence(3);
            $new_project->slug = Helper::generateSlug($new_project->title, Project::class);
            $new_project->description = $faker->text(50);
            $new_project->type_id = Type::inRandomOrder()->first()->id;
            $new_project->save();
        }

    }
}
