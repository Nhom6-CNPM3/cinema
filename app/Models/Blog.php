<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'tbtintuc';

    protected $primaryKey = 'id_tintuc';

    public $timestamps = false;

    protected $fillable = [
        'tieude',
        'noidung',
        'hinhanh'
    ];
}
