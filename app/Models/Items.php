<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;
    protected $table = 'item';
    //取全部欄位
    // protected $guarded=[];

    //只有某一欄位不能更改
    // protected $guarded=['item_price'];

    //取部分欄位
    protected $fillable = [
        'item_id', 'item_name', 'item_price',
    ];
    //如果同时存在，fillable 优先级较高
}
