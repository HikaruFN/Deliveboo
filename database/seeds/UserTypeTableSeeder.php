<?php

use Illuminate\Database\Seeder;

use App\Type_user;

class UserTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $connections = [
                //Wooden
                [
                    'user_id' => 1,
                    'type_id' => 7
                ],
                //Hamburger
                [
                    'user_id' =>2,
                    'type_id' =>2
                    
                ],
                
                //Giapponese
                [
                    'user_id' =>3,
                    'type_id' =>4
                ],
                //Cinese
                [
                    'user_id' =>4,
                    'type_id' =>3
                ],
                //Italiano
                [
                    'user_id' =>5,
                    'type_id' =>1
                ],
                 //Pizza
                 [
                    'user_id' =>6,
                    'type_id' =>8
                ],
                  //Dolce
                  [
                    'user_id' =>7,
                    'type_id' =>5
                ],
                 //Gelato
                 [
                    'user_id' =>8,
                    'type_id' =>6
                ],
            ];
    
            foreach($connections as $connection) {
                $new_connection = new Type_user();
                $new_connection->user_id = $connection['user_id'];
                $new_connection->type_id = $connection['type_id'];
                $new_connection->save();
            }
        }
    }
}
