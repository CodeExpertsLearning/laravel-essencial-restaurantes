<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
	    $users = User::all();

	    return $users;
    }

    public function show($id, Request $request)
    {
	   $users = User::findOrFail($id);

	    return response('Hello World', 200)
		           ->withHeaders(['Content-Type' => 'text/plain']);
		    ;
    }
}
















