<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artist;
use App\Models\Artwork;
use Faker\Generator as Faker;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i=0; $i < 20; $i++) {

            $new_artist = new Artist();

            $new_artist->artwork_id = Artwork::inRandomOrder()->first()->id;
            $new_artist->name = $faker->firstName();
            $new_artist->lastname = $faker->lastName();
            $new_artist->image = $faker->imageUrl(640, 480, 'artist', true);
            $new_artist->biography = $faker->text();
            $new_artist->birth_date = $faker->date();
            $new_artist->death_date = $faker->date();
            $new_artist->gender = $faker->word();
            $new_artist->type = $faker->randomElement(['Sculptor', 'Painter', 'Paintress']); ;
            $new_artist->slug = Artist::generateSlug($new_artist->name . '-' . $new_artist->lastname);

            $new_artist->save();
        }
    }
}
