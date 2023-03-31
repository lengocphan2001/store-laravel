<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, Sluggable, SoftDeletes;

    public const STATUS_ACTIVE = 1;
    public const STATUS_INACTIVE = 0;

    protected $table = 'products';

    protected $fillable = [
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

    public function productVariations()
    {
        return $this->hasMany(ProductVariation::class);
    }
}
