<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use SoftDeletes;
    use HasFactory;
    use SearchableTrait;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'sku',
        'slug',
        'description',
        'picture',
        'saveur',
        'status'
    ];
    protected $searchable = [

        'columns' => [
            'products.name' => 3,
            'products.sku' => 2,

        ]
    ];

}
