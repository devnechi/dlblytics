<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PillarProject;

class dsController extends Controller
{
    public function index()
    {
        //data to be passed when the data science dashboard is loaded
        $pillarprojects = PillarProject::all();

        return view('dsAdmin.index', compact('pillarprojects'));
    }

    public function createNewProject(){
        return view('lmds.dsprojects.ds-create-new-project');
    }
}
