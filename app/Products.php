<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Products extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'products';
    protected $fillable = [
        'name', 'url', 'category_id', 'img', 'price', 'compare_price', 'title', 'description',  'keywords', 'text'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
