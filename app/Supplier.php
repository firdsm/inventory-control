<?php

namespace inventory;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model {
	
    protected $fillable = ['name', 'address', 'email'];
}
