<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $table = 'tbve';
    protected $primaryKey = 'id_ve';
    public $timestamps = false; // Tắt chức năng tự động cập nhật timestamp

    protected $fillable = [
        'id_lichchieu', 'id_user', 'id_ghe', 'id_combo',
    ];
}
