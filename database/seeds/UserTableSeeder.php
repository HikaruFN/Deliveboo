<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Type;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            //Panini
            [
                'name' => 'Wooden Restaurant',
                'email' => 'woodenrestaurant@mail.com',
                'address' => 'Via Gennaro Agosto 11, Milano',
                'net_number' => 45676809124,
                'password' => 'adminadmin',
                'cover' => 'cover/wooden-restaurant.jpg'
            ],
            //Hamburger
            [
                'name' => 'Hamburger Plaza',
                'email' => 'hamburgerplaza@mail.com',
                'address' => 'Via Settembre 117, Milano',
                'net_number' => 45379809124,
                'password' => 'adminadmin',
                'cover' => 'cover/hamburger-plaza.jpg'
                
            ],
            
            //Giapponese
            [
                'name' => 'Fudeden Restaurant',
                'email' => 'fudedenrestaurant@mail.com',
                'address' => 'Via Kyote 2, Milano',
                'net_number' => 45376809184,
                'password' => 'adminadmin',
                'cover' => 'cover/fudeden-restaurant.jpg'
            ],
            //Cinese
            [
                'name' => 'Lubu Restaurant',
                'email' => 'luburestaurant@mail.com',
                'address' => 'Via Lubu 435, Milano',
                'net_number' => 45376809124,
                'password' => 'adminadmin',
                'cover' => 'cover/lubu-restaurant.jpg'
            ],
            //Italiano
            [
                'name' => 'Bellaria Restaurant',
                'email' => 'bellariarestaurant@mail.com',
                'address' => 'Via Venti 4, Milano',
                'net_number' => 45376800124,
                'password' => 'adminadmin',
                'cover' => 'cover/bellaria-restaurant.jpg'
            ],
             //Pizza
             [
                'name' => 'Rossella Restaurant',
                'email' => 'rossellarestaurant@mail.com',
                'address' => 'Via Gennarino 37, Milano',
                'net_number' => 45376800164,
                'password' => 'adminadmin',
                'cover' => 'cover/rossella-restaurant.jpg'
            ],
              //Dolce
              [
                'name' => 'Sweet Restaurant',
                'email' => 'sweetrestaurant@mail.com',
                'address' => 'Via Glucoside 9, Milano',
                'net_number' => 48376800764,
                'password' => 'adminadmin',
                'cover' => 'cover/sweet-restaurant.jpg'
            ],
             //Gelato
             [
                'name' => 'Cream Restaurant',
                'email' => 'creamrestaurant@mail.com',
                'address' => 'Via Glucoside 237, Milano',
                'net_number' => 48366800764,
                'password' => 'adminadmin',
                'cover' => 'cover/cream-restaurant.jpg'
            ],
        ];

        foreach($users as $user) {
            $new_user = new User();
            $new_user->name = $user['name'];
            $new_user->email = $user['email'];
            $new_user->address = $user['address'];
            $new_user->net_number = $user['net_number'];
            $new_user->password = $user['password'];
            $new_user->cover = $user['cover'];
            $new_user->save();
        }
    }
}