<?php

namespace stock;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public $timestamps = false;

    protected $fillable = [ 'name', 'description', 'value', 'quantity' ];

    protected $guarded = [ 'id' ];
}
