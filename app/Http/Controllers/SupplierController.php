<?php

namespace inventory\Http\Controllers;

use inventory\Supplier;
use inventory\Http\Requests\SupplierRequest;

class SupplierController extends Controller {
    
    public function index()
    {
    	$suppliers = Supplier::get();

    	return view('suppliers.index', compact('suppliers'));
    }

    public function create()
    {
    	return view('suppliers.create');
    }

    public function store(SupplierRequest $request)
    {
    	Supplier::create($request->only([
            'name', 
            'address', 
            'email'
        ]));

        session()->flash('message', 'Supplier data successfully added');

    	return redirect('supplier');
    }

    public function edit(Supplier $supplier)
    {
        return view('suppliers.edit', compact('supplier'));
    }

    public function update(SupplierRequest $request, Supplier $supplier)
    {
        $supplier->update($request->only([
            'name',
            'address',
            'email'
        ]));

        session()->flash('message', 'Supplier data successfully updated');

        return redirect('supplier');
    }

    public function destroy(Supplier $supplier)
    {
        $supplier->delete();

        session()->flash('message', 'Supplier data successfully deleted');

        return redirect('supplier');
    }
}
