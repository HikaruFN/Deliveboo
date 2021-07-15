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
                /* pizze */
                'name' => 'Margherita',
                'description' => 'La regina delle pizze, base rossa con mozzarella filante e crosta croccante',
                'price' => 4.50 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 1
            ],

            [
                'name' => 'Marinara',
                'description' => 'Pomodoro, aglio, olio e origano',
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

            [
                /* sushi */
                'name' => 'Uramaki Special Tiger Roll',
                'description' => 'Ebiten e maionese avvolto in filetti di salmone, ikura e salsa teriyaki',
                'price' => 13 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 1
            ],

            [
                /* hamburger */
                'name' => 'Spicy Pulled',
                'description' => 'Pulled pork, avocado, jalapeño, coriandolo, tabasco',
                'price' => 8.45 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 1
            ],

            [
                'name' => 'Burger boss',
                'description' => 'Hamburger 200gr, bacon croccante, cheddar, lattuga, pomodoro, cipolla, cetriolo, maionese, ketchup e senape',
                'price' => 9 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 1
            ],

            [
                'name' => 'Pony Burger',
                'description' => 'Hamburger 200gr, provola affumicata, pomodori secchi, bacon croccante, salsa barbecue, lattuga e pomodoro',
                'price' => 7 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 1
            ],

            [
                /* dolce */
                'name' => 'Tortino di mele',
                'description' => 'Tortino con ripieno di mele',
                'price' => 5 ,
                'visibility' => true,
                'category_id' => 4,
                'user_id' => 1
            ],
        ];

        foreach($dishes as $dish) {
            $new_dish = new Dish();
            $new_dish->name = $dish['name'];
            $new_dish->description = $dish['description'];
            $new_dish->price = $dish['price'];
            $new_dish->visibility = $dish['visibility'];
            $new_type->cover = $type['cover'];
            $new_dish->category_id = $dish['category_id'];
            $new_dish->user_id = $dish['user_id'];
            $new_dish->save();
        }
    }
}