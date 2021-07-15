<?php

use Illuminate\Database\Seeder;
use App\Type;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            [
                'name' => 'Italiano',
                'cover' => 'https://images.unsplash.com/photo-1498579150354-977475b7ea0b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80'
            ],

            [
                'name' => 'Hamburger',
                'cover' => 'https://images.unsplash.com/photo-1561758033-d89a9ad46330?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80'
            ],

            [
                'name' => 'Cinese',
                'cover' => 'https://images-ext-2.discordapp.net/external/uNXg2YtriSho7R9E78VEGGNJ1Nh7DQN67j4UNwX9UJ4/%3Fixid%3DMnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8%26ixlib%3Drb-1.2.1%26auto%3Dformat%26fit%3Dcrop%26w%3D1958%26q%3D80/https/images.unsplash.com/photo-1523905330026-b8bd1f5f320e?width=878&height=579'
            ],

            [
                'name' => 'Giapponese',
                'cover' => 'https://images.unsplash.com/photo-1617196035154-1e7e6e28b0db?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80'
            ],

            [
                'name' => 'Dolce',
                'cover' => 'https://images-ext-1.discordapp.net/external/jzkmxLUr8nl4uEaGioF4_RaaRncpMW3Ax4zNNkQdpTw/%3Fixid%3DMnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8%26ixlib%3Drb-1.2.1%26auto%3Dformat%26fit%3Dcrop%26w%3D1950%26q%3D80/https/images.unsplash.com/photo-1551373500-57fbb739a2e3?width=869&height=579'
            ],

            [
                'name' => 'Gelato',
                'cover' => 'https://images.unsplash.com/photo-1580915411954-282cb1b0d780?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=634&q=80'
            ],

            [
                'name' => 'Panini',
                'cover' => 'https://images.unsplash.com/photo-1475090169767-40ed8d18f67d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2089&q=80'
            ],

            [
                'name' => 'Pizza',
                'cover' => 'https://images.unsplash.com/photo-1581873372796-635b67ca2008?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80'
            ],

        ];

        foreach($types as $type) {
            $new_type = new Type();
            $new_type->name = $type['name'];
            $new_type->cover = $type['cover'];
            $new_type->save();
        }
    }
}
