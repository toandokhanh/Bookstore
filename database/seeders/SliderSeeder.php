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
                'slider_name' => 'banner4',
                'slider_image' => 'https://cdn0.fahasa.com/media/magentothem/banner7/VPP_Main_banner_T10_840x320.jpg'
            ],
            [
                'slider_name' => 'banner2',
                'slider_image' => 'https://cdn0.fahasa.com/media/magentothem/banner7/FAHASA-ONT11_840x320.jpg'
            ],
            
            [
                'slider_name' => 'banner3',
                'slider_image' => 'https://cdn0.fahasa.com/media/magentothem/banner7/ThienLong11_840x320.jpg'
            ],
            [
                'slider_name' => 'banner1',
                'slider_image' => 'https://theme.hstatic.net/200000343865/1000938429/14/ms_banner_img2.jpg?v=86'
            ],
        );
        DB::table('sliders')->insert($data);
    }
}
