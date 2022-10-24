<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class User extends Authenticatable
{
    protected $table = 'accounts';
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'cart_id',
        'use_name',
        'address',
        'phone',
        // 'name',
        'email',
        'password',
        'gender',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function listingConfig(){
        return array(
            array(
                'field'=>'id',
                'name'=>'ID',
                'type'=>'text'
            ),
            
            array(
                'field'=>'use_name',
                'name'=>'Tên Người dùng',
                'type'=>'text'
            ),  
            array(
                'field'=>'phone',
                'name'=>'Số điện thoại',
                'type'=>'text'
            ), 
            array(
                'field'=>'address',
                'name'=>'Địa chỉ',
                'type'=>'text'
            ), 
            array(
                'field'=>'email',
                'name'=>'Email',
                'type'=>'text'
            ),
            array(
                'field'=>'role',
                'name'=>'Phân quyền',
                'type'=>'role'
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
