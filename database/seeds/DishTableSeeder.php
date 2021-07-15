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
                'cover' => 'https://images.unsplash.com/photo-1574071318508-1cdbab80d002?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80'
            ],

            [
                'name' => 'Marinara',
                'description' => 'Pomodoro, aglio, olio e origano',
                'price' => 4 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 6,
                'cover' => 'https://www.melarossa.it/wp-content/uploads/2020/02/pizza-marina-alla-napoletana--1280x720.jpg'
            ],

            [
                'name' => 'Diavola',
                'description' => 'Base margherita con salame piccante, ma piccante assai proprioup',
                'price' => 7 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 6,
                'cover' => 'https://images.unsplash.com/photo-1544982503-9f984c14501a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80'
            ],

            [
                /* Giapponese */
                'name' => 'Uramaki Special Tiger Roll',
                'description' => 'Ebiten e maionese avvolto in filetti di salmone, ikura e salsa teriyaki',
                'price' => 13 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 3,
                'cover' => 'https://images.unsplash.com/photo-1554502078-ef0fc409efce?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=676&q=80'
            ],

            [
                /* Hamburger */
                'name' => 'Spicy Pulled',
                'description' => 'Pulled pork, avocado, jalapeño, coriandolo, tabasco',
                'price' => 8.45 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 2,
                'cover' => 'https://www.negroni.com/sites/negroni.com/files/styles/scale__1440_x_1440_/public/hamburger_thumb.jpg?itok=yAaXpDm3'
            ],

            [
                'name' => 'Burger boss',
                'description' => 'Hamburger 200gr, bacon croccante, cheddar, lattuga, pomodoro, cipolla, cetriolo, maionese, ketchup e senape',
                'price' => 9 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 2,
                'cover' => 'https://www.mrdoyle.it/wp-content/uploads/2019/01/AdobeStock_209775207-scaled-e1575394210352.jpeg'
            ],

            [
                'name' => 'Pony Burger',
                'description' => 'Hamburger 200gr, provola affumicata, pomodori secchi, bacon croccante, salsa barbecue, lattuga e pomodoro',
                'price' => 7 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 2,
                'cover' => 'https://www.tribugolosa.com/media/untitled-collage-jpg_crop.jpeg/rh/hamburger-con-fonduta-di-brie-e-pancetta-croccante.jpg'
            ],

            [
                /* Dolce */
                'name' => 'Tortino di mele',
                'description' => 'Tortino con ripieno di mele',
                'price' => 5 ,
                'visibility' => true,
                'category_id' => 4,
                'user_id' => 7,
                'cover' => 'https://blog.giallozafferano.it/lebistro/wp-content/uploads/2018/04/IMG_0027-1.jpg'
            ],

            [
                /* Dolce */
                'name' => 'Milkshake',
                'description' => 'Milkshake al ciccolato',
                'price' => 3 ,
                'visibility' => true,
                'category_id' => 4,
                'user_id' => 7,
                'cover' => 'https://www.sugarandsoul.co/wp-content/uploads/2021/04/chocolate-milkshake-8.jpg'
            ],

            [
                /* Gelato*/
                'name' => 'Chocolate Cup',
                'description' => 'Coppa di gelato al cioccolato',
                'price' => 9 ,
                'visibility' => true,
                'category_id' => 4,
                'user_id' => 8,
                'cover' => 'https://www.ilgelatoartigianale.info/imgpub/1975859/1000/0/800kyle-hinkson-h75rvpcvkik-unsplash.jpg'
            ],

            [
                /*Cinese*/
                'name' => 'Gyoza',
                'description' => 'Ravioli di carne al vapore',
                'price' => 3 ,
                'visibility' => true,
                'category_id' => 1,
                'user_id' => 4,
                'cover' => 'https://plantbasedmatters.net/wp-content/uploads/2019/09/Pan-Fried-Gyoza-1-e1569858866140.jpeg'
            ],

            [
                /*Italiano*/
                'name' => 'Bistecca Fiorentina',
                'description' => 'Bistecca fiorentina da 500Gr',
                'price' => 12 ,
                'visibility' => true,
                'category_id' => 3,
                'user_id' => 5,
                'cover' => 'https://www.ilmieledialessio.com/wp-content/uploads/2020/04/tagliata-di-manzo-segreti.jpg'
            ],

            [
                /*Italiano*/
                'name' => 'Vino Rosso',
                'description' => 'Ideale per accompagnare secondi piatti di carne. Ottimo con un arrosto di maiale.',
                'price' => 20 ,
                'visibility' => true,
                'category_id' => 6,
                'user_id' => 5,
                'cover' => 'https://www.ilmieledialessio.com/wp-content/uploads/2020/04/tagliata-di-manzo-segreti.jpg'
            ],

            [
                /*Panini*/
                'name' => 'Panuozzo',
                'description' => 'Panuozzo farcito con insaccati locali',
                'price' => 8 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 5,
                'cover' => 'https://www.napoli-turistica.com/wp-content/uploads/2017/08/Pannuozzo-di-Gragnano.jpg'
            ],

            [
                /*Panini*/
                'name' => 'Birra chiara',
                'description' => 'Birra a bassa fermentazione 500Cl',
                'price' => 4.50 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 6,
                'cover' => 'https://lh3.googleusercontent.com/proxy/NgFqHW-RQ-tNA8D8b-v2-rdgK3ubluRvyk_PdGIobFBvT1VHdWP5C_0CTJ_YOv1QPw8oIXkeewTSwxKny9Wxa2zyMlP_MqdsLfsdhg1AL4lhqfYnn0ia_ZJxqwcVDEQE'
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