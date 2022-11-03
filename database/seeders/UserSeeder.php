<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['use_name' => 'Do Khanh Toan',
            'address' => 'Can Tho',
            'phone' => '0913682461',
            'email' => 'toanadmin@localhost.com',
            'gender' => '1',
            'role' => '3',
            'password' => Hash::make('toanadmin@localhost.com'),
            ]
        );
        DB::table('accounts')->insert($data);
    }
}
