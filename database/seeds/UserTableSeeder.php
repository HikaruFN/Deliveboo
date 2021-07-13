<?php

use Illuminate\Database\Seeder;
use App\User;

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
            [
                'name' => 'Gennaro Gennari',
                'email' => 'gennarogennari@mail.com',
                'address' => 'Via Gennaro Gennari',
                'net_number' => 12345678901,
                'password' => 'gennarogennaro',
            ],
        ];

        foreach($users as $user) {
            $new_user = new User();
            $new_user->name = $user['name'];
            $new_user->email = $user['email'];
            $new_user->address = $user['address'];
            $new_user->net_number = $user['net_number'];
            $new_user->password = $user['password'];
            $new_user->save();
        }
    }
}