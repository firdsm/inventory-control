<?php

namespace inventory;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model {
	protected $table = 'suppliers';
    protected $fillable = ['name', 'address', 'email'];
}
