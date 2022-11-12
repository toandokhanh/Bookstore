<?php

use App\Models\Publisher;
use App\Models\Role;
use Database\Seeders\AuthorSeeder;
use Database\Seeders\CartSeeder;
use Database\Seeders\CatetorySeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\PublisherSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\SliderSeeder;
use Database\Seeders\UserSeeder;
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
        $this->call(CatetorySeeder::class);
        $this->call(SliderSeeder::class);
        $this->call(AuthorSeeder::class);
        $this->call(PublisherSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(CartSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ProductSeeder::class);
    }
}
