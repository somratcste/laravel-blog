<?php

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
        $category = new \App\Category();
        $category->name = 'Technology';
        $category->save();

        $category = new \App\Category();
        $category->name = 'Food';
        $category->save();

        $category = new \App\Category();
        $category->name = 'Sports';
        $category->save();
    }
}
