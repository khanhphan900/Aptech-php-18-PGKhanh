<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array =["./img/1.jpg",
        "./img/2.jpg",
        "./img/3.jpg",
        "./img/4.jpg",
        "./img/5.jpg",
        "./img/6.jpg",
        "./img/7.jpg",
        "./img/8.jpg",
        "./img/9.jpg",
        "./img/10.jpg"];
        $faker= Faker\Factory::create();
        for($i=0; $i<10; $i++){
            Post::create([
                'title'=>$faker->sentence,
                'slug' =>$faker->slug,
                'description' =>$faker->text($maxNbChars=200),
                'image_path' =>$array[$i],
                'content' =>$faker->numberBetween(20,2000),
                'view' => rand(1,100)
            ]);
        };
    }
}
