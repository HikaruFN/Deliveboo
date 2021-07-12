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
            'Italiano',
            'Hamburger',
            'Cinese',
            'Pizza',
            'Panini',
            'Giapponese',
            'Dolce',
            'Gelato'
        ];

        foreach($types as $type_name) {
            $new_type = new Type();
            $new_type->name = $type_name;
            $new_type->save();
        }
    }
}
