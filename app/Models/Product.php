<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
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
            // array(
            //     'field'=>'updated_at',
            //     'name'=>'Ngày cập nhật',
            //     'type'=>'text'
            // ),
            // array(
            //     'field'=>'creacted_at',
            //     'name'=>'Ngày tạo',
            //     'type'=>'text'
            // ),
        );
    }
}
