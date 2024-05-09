<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $table = 'tbphong';
    protected $primaryKey = 'id_phong';

    protected $fillable = [
        'tenphong', 'id_rap',
    ];
    public $timestamps = false; // Tắt chức năng tự động cập nhật timestamp

}
