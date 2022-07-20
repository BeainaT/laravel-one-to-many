<?php

use Illuminate\Database\Seeder;
use App\Category;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['IT News', 'Full Stack', 'DevOps', 'Frontend', 'Backend'];
        foreach($categories as $category) {
            $newCategory = new Category();

            $newCategory->name = $category;
            $newCategory->slug = str::of($newCategory->name)->slug('-');

            $newCategory->save();
        }
    }
}
