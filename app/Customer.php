<?php

namespace inventory;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {
	protected $table = 'customers';
    protected $fillable = ['name', 'address', 'email'];
}
