<?php
use App\Article;
use App\Category;
use Illuminate\Database\Seeder;

class ArticleCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::pluck('id')->toArray();
        $articles = Article::pluck('id')->toArray();
        foreach (range(1, 10) as $index) {
            $categoryIdRand = $categories[array_rand($categories)];
            $articleIdRand = $articles[array_rand($articles)];
            $checkExists = DB::table('article_category')->where('category_id', $categoryIdRand)->where('article_id', $articleIdRand)->exists();
            if (!$checkExists) {
                DB::table('article_category')->insert([
                    'category_id' => $categoryIdRand,
                    'article_id' => $articleIdRand
                ]);
            }
        }
    }
}
