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
use App\PillarSubActivities;
use App\projectObjective;
use App\projectOutcome;
use App\DocProjectFile;

use Auth;

class PillarSubActivitiesController extends Controller
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


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
       $validated=$request->validate([                 
           'subact_title'=> 'required',
            'review_status'=> 'required',
            'current_stage'=> 'required',
            'created_by'=> 'required',
            'activity_ref_id'=> 'required',
            'subact_desc'=> 'required',
            'subact_objectives'=> 'required',
            'total_subactivity_cost'=> 'required',
            'start_date'=> 'required',
            'end_date'=> 'required',
            'pinvolved'=> 'required',
            'country'=> 'required',
            'region'=> 'required',
            'venue'=> 'required',
        ]);
    
        $activity = new PillarSubActivities();   
        $ractivity=$activity->create($validated);
    



        //  $fileModel = new DocProjectFile;

        //  if($request->hasfile('activity_doc')) {
        //      $fileName = time().'_'.$request->file('activity_doc')->getClientOriginalName();
        //      $filePath = $request->file('activity_doc')->storeAs('activity_documents_uploads', $fileName, 'public');
        //      $fileModel->file_type="activitydoc";
        //      $fileModel->project_id=$activity->project_ref_id;
        //      $fileModel->project_file_title = time().'_'.$request->file('activity_doc')->getClientOriginalName();
        //      $fileModel->file_path = '/storage/' . $filePath;
        //      $fileModel->save();
        //  }

        $request->session()->flash('alert-success', 'Subactivity was successfully added!. You can now manage it.');
        return redirect()->route('ds-pillar-manager')
            ->with(['success', 'Subactivity was successfully added!. you can now manage it.'], ['tab', 'projects-nactivities-md-content']);

        //var_dump( $request->get('created_by'));
        }

    public function Activid($id)
    {
        $proj = PillarActivities::find($id);
        // return view('admin.pillarmanage.edit-pillar', compact('pillar'));
        return view('lmds.dsactivities.ds-create-project-activity',  compact('proj'));

    }

}
