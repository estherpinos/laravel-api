<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;
use Faker\Generator as Faker;
use App\Functions\Helper;




class TechnologiesTableSeeder extends Seeder
{
     /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
            $new_technology = new Technology();
            $new_technology->title = $faker->randomElement(['PHP', 'JavaScript', 'Vue']);
            $new_technology->slug = Helper::generateSlug($new_technology->name, Technology::class);

            $new_technology->save();
        }

    }
}
