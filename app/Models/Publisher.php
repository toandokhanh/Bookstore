<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
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
                'field'=>'publisher_name',
                'name'=>'Tên NXB',
                'type'=>'text'
            ),  
            array(
                'field'=>'publishers_address',
                'name'=>'Địa chỉ',
                'type'=>'text'
            ),      
        );
    }
}
