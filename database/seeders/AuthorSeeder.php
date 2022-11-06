<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
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
                'author_name' => 'Don M Green',
                'year_of_birth' => '1971',
                'nationality' => 'Mỹ',
            ],
            [
                'author_name' => 'Brad Stone',
                'year_of_birth' => '1971',
                'nationality' => 'Mỹ',
            ],
            [
                'author_name' => 'Lê Huy Khoa',
                'year_of_birth' => '1971',
                'nationality' => 'Việt Nam',
            ],
            [
                'author_name' => 'Jeffrey Archer',
                'year_of_birth' => '1971',
                'nationality' => 'Mỹ',
            ],
            [
                'author_name' => 'Paulo Coelho',
                'year_of_birth' => '1971',
                'nationality' => 'Brazil',
            ],
            [
                'author_name' => 'Mario Puzo',
                'year_of_birth' => '1971',
                'nationality' => 'Mỹ',
            ],
            [
                'author_name' => 'Erika Takeuchi',
                'year_of_birth' => '1971',
                'nationality' => 'Nhật Bản',
            ],
            [
                'author_name' => 'Hae Min',
                'year_of_birth' => '1971',
                'nationality' => 'Hàn Quốc',
            ],
            [
                'author_name' => 'Robin Sharma',
                'year_of_birth' => '1971',
                'nationality' => 'Canada',
            ],
            [
                'author_name' => 'Nguyễn Nhật Ánh',
                'year_of_birth' => '1971',
                'nationality' => 'Việt Nam',
            ],
            [
                'author_name' => 'Sunil Gupta',
                'year_of_birth' => '1971',
                'nationality' => 'Ấn Độ',
            ],
            [
                'author_name' => 'Antoine De Saint-Exupéry',
                'year_of_birth' => '1971',
                'nationality' => 'Pháp',
            ],
            [
                'author_name' => 'Luis Sepúlveda',
                'year_of_birth' => '1971',
                'nationality' => 'Pháp',
            ],
            [
                'author_name' => 'Paul Kalanithi',
                'year_of_birth' => '1971',
                'nationality' => 'Mỹ',
            ],
            [
                'author_name' => 'Trang Anh',
                'year_of_birth' => '1971',
                'nationality' => 'Việt Nam',
            ],
            [
                'author_name' => 'Hubert Seipel',
                'year_of_birth' => '1971',
                'nationality' => 'Đức',
            ],
            [
                'author_name' => 'Cao Minh',
                'year_of_birth' => '1971',
                'nationality' => 'Trung Quốc',
            ],
            [
                'author_name' => 'Vũ Trọng Phụng',
                'year_of_birth' => '1971',
                'nationality' => 'Việt Nam',
            ],
            [
                'author_name' => 'Seipel ari',
                'year_of_birth' => '1971',
                'nationality' => 'Nhật Bản',
            ],
            [
                'author_name' => 'Phạm Huy Hoàng',
                'year_of_birth' => '1971',
                'nationality' => 'Việt Nam',
            ],
            [
                'author_name' => 'Sven Carlsson',
                'year_of_birth' => '1971',
                'nationality' => 'Mỹ',
            ],
            [
                'author_name' => 'DK',
                'year_of_birth' => '1971',
                'nationality' => 'Mỹ',
            ],
            [
                'author_name' => 'Bộ Giáo Dục Và Đào Tạo',
                'year_of_birth' => '1971',
                'nationality' => 'Việt Nam',
            ],
            [
                'author_name' => 'Maynard Solomon',
                'year_of_birth' => '1971',
                'nationality' => 'Pháp',
            ],
            [
                'author_name' => 'Không có',
                'year_of_birth' => '2022',
                'nationality' => 'Không',
            ],



        );
        DB::table('authors')->insert($data);
    }
}
