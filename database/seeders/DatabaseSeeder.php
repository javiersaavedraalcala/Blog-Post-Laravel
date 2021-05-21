<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        \App\Models\User::create([
            'name' => 'Joselo Carmona',
            'email' => 'joselo@admin.com',
            'password' => bcrypt('123123123')
        ]);

        \App\Models\Post::factory(24)->create();

    }
}
