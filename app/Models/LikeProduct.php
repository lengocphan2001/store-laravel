<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LikeProduct extends Model
{
    use HasFactory, SoftDeletes;

    protected $table='like_products';

    protected $fillable=[
        'user_id',
        'product_variation_id',
    ];
}
