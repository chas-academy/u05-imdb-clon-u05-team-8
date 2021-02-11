<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create(array('name' => 'Jonas Lund',
        'email' => 'jonas.lund@chasacademy.se',
        'password' => '$2y$10$zvznGC34MxPZGUaEgBHinOcSHc9jYLaSDZMbAho8GSYsbpReRr/2m',
         ));

        User::create(array('name' => 'Admin1 Admin1',
        'email' => 'admin1@u05.test',
        'password' => '$2y$10$zvznGC34MxPZGUaEgBHinOcSHc9jYLaSDZMbAho8GSYsbpReRr/2m',
        ));

        User::create(array('name' => 'Admin2 Admin2',
        'email' => 'admin2@u05.test',
        'password' => '$2y$10$zvznGC34MxPZGUaEgBHinOcSHc9jYLaSDZMbAho8GSYsbpReRr/2m',

        ));
    }
}
