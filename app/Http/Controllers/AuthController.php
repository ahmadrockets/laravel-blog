<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('register');
    }
    public function submitformregister(Request $request)
    {
        $data['first_name'] = $request->input('first_name');
        $data['last_name']  = $request->input('last_name');
        return view('welcome', ['data'=>$data]);
    }
}
