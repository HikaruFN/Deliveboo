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
                'user_id' => 6,
                'cover' => 'cover/pizza-margherita.jpg'
            ],

            [
                'name' => 'Marinara',
                'description' => 'Pomodoro, aglio, olio e origano',
                'price' => 4 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 6,
                'cover' => 'cover/pizza-marinara.jpg'
            ],

            [
                'name' => 'Diavola',
                'description' => 'Base margherita con salame piccante, ma piccante assai proprioup',
                'price' => 7 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 6,
                'cover' => 'cover/pizza-diavola.jpg'
            ],

            [
                /* Giapponese */
                'name' => 'Uramaki Special Tiger Roll',
                'description' => 'Ebiten e maionese avvolto in filetti di salmone, ikura e salsa teriyaki',
                'price' => 13 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 3,
                'cover' => 'cover/tiger-roll.jpg'
            ],

            [
                /* Hamburger */
                'name' => 'Spicy Pulled',
                'description' => 'Pulled pork, avocado, jalapeño, coriandolo, tabasco',
                'price' => 8.45 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 2,
                'cover' => 'cover/spicy-pulled.jpg'
            ],

            [
                'name' => 'Burger boss',
                'description' => 'Hamburger 200gr, bacon croccante, cheddar, lattuga, pomodoro, cipolla, cetriolo, maionese, ketchup e senape',
                'price' => 9 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 2,
                'cover' => 'cover/burger-boss.jpg'
            ],

            [
                'name' => 'Pony Burger',
                'description' => 'Hamburger 200gr, provola affumicata, pomodori secchi, bacon croccante, salsa barbecue, lattuga e pomodoro',
                'price' => 7 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 2,
                'cover' => 'cover/pony-burger.jpg'
            ],

            [
                /* Dolce */
                'name' => 'Tortino di mele',
                'description' => 'Tortino con ripieno di mele',
                'price' => 5 ,
                'visibility' => true,
                'category_id' => 4,
                'user_id' => 7,
                'cover' => 'cover/tortino-di-mele.jpg'
            ],

            [
                /* Dolce */
                'name' => 'Milkshake',
                'description' => 'Milkshake al ciccolato',
                'price' => 3 ,
                'visibility' => true,
                'category_id' => 4,
                'user_id' => 7,
                'cover' => 'cover/milkshake.jpg'
            ],

            [
                /* Gelato*/
                'name' => 'Chocolate Cup',
                'description' => 'Coppa di gelato al cioccolato',
                'price' => 9 ,
                'visibility' => true,
                'category_id' => 4,
                'user_id' => 8,
                'cover' => 'cover/icecream.jpg'
            ],

            [
                /*Cinese*/
                'name' => 'Gyoza',
                'description' => 'Ravioli di carne al vapore',
                'price' => 3 ,
                'visibility' => true,
                'category_id' => 1,
                'user_id' => 4,
                'cover' => 'cover/gyoza.jpg'
            ],

            [
                /*Italiano*/
                'name' => 'Bistecca Fiorentina',
                'description' => 'Bistecca fiorentina da 500Gr',
                'price' => 12 ,
                'visibility' => true,
                'category_id' => 3,
                'user_id' => 5,
                'cover' => 'cover/bistecca-fiorentina.jpg'
            ],

            [
                /*Italiano*/
                'name' => 'Vino Rosso',
                'description' => 'Ideale per accompagnare secondi piatti di carne. Ottimo con un arrosto di maiale.',
                'price' => 20 ,
                'visibility' => true,
                'category_id' => 6,
                'user_id' => 5,
                'cover' => 'cover/vino-rosso.jpg'
            ],

            [
                /*Panini*/
                'name' => 'Panuozzo',
                'description' => 'Panuozzo farcito con insaccati locali',
                'price' => 8 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 5,
                'cover' => 'cover/panuozzo.jpg'
            ],

            [
                /*Birra*/
                'name' => 'Birra chiara',
                'description' => 'Birra a bassa fermentazione 500Cl',
                'price' => 4.50 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 6,
                'cover' => 'cover/beer.jpg'
            ],
        ];

        foreach($dishes as $dish) {
            $new_dish = new Dish();
            $new_dish->name = $dish['name'];
            $new_dish->description = $dish['description'];
            $new_dish->price = $dish['price'];
            $new_dish->visibility = $dish['visibility'];
            $new_dish->cover = $dish['cover'];
            $new_dish->category_id = $dish['category_id'];
            $new_dish->user_id = $dish['user_id'];
            $new_dish->save();
        }
    }
}