<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_phim';

    protected $table = 'tbphim';

    protected $fillable = [
        'atenphim', 'hinhanh', 'nsx', 'theloai', 'quocgia', 'daodien', 'dienvien', 'thoiluong',
        'ngaykhoichieu', 'trailer', 'noidung', 'giave',
    ];


}
