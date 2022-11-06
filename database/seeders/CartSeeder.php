<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['ac_id' => 1],
            ['ac_id' => 2],
            ['ac_id' => 3],
            ['ac_id' => 4],
            ['ac_id' => 5],
            ['ac_id' => 6],
        );
        DB::table('carts')->insert($data);
    }
}
