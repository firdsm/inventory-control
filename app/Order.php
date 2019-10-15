<?php

namespace inventory;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use inventory\Product;

class Order extends Model {
	protected $table = 'orders';
	protected $fillable = [
		'customer_id',
		'product_id',
		'quantity',
		'order_date'
	];

	protected $dates = ['order_date'];

	public function product()
	{
		return $this->belongsTo(Product::class);
	}

	public function customer()
	{
		return $this->belongsTo(Customer::class);
	}

	public function setOrderDateAttribute($date)
	{
		$this->attributes['order_date']  = Carbon::parse($date);
	}

	public function addOrder($order)
	{
		$this->create($order);

		$product = Product::find($order['product_id']);

		$units_on_order = $product->units_on_order + $order['quantity'];

		$units_in_stock = $product->units_in_stock - $order['quantity'];

		$product->update([
			'units_in_stock' => $units_in_stock,
			'units_on_order' => $units_on_order
		]);
	}
}
