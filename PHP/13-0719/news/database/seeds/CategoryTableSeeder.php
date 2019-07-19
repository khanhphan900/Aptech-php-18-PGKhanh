<?php
use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = ['Kinh Tế', 'Giáo Dục', 'Đời Sống', 'Thời Trang', 'Giải Trí', 'Bóng Đá'];
        // foreach(range(1,6) as $index)
        // Category::create(['name'=> $array[$index]
        // ]); >>>> lệnh sai
        for ($i=0; $i<6; $i++){
            Category::create(['name'=> $array[$i]]);
        }
    }
}
