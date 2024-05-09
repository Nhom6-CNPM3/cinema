<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $table = 'tblichchieu';
    protected $primaryKey = 'id_lichchieu';

    protected $fillable = [
        'id_phim', 'id_rap', 'id_phong', 'ngay', 'gio',
    ];
    public $timestamps = false; // Tắt chức năng tự động cập nhật timestamp

}
