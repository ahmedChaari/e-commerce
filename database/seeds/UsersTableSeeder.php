<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = User::where('email', 'ahmed17chgmail.com')->first();

       if (!$user) {

        User::create([
            'name'     =>   'ahmed chaari',
            'email'    =>   'ahmed17ch@gmail.com',
            'role'     =>   'admin',
            'password' =>   Hash::make('12345678')
             ]);


       }
    }
}
