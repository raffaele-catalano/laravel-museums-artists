<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Museum;
use Faker\Generator as Faker;

class MuseumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $museums_name = ['Louvre', 'Metropolitan Museum of Art', 'Museo archeologico di Atene', 'Museum of Modern Art di New York', 'Museo Oceanografico di Monaco', 'National Museum of Natural History', 'Museum of Modern Art', 'Museo del Volo di Volandia', 'National Dinosaur Museum', 'National Museum of Iran'];

        for ($i=0; $i < 10; $i++) {
            $new_museum = new Museum();
            $new_museum->name = $faker->randomElement($museums_name);
            $new_museum->slug = Museum::generateSlug($new_museum->name);
            $new_museum->nation = $faker->state();
            $new_museum->city = $faker->city();
            $new_museum->address = $faker->streetAddress();
            $new_museum->web_site = $faker->url();
            $new_museum->photo = $faker->imageUrl(640, 480, 'museum', true);
            $new_museum->description = $faker->text();
            $new_museum->latitude = $faker->randomFloat(8, 20, 30);
            $new_museum->longitude = $faker->randomFloat(8, 20, 30);
            $new_museum->save();
        }
    }
}
