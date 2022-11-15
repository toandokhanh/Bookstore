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
        [   
            'cart_id' => '1',
            'use_name' => 'Do Khanh Toan',
            'address' => 'An Khánh, Phường An Khánh, Ninh Kiều, Cần Thơ, Việt Nam',
            'phone' => '0913682461',
            'email' => 'toan@localhost.com',
            'gender' => '1',
            'role' => '3',
            'password' => Hash::make('toan@localhost.com'),
        ],
        [   
            'cart_id' => '2',
            'use_name' => 'Huynh Trung Tin',
            'address' => '30/4, Phường 3, Ô Môn, Cần Thơ, Việt Nam',
            'phone' => '0913682123',
            'email' => 'tin@localhost.com',
            'gender' => '1',
            'role' => '2',
            'password' => Hash::make('tin@localhost.com'),
        ],
        [   
            'cart_id' => '3',
            'use_name' => 'Dinh Thai Hop',
            'address' => 'ĐT927, Cây Dương, Phụng Hiệp, Hậu Giang, Việt Nam',
            'phone' => '091368238',
            'email' => 'hop@localhost.com',
            'gender' => '1',
            'role' => '1',
            'password' => Hash::make('hop@localhost.com'),
        ],
        [   
            'cart_id' => '4',
            'use_name' => 'Le Thanh Hoai',
            'address' => '37 Nam Sông Hậu, Vĩnh phước, Vĩnh Châu, Sóc Trăng, Việt Nam',
            'phone' => '091368230',
            'email' => 'hoai@localhost.com',
            'gender' => '1',
            'role' => '1',
            'password' => Hash::make('hoai@localhost.com'),
        ],
        [   
            'cart_id' => '5',
            'use_name' => 'Khach',
            'address' => 'test địa chỉ',
            'phone' => '0931231723',
            'email' => 'demo@localhost.com',
            'gender' => '1',
            'role' => '1',
            'password' => Hash::make('demo@localhost.com'),
        ],
        [   
            'cart_id' => '6',
            'use_name' => 'Admin',
            'address' => 'demo admin',
            'phone' => 'demo admin',
            'email' => 'admin@localhost.com',
            'gender' => '1',
            'role' => '3',
            'password' => Hash::make('admin@localhost.com'),
        ],
        );
        DB::table('accounts')->insert($data);
    }
}
