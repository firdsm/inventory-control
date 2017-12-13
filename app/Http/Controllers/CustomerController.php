<?php

namespace inventory\Http\Controllers;

use inventory\Customer;
use inventory\Http\Requests\CustomerRequest;

class CustomerController extends Controller {
    
    public function index()
    {
    	$customers = Customer::get();
    	
    	return view('customers.index', compact('customers'));
    }

    public function create()
    {
    	return view('customers.create');
    }

    public function store(CustomerRequest $request)
    {
        Customer::create($request->only([
            'name', 
            'address', 
            'email'
        ]));

        session()->flash('message', 'Customer data successfully added');

        return redirect('customer');
    }

    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    public function update(CustomerRequest $request, Customer $customer)
    {
        $customer->update($request->only([
            'name',
            'address',
            'email'
        ]));

        session()->flash('message', 'Customer data successfully updated');

        return redirect('customer');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        session()->flash('message', 'Supplier data successfully deleted');

        return redirect('customer');
    }
}
