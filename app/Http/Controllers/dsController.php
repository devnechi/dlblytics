<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dsController extends Controller
{
    public function index()
    {
        return view('dsAdmin.index');
    }

    public function createNewProject(){
        return view('lmds.dsprojects.ds-create-new-project');
    }
}
