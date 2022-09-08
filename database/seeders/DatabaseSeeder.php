<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\listing;
use App\Models\User;
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

        $user = User::factory()->create([
            'name' => 'Alfons Mucha',
            'email' => 'alfons@gmail.com',
            'password' => 'admin'
        ]);

        listing::factory(6)->create([
            'user_id' => $user->id
        ]);

    }
}


//        $user = User::factory()->create([
//            'name' => 'Alfons Mucha',
//            'email' => 'alfons@gmail.com'
//        ]);
//
//        listing::factory(6)->create([
//            'user_id' => $user->id
//        ]);
