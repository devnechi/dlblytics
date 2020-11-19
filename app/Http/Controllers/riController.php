<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class riController extends Controller
{

    public function index()
    {
        return view('riAdmin.index');
    }
}
