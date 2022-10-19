<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory(0)->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => '$2y$10$Cpw9hAtmuics2KWVc2EogOYovNo/oYgMNudnsjTllsGbiaDAf6LP2',
            'gender' => '2',
            'role' => '1'
        ]);
    }
}

 
// namespace Database\Seeders;
 
// use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Str;
 
// class DatabaseSeeder extends Seeder
// {
//     /**
//      * Run the database seeders.
//      *
//      * @return void
//      */
//     public function run()
//     {
//         DB::table('users')->insert([
//             'name' => Str::random(10),
//             'email' => Str::random(10).'@gmail.com',
//             'password' => Hash::make('password'),
//         ]);
//     }
// }