<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class commsController extends Controller
{
    public function index()
    {
        return view('commsAdmin.index');
    }
}
