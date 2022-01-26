<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\PillarActivities;
use App\PillarSubActivities;
use App\Imprest;
use App\Imprest_activity;
use Monarobase\CountryList\CountryListFacade;

use Auth;
class PillarSubActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function index()
    {
        $cuid = Auth::user()->user_id;
        $cpid = Auth::user()->pillar_id;



        //pillar manager get project created by them
        $mysubactivities = DB::table('pillar_subactivities')
                ->where('created_by', '=', $cuid)
                ->get();


        return view('lmds.dsactivities.ds-index-subactivity')->with('mysubactivities',$mysubactivities);

    }
    public function create($act_id=0){
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
        $acts=PillarActivities::all();
        return view('lmds.dsactivities.ds-create-new-subactivity')->with('acts',$acts)->with('users',$users)->with('countries',$countries)->with('regions',$regions)->with('act_id',$act_id);
    }
    public function store(Request $request)
    {

        $request->validate([
            'subact_title'=> 'required',
            'review_status'=> 'required',
            'current_stage'=> 'required',
            'created_by'=> 'required',
            'subact_desc'=> 'required',
            'total_subactivity_cost'=> 'required',
            'start_date'=> 'required',
            'subact_objectives'=> 'required',
            'pinvolved'=> 'required',
            'end_date'=> 'required',
            'country'=> 'required',
            'venue'=> 'required',
            'pillar_ref_id'=>'required'

        ]);
        $activity = new PillarSubActivities([

            'subact_title'=> $request->get('subact_title'),
            'review_status'=> $request->get('review_status'),
            'current_stage'=> $request->get('current_stage'),
            'created_by'=> $request->get('created_by'),
            'activity_ref_id'=> $request->get('activity_ref_id'),
            'subact_desc'=> $request->get('subact_desc'),
            'total_subactivity_cost'=> $request->get('total_subactivity_cost'),
            'subact_objectives'=> $request->get('subact_objectives'),
            'pinvolved'=> $request->get('pinvolved'),
            'start_date'=> $request->get('start_date'),
            'end_date'=> $request->get('end_date'),
            'country'=> $request->get('country'),
            'region'=> $request->get('region'),
            'venue'=> $request->get('venue'),
            'pillar_ref_id'=>$request->get('pillar_ref_id'),
        ]);


        $request->session()->flash('alert-success', 'SubActivity was successfully added!. You can now manage it.');
        return redirect()->route('pillar-subactivity.index')
            ->with(['success', 'SubActivity was successfully added!. you can now manage it.'], ['tab', 'projects-nactivities-md-content']);


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
        $subactiv=PillarSubActivities::find($id);
        $acts=PillarActivities::all();
        return view('lmds.dsactivities.ds-edit-subactivity')->with('acts',$acts)->with('users',$users)
        ->with('countries',$countries)
        ->with('regions',$regions)
        ->with('subactiv',$subactiv);
        }



        public function update(Request $request)
        {

            $request->validate([
                'subact_title'=> 'required',
                'review_status'=> 'required',
                'current_stage'=> 'required',
                'created_by'=> 'required',
                'subact_desc'=> 'required',
                'total_subactivity_cost'=> 'required',
                'start_date'=> 'required',
                'subact_objectives'=> 'required',
                'pinvolved'=> 'required',
                'end_date'=> 'required',
                'country'=> 'required',
                'venue'=> 'required'
            ]);
            $subactivity = PillarSubActivities::find($request->subactid);
            $subactivity->subact_title= $request->get('subact_title');
            $subactivity->review_status= $request->get('review_status');
            $subactivity->current_stage= $request->get('current_stage');
            $subactivity->created_by= $request->get('created_by');
            $subactivity->activity_ref_id= $request->get('activity_ref_id');
            $subactivity->subact_desc= $request->get('subact_desc');
            $subactivity->total_subactivity_cost= $request->get('total_subactivity_cost');
            $subactivity->subact_objectives= $request->get('subact_objectives');
            $subactivity->pinvolved= $request->get('pinvolved');
            $subactivity->start_date= $request->get('start_date');
            $subactivity->end_date= $request->get('end_date');
            $subactivity->country=$request->get('country');
            $subactivity->region= $request->get('region');
            $subactivity->venue= $request->get('venue');
               //get last activity id

           $subactivity->update();

           $request->session()->flash('alert-success', 'subactivity was successfully updated!. You can now manage it.');
           return redirect()->route('ds-pillar-manager')
               ->with(['success', 'subactivity was successfully added!. you can now manage it.'], ['tab', 'projects-nactivities-md-content']);
    }
    public function show($id)
    {

                $activt=PillarSubActivities::findOrFail($id);
                return view('lmds.dsactivities.ds-show-subactivity')
                ->with('activt',$activt);

    }

}
