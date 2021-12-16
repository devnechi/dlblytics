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
use Monarobase\CountryList\CountryListFacade;

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
        $cuid = Auth::user()->user_id;
        $cpid = Auth::user()->pillar_id;



        //pillar manager get project created by them
        $myactivities = DB::table('pillar_activities')
                ->where('created_by', '=', $cuid)
                // ->where('pillar_ref_id', '=', $cpid)
                // ->where('review_status', '=', 'pending review')
                ->get();

        return view('lmds.dsactivities.ds-index-activity')->with('myact',$myactivities);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function createNewActivity($proj_id=null){
        $users=User::all();
        $countries=CountryListFacade::getlist('en');
        $regions=array(
            'Mjini Magharibi',
            'Dar es Salaam',
            'Kilimanjaro',
            'Unguja South',
            'Pemba South',
            'Unguja North',
            'Iringa',
            'Njombe',
            'Tanga',
            'Arusha',
            'Manyara',
            'Pemba North',
            'Ruvuma',
            'Morogoro',
            'Singida',
            'Mbeya',
            'Mara',
            'Pwani',
            'Geita',
            'Mwanza',
            'Kagera',
            'Kigoma',
            'Lindi',
            'Shinyanga',
            'Simiyu',
            'Mtwara',
            'Dodoma',
            'Katavi',
            'Rukwa',
            'Tabora'
        );
        $projs=PillarProject::all();
        return view('lmds.dsactivities.ds-create-new-activity')->with('projs',$projs)->with('users',$users)->with('countries',$countries)->with('regions',$regions)->with('proj_id',$proj_id);
    }
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
            'end_datei' => 'required',
            'pinvolved' => 'required',
            'act_objectives'=>'required',
            'country'=>'required',
            'venue'=>'required'
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
            'pinvolved'=>  $request->pinvolved,
            'act_objectives'=>$request->act_objectives,
            'country'=>$request->country,
            'region'=>$request->region,
            'venue'=>$request->venue,

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

        public function edit($id)
        {

        $users=User::all();
        $countries=CountryListFacade::getlist('en');
        $regions=array(
            'Mjini Magharibi',
            'Dar es Salaam',
            'Kilimanjaro',
            'Unguja South',
            'Pemba South',
            'Unguja North',
            'Iringa',
            'Njombe',
            'Tanga',
            'Arusha',
            'Manyara',
            'Pemba North',
            'Ruvuma',
            'Morogoro',
            'Singida',
            'Mbeya',
            'Mara',
            'Pwani',
            'Geita',
            'Mwanza',
            'Kagera',
            'Kigoma',
            'Lindi',
            'Shinyanga',
            'Simiyu',
            'Mtwara',
            'Dodoma',
            'Katavi',
            'Rukwa',
            'Tabora'
        );
        $activ=PillarActivities::find($id);
        $projs=PillarProject::all();
        return view('lmds.dsactivities.ds-edit-activity')->with('projs',$projs)->with('users',$users)
        ->with('countries',$countries)
        ->with('regions',$regions)
        ->with('activ',$activ);
        }



        public function update(Request $request)
        {

            $request->validate([
                'act_title' => 'required',
                'act_desc' => 'required',
                'total_act_cost' => 'required',
                'created_by' => 'required',
                'start_date'=> 'required',
                'end_date'=> 'required',
                'start_date' => 'required',
                'end_date' => 'required'
            ]);
            $activity = PillarActivities::find($request->id);
            $activity->act_title = $request->get('act_title');
            $activity->act_desc = $request->get('act_desc');
            $activity->total_act_cost = $request->get('total_act_cost');
            $activity->created_by = $request->get('created_by');
            $activity->project_ref_id=$request->project_ref_id;
            $activity->current_stage = $request->get('current_stage');
            $activity->start_date=  $request->start_date;
            $activity->pinvolved=  $request->pinvolved;
            $activity->act_objectives=$request->act_objectives;
            $activity->end_date=  $request->end_date;
            $activity->country=  $request->country;
            $activity->venue=  $request->venue;
            $activity->region=  $request->region;
               //get last activity id

           $activity_id=$activity->update();

           $request->session()->flash('alert-success', 'activity was successfully updated!. You can now manage it.');
           return redirect()->route('ds-pillar-manager')
               ->with(['success', 'activity was successfully added!. you can now manage it.'], ['tab', 'projects-nactivities-md-content']);




    }
    public function destroy($id)
    {
        PillarActivities::destroy($id);

        return redirect('imprest.index')->with('flash_message', 'Imprest deleted!');
    }
    public function show($id)
    {

                $myactivities=PillarActivities::findOrFail($id);
                return view('imprest.show')
                ->with('myactivities',$myactivities);

    }

}
