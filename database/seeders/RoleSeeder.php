<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['role_name' => 'Khách hàng'],
            ['role_name' => 'Nhân viên'],
            ['role_name' => 'Quản trị viên']
        );
        DB::table('roles')->insert($data);
    }
}
