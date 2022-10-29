<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
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
                'field'=>'author_name',
                'name'=>'Tên tác giả',
                'type'=>'text'
            ),  
            array(
                'field'=>'year_of_birth',
                'name'=>'Năm sinh',
                'type'=>'text'
            ),  
            array(
                'field'=>'nationality',
                'name'=>'Quốc tịch',
                'type'=>'text'
            ),     
            array(
                'field'=>'table',
                'name'=>'Author',
                'type'=>'text'
            ),   
        );
    }
}
// 
// 
// 