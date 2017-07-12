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
    { DB::table('users')->insert([
        'name' => 'luis',
        'email' => 'luis@gmail.com',
        'password' =>bcrypt('luis'),
        'updated_at' => new \Carbon\Carbon,
        'created_at' => new \Carbon\Carbon,
        'remember_token' => 'mi nombre'
        ]);  //
        //
    }
} 