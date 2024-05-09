<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{

    use HasFactory;
    protected $table = 'tbghe';
    protected $primaryKey = 'id_ghe';

    protected $fillable = [
        'sohang', 'soghe', 'id_phong',
    ];
    public $timestamps = false; // Tắt chức năng tự động cập nhật timestamp
    public function room()
    {
        return $this->belongsTo(Room::class, 'id_phong');
    }
}
