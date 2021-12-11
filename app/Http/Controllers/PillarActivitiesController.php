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
use App\DocProjectFile;
use App\Imprest;
use App\Imprest_activity;


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


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'act_title' => 'required',
            'act_desc' => 'required',
            'total_act_cost' => 'required',
            'created_by' => 'required',
            'start_date'=> 'required',
            'end_date'=> 'required',
            'purpose' => 'required',
            'start_datei' => 'required',
            'end_datei' => 'required'
        ]);
        $activity = new PillarActivities([
            'act_title' => $request->get('act_title'),
            'act_desc' => $request->get('act_desc'),
            'total_act_cost' => $request->get('total_act_cost'),
            'created_by' => $request->get('created_by'),
            'project_ref_id'=>$request->project_ref_id,
            'current_stage' => $request->get('current_stage'),
            'start_date'=>  $request->start_date,
            'end_date'=>  $request->end_date,
        ]);

        //get last activity id

       $activity_id=$activity->save();



       if($request->hasfile('imprest_doc')) {
           $fileName = time().'_'.$request->file('imprest_doc')->getClientOriginalName();
           $filePath = $request->file('imprest_doc')->storeAs('project_documents_uploads', $fileName);

       }
        $imprest = new Imprest([
            'requested_by' => $request->get('requested_by'),
            'imp_title'=>$request->imp_title,
            'ref_no'=>$request->ref_no,
            'pillar_activities_pillar_act_id'=>$activity_id,
            'purpose' => $request->purpose,
            'start_date' => $request->get('start_datei'),
            'end_date' => $request->get('end_datei'),
            'doc_path'=>$filePath,
            'amount_rqst' => $request->amount_rqst,

        ]);

        //get last imprest id
        $impid=$imprest->save();

         for($i=0; $i<count($request->imp_act_name);$i++)
        {
            $impact = new Imprest_activity([
                'imp_act_name' => $request->imp_act_name[$i],
                'imp_typ' => $request->imp_typ[$i],
                'qty'=>$request->qty[$i],
                'unit'=>$request->unit[$i],
                'number'=>$request->number[$i],
                'unit_price' => $request->unit_price[$i],
                'total_cost' => $request->total_cost[$i],
                'imprest_id' => $impid,
            ]);
            $impact->save();
        }



        $request->session()->flash('alert-success', 'Activity was successfully added!. You can now manage it.');
        return redirect()->route('ds-pillar-manager')
            ->with(['success', 'Activity was successfully added!. you can now manage it.'], ['tab', 'projects-nactivities-md-content']);

        //var_dump( $request->get('created_by'));
        }

    public function Activid($id)
    {
        $proj = PillarActivities::find($id);
        // return view('admin.pillarmanage.edit-pillar', compact('pillar'));
        return view('lmds.dsactivities.ds-create-project-activity',  compact('proj'));

    }

}
