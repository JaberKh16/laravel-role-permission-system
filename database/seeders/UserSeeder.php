<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// including the App\Models\User model
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  defining multiple users
        $allUsers = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' =>  'password',
                'role' => 'admin'
            ],

            [
                'name' => 'User1',
                'email' => 'user1@gmail.com',
                'password' =>  '12345678',
                'role' => 'user1'
            ],

            [
                'name' => 'User2',
                'email' => 'user2@gmail.com',
                'password' =>  '87654321',
                'role' => 'user2'
            ],

        ];

        // to loop through the users
        foreach ($allUsers as $someUser){
            User::create([
                'name' => $someUser['name'],
                'email' => $someUser['email'],
                'password' => Hash::make($someUser['password']),
            ]);
        }
    }
       
}
