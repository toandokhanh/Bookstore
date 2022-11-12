<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CatetorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['cate_name' => 'Công nghệ'],
            ['cate_name' => 'Kinh Tế'],
            ['cate_name' => 'Văn học'],
            ['cate_name' => 'Lịch sữ'],
            ['cate_name' => 'Tâm lý & Kỹ năng sống'],
            ['cate_name' => 'Marketing - Bán hàng'],
            ['cate_name' => 'Tiểu sử hồi ký'],
            ['cate_name' => 'Thiếu nhi'],
            ['cate_name' => 'Sách học ngoại ngữ'],
            ['cate_name' => 'Nuôi dạy con'],
            ['cate_name' => 'Sách giáo khoa'],
            ['cate_name' => 'Chính trị'],
            ['cate_name' => 'Nghệ thuật'],
            ['cate_name' => 'Đồ chơi trẻ em 3+'],
            ['cate_name' => 'Máy tính bỏ túi'],
            ['cate_name' => 'Bách hóa online - Lưu niệm'],
            ['cate_name' => 'Văn phòng phẩm'],
        );
        DB::table('catetorys')->insert($data);
    }
}
