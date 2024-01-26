<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'license_type',
        'license',
        'style',
        'design_name',
        'style_description',
        'team',
        'sku',
        'short_upc',
        'upc',
        'setup_name',
        'is_depleting',
        'price',
        'freight',
        'description',
        'country',
    ];
}
