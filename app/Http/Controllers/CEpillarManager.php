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

class CEpillarManager extends Controller
{

    public function index()
    {
    return view('lmce.index');
    }



    public function insertNewProject(){
        return view('lmce.ceprojects.ce-create-new-project');
    }

    public function managePillarProjects(){
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

        return view('lmce.ceprojects.ce-pillar-projects-management', compact('pillarprojects', 'myprojects', 'myapprovedprojects', 'mydeniedprojects'));
    }


    //activitity functionality
    public function createSoloNewActivity(){
        return view('lmce.ceactivities.ce-create-new-activity');
    }



    public function createNewProjectActivity(){
        return view('lmce.ceactivities.ce-create-new-activity');
    }

    public function managePillarActivities(){
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


        return view('lmce.ceactivities.ce-pillar-activity-management', compact('pillarprojects', 'myprojects', 'myapprovedprojects', 'mydeniedprojects'));

    }




    //sub activity functionality
    public function createSubNewActivity(){
        return view('lmce.cesubactivities.ce-create-new-sub-activity');
    }


    public function manageSubActivities(){
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


        return view('lmce.cesubactivities.ce-pillar-sub-activities-management', compact('pillarprojects', 'myprojects', 'myapprovedprojects', 'mydeniedprojects'));

    }
}
