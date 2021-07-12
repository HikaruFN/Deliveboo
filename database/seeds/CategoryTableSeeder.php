<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Antipasto',
            'Primo',
            'Secondo',
            'Dolce',
            'Contorno',
            'Bevande'
        ];

        foreach($categories as $category_name) {
            $new_category = new Category();
            $new_category->name = $category_name;
            $new_category->save();
        }
    }
}
