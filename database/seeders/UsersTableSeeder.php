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
        'role_id' => '1',
        'email' => 'jonas.lund@chasacademy.se',
        'password' => '$2y$10$zvznGC34MxPZGUaEgBHinOcSHc9jYLaSDZMbAho8GSYsbpReRr/2m',
         ));

        User::create(array('name' => 'Admin1 Admin1',
         'role_id' => '1',

        'email' => 'admin1@u05.test',
        'password' => '$2y$10$zvznGC34MxPZGUaEgBHinOcSHc9jYLaSDZMbAho8GSYsbpReRr/2m',
        ));

        User::create(array('name' => 'Admin2 Admin2',
         'role_id' => '1',

        'email' => 'admin2@u05.test',
        'password' => '$2y$10$zvznGC34MxPZGUaEgBHinOcSHc9jYLaSDZMbAho8GSYsbpReRr/2m',
        ));

        /*  ----- */

        User::create(array('name' => 'Erik Sandstedt',
         'role_id' => '2',

        'email' => 'erik.sandstedt@chasacademy.se',
        'password' => '$2y$10$zvznGC34MxPZGUaEgBHinOcSHc9jYLaSDZMbAho8GSYsbpReRr/2m',
         ));

        User::create(array('name' => 'Gui Hong Cao',
         'role_id' => '2',

        'email' => 'guihong.cao@chasacademy.se',
        'password' => '$2y$10$zvznGC34MxPZGUaEgBHinOcSHc9jYLaSDZMbAho8GSYsbpReRr/2m',
         ));

        User::create(array('name' => 'Khaled Ibrahim',
        'role_id' => '2',

        'email' => 'khaled.ibrahim@chasacademy.se',
        'password' => '$2y$10$zvznGC34MxPZGUaEgBHinOcSHc9jYLaSDZMbAho8GSYsbpReRr/2m',
         ));

        User::create(array('name' => 'Anders Lilienberg',
        'role_id' => '2',

        'email' => 'anders.lilienberg@chasacademy.se',
        'password' => '$2y$10$zvznGC34MxPZGUaEgBHinOcSHc9jYLaSDZMbAho8GSYsbpReRr/2m',
         ));

        User::create(array('name' => 'Mohammed Akdemir',
        'role_id' => '2',

        'email' => 'mohammed.akdemir@chasacademy.se',
        'password' => '$2y$10$zvznGC34MxPZGUaEgBHinOcSHc9jYLaSDZMbAho8GSYsbpReRr/2m',
         ));

        User::create(array('name' => 'Roland Choueiry',
        'role_id' => '2',

        'email' => 'roland.choueiry@chasacademy.se',
        'password' => '$2y$10$zvznGC34MxPZGUaEgBHinOcSHc9jYLaSDZMbAho8GSYsbpReRr/2m',
         ));

        // User::create(array('name' => 'Vande Nikolovski',
        // 'email' => 'vande.nikolovski@chasacademy.se',
        // 'password' => '$2y$10$zvznGC34MxPZGUaEgBHinOcSHc9jYLaSDZMbAho8GSYsbpReRr/2m',
        //  ));

        User::create(array('name' => 'Zannatul Chowdhury',
        'role_id' => '2',

        'email' => 'zannatul.chowdhury@chasacademy.se',
        'password' => '$2y$10$zvznGC34MxPZGUaEgBHinOcSHc9jYLaSDZMbAho8GSYsbpReRr/2m',
         ));
    }
}
