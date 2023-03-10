<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// importing the UserSeeder and RolesSeeder Class
use Database\Seeders\UserSeeder;
use Database\Seeders\RolesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            
            // defined the RolesSeeder Class
            RolesSeeder::class,
            // defined the UserSeeder Class
            UserSeeder::class,
            // PostSeeder::class,
            // CommentSeeder::class,
        ]);
    }
}
