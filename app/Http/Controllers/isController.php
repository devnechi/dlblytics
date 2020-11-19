<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class isController extends Controller
{
    public function index()
    {
        return view('isAdmin.index');
    }
}
