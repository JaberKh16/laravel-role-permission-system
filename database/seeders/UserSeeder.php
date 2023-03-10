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


        ];

        // to loop through the users
        foreach ($allUsers as $someUser){
            $createdUsers = User::create([
                'name' => $someUser['name'],
                'email' => $someUser['email'],
                'password' => Hash::make($someUser['password']),
            ]);

            $createdUsers->assignRole($someUser['role']);
        }
    }
       
}
