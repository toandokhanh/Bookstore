<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slider extends Model
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
                'field'=>'slider_name',
                'name'=>'Tên thanh trượt',
                'type'=>'text'
            ),  
            array(
                'field'=>'slider_image',
                'name'=>'Hình ảnh',
                'type'=>'image'
            ),
        );
    }
}
