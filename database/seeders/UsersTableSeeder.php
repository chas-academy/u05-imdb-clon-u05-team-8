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
        'password' => '$2y$10$0BWMMQX6HSL4shgY9m2AcO947qwstH8pERG/XaqaSHF3YGcpQ0e1u',
         ));

        User::create(array('name' => 'Admin1 Admin1',
        'email' => 'admin1@u05.test',
        'password' => '$2y$10$zvznGC34MxPZGUaEgBHinOcSHc9jYLaSDZMbAho8GSYsbpReRr/2m',
        ));

        User::create(array('name' => 'Admin2 Admin2',
        'email' => 'admin2@u05.test',
        'password' => '$2y$10$zvznGC34MxPZGUaEgBHinOcSHc9jYLaSDZMbAho8GSYsbpReRr/2m',
        ));

        /*  ----- */

        User::create(array('name' => 'Erik Sandstedt',
        'email' => 'erik.sandstedt@chasacademy.se',
        'password' => '$2y$10$zvznGC34MxPZGUaEgBHinOcSHc9jYLaSDZMbAho8GSYsbpReRr/2m',
         ));

        User::create(array('name' => 'Gui Hong Cao',
        'email' => 'guihong.cao@chasacademy.se',
        'password' => '$2y$10$zvznGC34MxPZGUaEgBHinOcSHc9jYLaSDZMbAho8GSYsbpReRr/2m',
         ));

        User::create(array('name' => 'Khaled Ibrahim',
        'email' => 'khaled.ibrahim@chasacademy.se',
        'password' => '$2y$10$zvznGC34MxPZGUaEgBHinOcSHc9jYLaSDZMbAho8GSYsbpReRr/2m',
         ));

        User::create(array('name' => 'Anders Lilienberg',
        'email' => 'anders.lilienberg@chasacademy.se',
        'password' => '$2y$10$zvznGC34MxPZGUaEgBHinOcSHc9jYLaSDZMbAho8GSYsbpReRr/2m',
         ));

        User::create(array('name' => 'Mohammed Akdemir',
        'email' => 'mohammed.akdemir@chasacademy.se',
        'password' => '$2y$10$zvznGC34MxPZGUaEgBHinOcSHc9jYLaSDZMbAho8GSYsbpReRr/2m',
         ));

        User::create(array('name' => 'Roland Choueiry',
        'email' => 'roland.choueiry@chasacademy.se',
        'password' => '$2y$10$zvznGC34MxPZGUaEgBHinOcSHc9jYLaSDZMbAho8GSYsbpReRr/2m',
         ));

        // User::create(array('name' => 'Vande Nikolovski',
        // 'email' => 'vande.nikolovski@chasacademy.se',
        // 'password' => '$2y$10$zvznGC34MxPZGUaEgBHinOcSHc9jYLaSDZMbAho8GSYsbpReRr/2m',
        //  ));

        User::create(array('name' => 'Zannatul Chowdhury',
        'email' => 'zannatul.chowdhury@chasacademy.se',
        'password' => '$2y$10$zvznGC34MxPZGUaEgBHinOcSHc9jYLaSDZMbAho8GSYsbpReRr/2m',
         ));
    }
}
