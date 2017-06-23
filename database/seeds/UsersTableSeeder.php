<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Administrador
        User::create([
        		'name' => 'juan',
        		'email' => 'juan@adin.com',
        		'password' => bcrypt('123456'),
        		'role' => 0

        	]);
        //Soporte
        User::create([
        		'name' => 'Maria',
        		'email' => 'suport@gmail.com',
        		'password' => bcrypt('123456'),
        		'role' => 1

        	]);
        //Cliente
        User::create([
        		'name' => 'Olga',
        		'email' => 'client@gmail.com',
        		'password' => bcrypt('123456'),
        		'role' => 2

        	]);
    }
}
