<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    protected $table='sizes';

    protected $fillable=[
        'name',
    ];

    public function orderDetails()
    {
        return $this->belongsToMany(OrderDetail::class);
    }

    public function productVariations()
    {
        return $this->hasMany(ProductVariation::class);
    }
}
