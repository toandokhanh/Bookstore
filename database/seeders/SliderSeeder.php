<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
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
                'slider_name' => 'banner1',
                'slider_image' => '/storage/banner1.jpg'
            ],
            [
                'slider_name' => 'banner2',
                'slider_image' => '/storage/banner2.jpg'
            ],
            [
                'slider_name' => 'banner4',
                'slider_image' => 'https://bookbuy.vn/Res/Images/Album/08b04a48-6845-4e41-8079-50427a0e2f02.jpg?w=880&scale=both&h=320&mode=crop'
            ],
            [
                'slider_name' => 'banner5',
                'slider_image' => 'https://cdn0.fahasa.com/media/magentothem/banner7/VPP_Main_banner_T10_840x320.jpg'
            ]
        );
        DB::table('sliders')->insert($data);
    }
}
