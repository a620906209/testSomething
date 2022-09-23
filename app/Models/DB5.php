<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DB5 extends Model
{
    use HasFactory;
    protected $connection = 'mysql_train5db';
    public $table = 'address_book_db';
    protected $fillable = [
        'id', 'user_name', 'birth','tel','postalCode','address'
    ];
}
