<?php

/**
 * Created by PhpStorm.
 * User: julian
 * Date: 10/12/15
 * Time: 09:18 PM
 */
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $fecha = new DateTime();
        \DB::table('users')->insert(array(
            'name' => 'Julian Hernandez',
            'email' => 'admin@gmail.com',
            'password' => \Hash::make('secret'),
            'created_at' => $fecha,
            'updated_at' => $fecha
        ));

    }



}