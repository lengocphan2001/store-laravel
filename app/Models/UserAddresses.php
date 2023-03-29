<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddresses extends Model
{
    use HasFactory;

    protected $table='user_addresses';

    protected $fillable=[
        'user_id',
        'name',
        'phone',
        'address',
        'province_id',
        'district_id',
        'ward_id',
        'is_default',
    ];
}
