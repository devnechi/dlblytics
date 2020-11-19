<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class donorController extends Controller
{
    public function index()
    {
        return view('donorAdmin.index');
    }
}
