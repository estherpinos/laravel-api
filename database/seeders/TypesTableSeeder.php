<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use Faker\Generator as Faker;
use App\Functions\Helper;




class TypesTableSeeder extends Seeder
{
      /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
            $new_type = new Type();
            $new_type ->title =$faker->randomElement(['front-end', 'back-end']);
            $new_type->slug = Helper::generateSlug($new_type->name, Type::class);

            $new_type ->save();
        }

    }
}
