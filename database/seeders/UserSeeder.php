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
        $demoPassword = env('DEMO_SEED_PASSWORD');
        if (!$demoPassword || strlen($demoPassword) < 12) {
            throw new \RuntimeException('Set DEMO_SEED_PASSWORD (at least 12 characters) before seeding.');
        }
        $data = array(
        [
            'cart_id' => '1',
            'use_name' => 'Demo User',
            'address' => 'Demo address',
            'phone' => '0000000000',
            'email' => 'demo1@example.com',
            'gender' => '1',
            'role' => '3',
            'password' => Hash::make($demoPassword),
        ],
        [
            'cart_id' => '2',
            'use_name' => 'Demo User',
            'address' => 'Demo address',
            'phone' => '0000000000',
            'email' => 'demo2@example.com',
            'gender' => '1',
            'role' => '2',
            'password' => Hash::make($demoPassword),
        ],
        [
            'cart_id' => '3',
            'use_name' => 'Demo User',
            'address' => 'Demo address',
            'phone' => '0000000000',
            'email' => 'demo3@example.com',
            'gender' => '1',
            'role' => '1',
            'password' => Hash::make($demoPassword),
        ],
        [
            'cart_id' => '4',
            'use_name' => 'Demo User',
            'address' => 'Demo address',
            'phone' => '0000000000',
            'email' => 'demo4@example.com',
            'gender' => '1',
            'role' => '1',
            'password' => Hash::make($demoPassword),
        ],
        [
            'cart_id' => '5',
            'use_name' => 'Demo User',
            'address' => 'Demo address',
            'phone' => '0000000000',
            'email' => 'demo5@example.com',
            'gender' => '1',
            'role' => '1',
            'password' => Hash::make($demoPassword),
        ],
        [
            'cart_id' => '6',
            'use_name' => 'Demo User',
            'address' => 'Demo address',
            'phone' => '0000000000',
            'email' => 'demo6@example.com',
            'gender' => '1',
            'role' => '3',
            'password' => Hash::make($demoPassword),
        ],
        );
        DB::table('accounts')->insert($data);
    }
}
