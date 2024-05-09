<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theater extends Model
{
    use HasFactory;
    protected $table = 'tbrap';

    protected $primaryKey = 'id_rap';

    public $timestamps = false; // Tắt chức năng tự động cập nhật timestamp
    protected $fillable = [
        'id_rap', 'tenrap',
    ];
}
