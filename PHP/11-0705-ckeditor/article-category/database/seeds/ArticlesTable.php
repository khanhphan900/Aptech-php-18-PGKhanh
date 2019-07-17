<?php

use App\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        // for($i=0; $i<5; $i++){
        //     DB::table('articles')->insert([
        //         'title' => $faker->title,
        //         'slug' => $faker->slug,
        //         'description' => $faker->text($maxNbChars = 15),
        //         'content' => $faker->text,
        //     ]);
        // }; 
        // Cách này sẽ không thấy được thời gian create_at và update_at
        foreach (range(1, 10) as $index){
            Article::create([
                // 'title' => $faker->title,
                'title'=>$faker->sentence,
                'slug' => $faker->slug,
                'description' => $faker->text($maxNbChars = 15),
                'content' => $faker->text,
                'image_path' => $faker->image($dir = null, $width = 640, $height = 480, 'cats', false)
            ]);
        };
    }
}
