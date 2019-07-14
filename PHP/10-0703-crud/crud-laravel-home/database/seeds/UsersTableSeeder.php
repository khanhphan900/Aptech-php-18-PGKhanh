<?php

use App\Fight;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 20) as $index){
            Fight::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('123456'),
            ]);
        } 

        // for($i=0; $i<10; $i++){
        //         Fight::create([
        //         'name' => $faker->name,
        //         'email' => $faker->email,
        //         'password' => $fake->bcrypt('123456'),
        //     ]);
        // }

        // $faker = Faker::create();
        // for($i=0; $i<10; $i++){
        //     DB::table('fights')->insert([
        //         'name' => $faker->name,
        //         'email' => $faker->email,
        //         'password' => bcrypt('123456'),
        //     ]); 
        // }
    }
}
