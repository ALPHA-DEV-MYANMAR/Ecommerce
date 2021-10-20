<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buying extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_name',
        'p_name',
        'p_price',
        'p_img',
        'p_count',
    ];

}
