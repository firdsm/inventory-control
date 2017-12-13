<?php

namespace inventory\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
    	return view('login');
    }

    public function login()
    {
    	$this->validate(request(),[
    		'email' => 'required|email',
    		'password' => 'required'
    	]);

    	if ( ! auth()->attempt(request(['username', 'password']))) {

    		session()->flash('message-error', 'Your credential not match our record');

    		return back();
    	}

    	return redirect('stock');
    }

    public function logout()
    {
        auth()->logout();

        return redirect ('/');
    }
}
