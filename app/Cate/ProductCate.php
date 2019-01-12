<?php

namespace App\Cate;

use Illuminate\Database\Eloquent\Model;

class ProductCate extends Model
{
    protected $table = 'Product_Category';
    protected $fillable = [
        'name',
        'is_public',
        'alias',
        'description',
    ];
    protected $guarded = [
        'slug',
    ];
}
