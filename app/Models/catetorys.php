<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catetorys extends Model
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
                'field'=>'cate_name',
                'name'=>'Tên danh mục',
                'type'=>'text'
            ),  
        );
    }
}
