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
    public function run(): void
    {

        $data = config("data");

       foreach($data as $comic){
        $newComic = new Comic();

        $newComic->title = $comic['title'];
        $newComic->description = $comic['description'];
        $newComic->thumb = $comic['thumb'];
        $newComic->price = $comic['price'];
        $newComic->series = $comic['series'];
        $newComic->sale_date = $comic['sale_date'];
        $newComic->type = $comic['type'];
        // $newComic->artists = $comic['artists'];
        // $newComic->writers = $comic['writers'];
        $newComic->save();
       }
    }
}
