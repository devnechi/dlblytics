<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\PillarProject;

use App\User;
use App\Pillar;
use App\Department;
use App\DManagerRoles;
use Auth;

class DSpillarManager extends Controller
{

    public function index()
    {
        $cuid = Auth::user()->user_id;
        $cpid = Auth::user()->pillar_id;

        //data to be passed when the data science dashboard is loaded
        // $pillarprojects = PillarProject::all();

        $pillarprojects = DB::table('pillar_projects')
        ->where('pillar_ref_id', '=', $cpid)
        ->get();

        //pillar manager get project created by them
        $myprojects = DB::table('pillar_projects')
                ->where('created_by', '=', $cuid)
                ->where('pillar_ref_id', '=', $cpid)
                ->where('review_status', '=', 'pending review')
                ->get();

         //my approved projects
         $myapprovedprojects = DB::table('pillar_projects')
                            ->where('created_by', '=', $cuid)
                            ->where('pillar_ref_id', '=', $cpid)
                            ->where('review_status', '=', 'approved')
                            ->get();

         //my denied projects
          $mydeniedprojects = DB::table('pillar_projects')
                            ->where('created_by', '=', $cuid)
                            ->where('pillar_ref_id', '=', $cpid)
                            ->where('review_status', '=', 'denied')
                            ->get();

            //activities
            // $myactivities


            //sub activities
            // $mysubactivities

        return view('lmds.index', compact('pillarprojects', 'myprojects', 'myapprovedprojects', 'mydeniedprojects'));
    }


      //create new imprest
    public function createImprest(){
        return view('lmds.imprestds.create-new-imprest');
    }

    public function createNewProject(){
        return view('lmds.dsprojects.ds-create-new-project');
    }

    public function createNewActivity(){
        return view('lmds.dsactivities.ds-create-new-activity');
    }

    public function createNewProjectActivity(){

        // $cprojid = Crypt::decrypt($id);
        return view('lmds.dsactivities.ds-create-project-activity');
    }
}
