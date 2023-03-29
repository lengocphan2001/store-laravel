<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Product extends Model
{
    use HasFactory;
    use Sluggable;
    protected $table='products';
    protected $fillable=[
        'category_id',
        'supplier_id',
        'image',
        'name',
        'slug',
        'description',
        'content',
        'price',
        'status',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
