<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $table = 'tbcombo';
    protected $primaryKey = 'id_combo';

    protected $fillable = [
        'tencombo', 'chitiet', 'gia',
    ];
    public $timestamps = false; // Tắt chức năng tự động cập nhật timestamp

}
