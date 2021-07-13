<?php

use Illuminate\Database\Seeder;
use App\Dish;

class DishTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dishes = [
            [
                'name' => 'Margherita',
                'description' => 'La regina delle pizze, base rossa con mozzarella filante e crosta croccante',
                'price' => 4.50 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 1
            ],

            [
                'name' => 'Marinara',
                'description' => '',
                'price' => 4 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 1
            ],

            [
                'name' => 'Diavola',
                'description' => 'Base margherita con salame piccante, ma piccante assai proprioup',
                'price' => 7 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 1
            ],
        ];

        foreach($dishes as $dish) {
            $new_dish = new Dish();
            $new_dish->name = $dish['name'];
            $new_dish->description = $dish['description'];
            $new_dish->price = $dish['price'];
            $new_dish->visibility = $dish['visibility'];
            $new_dish->category_id = $dish['category_id'];
            $new_dish->user_id = $dish['user_id'];
            $new_dish->save();
        }
    }
}
