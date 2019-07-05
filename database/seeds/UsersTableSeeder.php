<?php

use Illuminate\Database\Seeder;

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
                'name' => 'Carlos André',
                'username' => 'carlos.andre',
                'email' => 'crlandre@gmail.com',
                'password' => bcrypt('1234'),
            ],
            [
                'name' => 'Thauan',
                'username' => 'thauan',
                'email' => 'thauan@gmail.com',
                'password' => bcrypt('1234'),
            ],
            [
                'name' => 'Diego Couto',
                'username' => 'diego.couto',
                'email' => 'diego.couto@gmail.com',
                'password' => bcrypt('1234'),
            ],
            [
                'name' => 'Ana Carvalho',
                'username' => 'ana.carvalho',
                'email' => 'ana__ccarvalho@hotmail.com',
                'password' => bcrypt('ana!+3n4'),
            ]
        ];
    }
}
