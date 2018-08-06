<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //30 is the number of articles
        factory(App\Models\Article::class, 30)->create();
    }
}
