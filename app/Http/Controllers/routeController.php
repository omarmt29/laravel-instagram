<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class routeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin');
    }
    public function user()
    {
        return view('user');
    }

}
