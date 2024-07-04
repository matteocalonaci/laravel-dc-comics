<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
       for($i=0; $i<9;$i++){
        $newComic = new Comic();

        $newComic->title = $faker->name();
        $newComic->description = $faker->paragraph();
        $newComic->thumb = $faker->numberBetween(1, 700);
        $newComic->price = $faker->name();
        $newComic->series = $faker->sentence(3);
        $newComic->sale_date = $faker->date();
        $newComic->type = $faker->sentence(3);
        $newComic->artists = $faker->name();
        $newComic->writers = $faker->name();

        $newComic->save();
       }
    }
}
