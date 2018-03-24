<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $user = new \App\User();
//        $user->create([
//	        'name' => 'Nanderson Castro',
//	        'email' => 'email@email.com',
//	        'password' => bcrypt('12345678')
//        ]);
	    factory(App\User::class, 30)->create();
    }
}
