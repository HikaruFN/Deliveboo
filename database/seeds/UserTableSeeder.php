<?php

use Illuminate\Database\Seeder;
use App\User;
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
                'address' => 'Via Gennaro Agosto 11',
                'net_number' => 45676809124,
                'password' => 'adminadmin',
                'cover' => 'https://images.unsplash.com/photo-1514933651103-005eec06c04b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=967&q=80',
                
            ],
            //Hamburger
            [
                'name' => 'Hamburger Plaza',
                'email' => 'hamburgerplaza@mail.com',
                'address' => 'Via Settembre 117',
                'net_number' => 45379809124,
                'password' => 'adminadmin',
                'cover' => 'https://images.unsplash.com/photo-1466978913421-dad2ebd01d17?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=967&q=80',
                
            ],
            //Giapponese
            [
                'name' => 'Fudeden Restaurant',
                'email' => 'fudedenrestaurant@mail.com',
                'address' => 'Via Kyote 2',
                'net_number' => 45376809184,
                'password' => 'adminadmin',
                'cover' => 'https://images.unsplash.com/photo-1480796927426-f609979314bd?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80',
                
            ],
            //Cinese
            [
                'name' => 'Lubu Restaurant',
                'email' => 'luburestaurant@mail.com',
                'address' => 'Via Lubu 435',
                'net_number' => 45376809124,
                'password' => 'adminadmin',
                'cover' => 'https://images.unsplash.com/photo-1531878003199-99f8c1c586c5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1613&q=80',
                
            ],
            //Italiano
            [
                'name' => 'Bellaria Restaurant',
                'email' => 'bellariarestaurant@mail.com',
                'address' => 'Via Venti 4',
                'net_number' => 45376800124,
                'password' => 'adminadmin',
                'cover' => 'https://images.unsplash.com/photo-1551183053-bf91a1d81141?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1103&q=80',
                
            ],
             //Pizza
             [
                'name' => 'Rossella Restaurant',
                'email' => 'rossellarestaurant@mail.com',
                'address' => 'Via Gennarino 37',
                'net_number' => 45376800164,
                'password' => 'adminadmin',
                'cover' => 'https://images.unsplash.com/photo-1579824218206-e70b13561132?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1050&q=80',
                
            ],
              //Dolce
              [
                'name' => 'Sweet Restaurant',
                'email' => 'sweetrestaurant@mail.com',
                'address' => 'Via Glucoside 9',
                'net_number' => 48376800764,
                'password' => 'adminadmin',
                'cover' => 'https://images.unsplash.com/photo-1542826438-bd32f43d626f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1156&q=80',
                
            ],
             //Gelato
             [
                'name' => 'Cream Restaurant',
                'email' => 'creamrestaurant@mail.com',
                'address' => 'Via Glucoside 237',
                'net_number' => 48366800764,
                'password' => 'adminadmin',
                'cover' => 'https://images.unsplash.com/photo-1599999182263-ce6c07e98764?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=701&q=80',
                
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
            $slug = Str::of($new_user->name)->slug('-');
            $new_user->slug = $slug;
            $new_user->save();
        }
    }
}