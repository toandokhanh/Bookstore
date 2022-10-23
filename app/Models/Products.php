<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    public function listingConfig(){
        return array(
            array(
                'field'=>'id',
                'name'=>'ID',
                'type'=>'text'
            ),
            array(
                'field'=>'product_name',
                'name'=>'Tên sản phẩm',
                'type'=>'text'
            ),  
            array(
                'field'=>'product_price',
                'name'=>'Giá',
                'type'=>'number'
            ),
            array(
                'field'=>'image',
                'name'=>'Hình ảnh',
                'type'=>'image'
            ),
            array(
                'field'=>'year_of_manufacture',
                'name'=>'Năm xuất bản',
                'type'=>'text'
            ),
            // array(
            //     'field'=>'creacted_at',
            //     'name'=>'Ngày tạo',
            //     'type'=>'text'
            // ),
        );
    }
}
