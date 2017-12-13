<?php

namespace inventory;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Purchase extends Model {
    
    protected $fillable = [
    	'supplier_id',
    	'product_id',
    	'quantity',
    	'purchase_date'
    ];

    protected $dates = ['purchase_date'];

    public function product()
    {
    	return $this->belongsTo(Product::class);
    }

    public function supplier()
    {
    	return $this->belongsTo(Supplier::class);
    }

    public function setPurchaseDateAttribute($date)
	{
		$this->attributes['purchase_date']  = Carbon::parse($date);
	}

    public function addPurchase($purchase)
	{
		$this->create($purchase);

		$product = Product::find($purchase['product_id']);

		$units_received = $product->units_received + $purchase['quantity'];

		$units_in_stock = $product->units_in_stock + $purchase['quantity'];
		
		$product->update([
			'units_in_stock' => $units_in_stock,
			'units_received' => $units_received
		]);
	}
}
