<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\User;
use DateTime;
use App\Pillar;
use App\Department;
use App\DManagerRoles;
use App\PillarProject;
use App\PillarActivities;
use App\projectObjective;
use App\projectOutcome;
use Auth;

class PillarActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function projid($id)
    {
        $proj = PillarProject::find($id);
        // return view('admin.pillarmanage.edit-pillar', compact('pillar'));
        return view('lmds.dsactivities.ds-create-project-activity',  compact('proj'));

    }

}
