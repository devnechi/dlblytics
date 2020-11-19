<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nuController extends Controller
{
    public function index()
    {
        return view('nuAdmin.index');
    }
}
