<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
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
                'publisher_name' => 'NXB Thế Giới',
                'publishers_address' => 'Hà Nội',
            ],
            [
                'publisher_name' => 'NXB Công Thương',
                'publishers_address' => 'Hà Nội',
            ],
            [
                'publisher_name' => 'NXB Tổng Hợp TPHCM',
                'publishers_address' => 'Hà Nội',
            ],
            [
                'publisher_name' => 'NXB Văn học',
                'publishers_address' => 'Hà Nội',
            ],
            [
                'publisher_name' => 'NXB Hội Nhà Văn',
                'publishers_address' => 'Hà Nội',
            ],
            [
                'publisher_name' => 'NXB Dân Trí',
                'publishers_address' => 'Hà Nội',
            ],
            [
                'publisher_name' => 'NXB Lao Động',
                'publishers_address' => 'Hà Nội',
            ],
            [
                'publisher_name' => 'NXB Trẻ',
                'publishers_address' => 'tp Hồ Chí Minh',
            ],
            [
                'publisher_name' => 'NXB Đại học Kinh tế quốc dân',
                'publishers_address' => 'tp Hồ Chí Minh',
            ],
            [
                'publisher_name' => 'NXB Đại Học Quốc Gia Hà Nội',
                'publishers_address' => 'tp Hồ Chí Minh',
            ],
            [
                'publisher_name' => 'NXB Đại Học Sư Phạm',
                'publishers_address' => 'tp Hồ Chí Minh',
            ],
            [
                'publisher_name' => 'NXB Tổng Hợp TPHCM',
                'publishers_address' => 'tp Hồ Chí Minh',
            ],
            [
                'publisher_name' => 'NXB Giáo Dục Việt Nam',
                'publishers_address' => 'tp Hồ Chí Minh',
            ],
            [
                'publisher_name' => 'NXB Kim Đồng',
                'publishers_address' => 'tp Hồ Chí Minh',
            ],
            [
                'publisher_name' => 'NXB Thế giới',
                'publishers_address' => 'tp Hồ Chí Minh',
            ],
            [
                'publisher_name' => 'Không có',
                'publishers_address' => 'tp Hồ Chí Minh',
            ]
        );
        DB::table('publishers')->insert($data);
    }
}
