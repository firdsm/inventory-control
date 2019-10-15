<?php

namespace inventory;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
	protected $table = 'products';
    protected $fillable = [
    	'name', 
    	'units_in_stock', 
    	'units_on_order',
    	'units_received', 
    	'minimum_required',
    	'price'
    ];
}
