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
                'name' => 'Primavera',
                'description' => 'mozzarella di bufala, pomodorini, rucola',
                'price' => 7.50,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 6,
                'cover' => 'cover/pizza-primavera.jpg'
            ],

            [
                'name' => 'Capricciosa',
                'description' => 'Prosciutto cotto, olive nere, funghi',
                'price' => 7.80,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 6,
                'cover' => 'cover/pizza-capricciosa.jpg'
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
                'name' => 'Mare e Monti',
                'description' => 'Pomodoro, mozzarella, gamberetti e funghi',
                'price' => 8,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 6,
                'cover' => 'cover/pizza-mare-e-monti.jpg'
            ],

            [
                /* Giapponese */
                'name' => 'Sashimi',
                'description' => 'Sashimi di salmone',
                'price' => 4.50 ,
                'visibility' => true,
                'category_id' => 1,
                'user_id' => 3,
                'cover' => 'cover/sashimi.jpg'
            ],

            [
                /* Giapponese */
                'name' => 'Ramen',
                'description' => 'Ramen di carne e verdure',
                'price' => 13 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 3,
                'cover' => 'cover/ramen.jpg'
            ],

            [
                /* Giapponese */
                'name' => 'Takoyaki',
                'description' => 'Polpette di polipo',
                'price' => 3.50,
                'visibility' => true,
                'category_id' => 1,
                'user_id' => 3,
                'cover' => 'cover/takoyaki.jpg'
            ],

            [
                /* Giapponese */
                'name' => 'Nigiri',
                'description' => 'Nigiri di tonno',
                'price' => 6,
                'visibility' => true,
                'category_id' => 1,
                'user_id' => 3,
                'cover' => 'cover/nigiri.jpg'
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
                /* Hamburger */
                'name' => 'Cheeseburger',
                'description' => 'pane, 300gr 100% carne di manzo, formaggio cheddar, pomodorini, onion rings, insalata e cetriolini ',
                'price' => 5.50 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 1,
                'cover' => 'cover/Cheeseburger.jpg'
            ],
            [
                /* Hamburger */
                'name' => 'Bacon burger',
                'description' => 'pane, 300gr 100% carne di manzo, formaggio cheddar bacon croccante, onion rings e insalata',
                'price' => 4.50 ,
                'visibility' => true,
                'category_id' => 1,
                'user_id' => 1,
                'cover' => 'cover/bacon-burger.jpg'
            ],
            [
                /* Hamburger */
                'name' => 'Classic burger',
                'description' => 'pane, 300gr 100% carne di manzo, formaggio cheddar, insalata, pomodorini, cipolla di tropea e salsa bbq',
                'price' => 4.00 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 2,
                'cover' => 'cover/classic-burger.jpg'
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
                'name' => 'Spicy Burger',
                'description' => 'Hamburger 200gr, Salsa piccante speciale',
                'price' => 6 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 2,
                'cover' => 'cover/spicy-burger.jpg'
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
                /* Dolce */
                'name' => 'Blueberry Cheesecake',
                'description' => 'Fetta di cheesecake ai mirtilli',
                'price' => 4 ,
                'visibility' => true,
                'category_id' => 4,
                'user_id' => 7,
                'cover' => 'cover/blueberry-cheesecake.jpg'
            ],

            [
                /* Dolce */
                'name' => 'Muffin',
                'description' => 'Muffin con cuore di cioccolato',
                'price' => 3 ,
                'visibility' => true,
                'category_id' => 4,
                'user_id' => 7,
                'cover' => 'cover/muffin.jpg'
            ],

            [
                /* Dolce */
                'name' => 'Sacher',
                'description' => 'Torta Sacher',
                'price' => 4 ,
                'visibility' => true,
                'category_id' => 4,
                'user_id' => 7,
                'cover' => 'cover/sacher.jpg'
            ],

            [
                /* Gelato*/
                'name' => 'Chocolate Cup',
                'description' => 'Coppa di gelato al cioccolato',
                'price' => 4 ,
                'visibility' => true,
                'category_id' => 4,
                'user_id' => 8,
                'cover' => 'cover/icecream.jpg'
            ],

            [
                /* Gelato*/
                'name' => 'Strawberry Icecream',
                'description' => 'Gelato alla fragola ricoperto di cioccolato bianco o fondente',
                'price' => 3.50 ,
                'visibility' => true,
                'category_id' => 4,
                'user_id' => 8,
                'cover' => 'cover/strawberry-icecream.jpg'
            ],

            [
                /* Gelato*/
                'name' => 'Fruit Popsicle',
                'description' => 'Ghiacciolo alla frutta',
                'price' => 2 ,
                'visibility' => true,
                'category_id' => 4,
                'user_id' => 8,
                'cover' => 'cover/fruit-popsicle.jpg'
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
                /*Cinese*/
                'name' => 'Maiale in agrodolce',
                'description' => 'Maiale in salsa agrodolce 500Gr',
                'price' => 7,
                'visibility' => true,
                'category_id' => 1,
                'user_id' => 4,
                'cover' => 'cover/maiale-in-agrodolce.jpg'
            ],

            [
                /*Cinese*/
                'name' => 'Noodles',
                'description' => 'Noodles di carne e verdure',
                'price' => 4,
                'visibility' => true,
                'category_id' => 1,
                'user_id' => 4,
                'cover' => 'cover/noodles.jpg'
            ],

            [
                /*Cinese*/
                'name' => 'Green Tea',
                'description' => 'Green Tea del Guandong',
                'price' => 2.50,
                'visibility' => true,
                'category_id' => 6,
                'user_id' => 4,
                'cover' => 'cover/green-tea.jpg'
            ],

            [
                /*Cinese*/
                'name' => 'Riso alla cantonese',
                'description' => 'Riso con uova e verdure',
                'price' => 4,
                'visibility' => true,
                'category_id' => 6,
                'user_id' => 4,
                'cover' => 'cover/riso-cantonese.jpg'
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
                'name' => 'Lasagne',
                'description' => 'Come la faceva la nonna',
                'price' => 8 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 5,
                'cover' => 'cover/lasagne.jpg'
            ],

            [
                /*Italiano*/
                'name' => 'Pasta alla bolognese',
                'description' => 'Pasta al sugo con macinato di carne.',
                'price' => 5.50 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 5,
                'cover' => 'cover/bolognese.jpg'
            ],

            [
                /*Italiano*/
                'name' => 'Past al pesto',
                'description' => 'Pasta con pesto alla genovese',
                'price' => 6 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 5,
                'cover' => 'cover/pesto.jpg'
            ],

            [
                /*Panini*/
                'name' => 'Panuozzo',
                'description' => 'Panuozzo farcito con insaccati locali',
                'price' => 8 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 1,
                'cover' => 'cover/panuozzo.jpg'
            ],

            [
                /*Panini*/
                'name' => 'Piadina',
                'description' => 'Piadina sqaquerone e rucola ( la più fantastica delle mie parti ) cit.',
                'price' => 8 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 1,
                'cover' => 'cover/piadina.jpg'
            ],

            [
                /*Panini*/
                'name' => 'Panino con porchetta',
                'description' => 'Panino farcito con porchetta sarda',
                'price' => 7 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 1,
                'cover' => 'cover/porchetta.jpg'
            ],

            [
                /*Panini*/
                'name' => 'Panino formaggio e salame',
                'description' => 'Panino farcito con formaggio e salame',
                'price' => 8 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 1,
                'cover' => 'cover/paninoformaggio.jpg'
            ],

            [
                /*Panini*/
                'name' => 'Sandwich al formaggio',
                'description' => 'Sandwich con formaggio grigliato',
                'price' => 5 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 1,
                'cover' => 'cover/sandwichformaggio.jpg'
            ],

            [
                /*Panini*/
                'name' => 'Panino Montana',
                'description' => 'Panino farcito con noci e formaggio',
                'price' => 7 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 1,
                'cover' => 'cover/panino-noci-e-formaggio.jpg'
            ],

            [
                /*Panini*/
                'name' => 'Bruschetta',
                'description' => 'Bruschetta Gourmet',
                'price' => 3 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 1,
                'cover' => 'cover/bruschetta.jpg'
            ],

            [
                /*Birra*/
                'name' => 'Birra chiara',
                'description' => 'Birra a bassa fermentazione 500Cl',
                'price' => 4.50 ,
                'visibility' => true,
                'category_id' => 2,
                'user_id' => 1,
                'cover' => 'cover/beer.jpg'
            ],
            [
                /*coca-cola*/
                'name' => 'coca-cola',
                'description' => 'lattina da 500Cl',
                'price' => 2.50 ,
                'visibility' => true,
                'category_id' => 6,
                'user_id' => 4,
                'cover' => 'cover/coca-cola.jpg'
            ],
            [
                /*acqua*/
                'name' => 'acqua ferrarelle',
                'description' => 'bottiglietta da 500Cl',
                'price' => 1.00 ,
                'visibility' => true,
                'category_id' => 6,
                'user_id' => 1,
                'cover' => 'cover/acqua.jpg'
            ],
            [
                /*pepsi*/
                'name' => 'pepsi',
                'description' => 'lattina da 500Cl',
                'price' => 2.50 ,
                'visibility' => true,
                'category_id' => 6,
                'user_id' => 2,
                'cover' => 'cover/pepsi.jpg'
            ],
            [
                /*fanta*/
                'name' => 'fanta',
                'description' => 'lattina da 500Cl 500Cl',
                'price' => 2.50 ,
                'visibility' => true,
                'category_id' => 6,
                'user_id' => 3,
                'cover' => 'cover/fanta.jpg'
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