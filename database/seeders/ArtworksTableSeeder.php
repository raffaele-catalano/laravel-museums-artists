<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artwork;
use Faker\Generator as Faker;

class ArtworksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) {
            $new_artwork = new Artwork();
            $new_artwork->name = $faker->sentence();
            $new_artwork->date = $faker->date();
            $new_artwork->save();
        }
    }
}
