<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DSpillarManager extends Controller
{

    public function index()
    {
    return view('lmds.index');
    }


      //create new imprest
    public function createImprest(){
        return view('lmds.imprestds.create-new-imprest');
    }

    public function createNewProject(){
        return view('lmds.dsprojects.ds-create-new-project');
    }
}
