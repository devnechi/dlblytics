<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ceController extends Controller
{
    public function index()
    {
        return view('ceAdmin.index');
    }
}
