<?php

namespace inventory;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {
	
    protected $fillable = ['name', 'address', 'email'];
}
