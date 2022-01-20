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
use App\projectObjective;
use App\projectOutcome;
use App\projectkpiReferences;
use Illuminate\Support\Facades\Storage;
use App\DocProjectFile;
use Auth;
use App\Facilitator;
use App\PillarActivities;

class PillarProjectController extends Controller
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
        $myprojects = PillarProject::where('created_by', '=', $cuid)
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

        return view('lmds.dsprojects.ds-index-project')->with('myprojects',$myprojects)->with('myapprovedprojects',$myapprovedprojects)->with('mydeniedprojects',$mydeniedprojects);

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
            'project_title' => 'required',
            'project_desc' => 'required',
            'total_project_cost' => 'required',
            'created_by' => 'required',
            'pillar_ref_id' => 'required',
            'start_date'=> 'required',
            'end_date'=> 'required',
            'project_tech'=> 'required',
            'project_busi'=> 'required'

        ]);

        $project = new PillarProject([
            'project_title' => $request->get('project_title'),
            'created_by' => $request->get('created_by'),
            'pillar_ref_id'=>$request->pillar_ref_id,
            'project_desc' => $request->get('project_desc'),
            'review_status' => $request->review_status,
            'total_project_cost' => $request->get('total_project_cost'),
            'current_stage' => $request->get('current_stage'),
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'lead' => $request->lead,
            'project_funders' => $request->pfunder,
            'project_partiners' => $request->ppartiner


        ]);

        // 'project_objectives' => $request->get('project_objectives'),
        // 'project_expected_outcomes' => $request->get('project_expected_outcomes'),
         $project->save();
        //get last project id

         $project->project_id;
         $proj_ref_id = $project->project_id;
         $project_objectives = [];

         foreach($request->input('project_objectives') as $key => $value) {
             $project_objectives["project_objectives.{$key}"] = 'required';
         }

        // store the projObj
        foreach($request->input('project_objectives') as $key => $value) {
            $projobj = new projectObjective([
                'project_id' => $proj_ref_id,
                'objective_content' => $value
            ]);
            $projobj->save();
        }

         //store project doc file
         $fileModel = new DocProjectFile;
         $fileModel1 = new DocProjectFile;

         if($request->hasfile('project_tech')) {
             $fileName1 = time().'_'.$request->file('project_tech')->getClientOriginalName();
             $filePath1 = $request->file('project_tech')->storeAs('project_documents_uploads', $fileName1);
             $fileModel1->file_type="projecttech";
             $fileModel1->project_id=$project->project_id;
             $fileModel1->project_file_title = time().'_'.$request->file('project_tech')->getClientOriginalName();
             $fileModel1->file_path = '/storage/' . $filePath1;
             $fileModel1->save();

         }
         if($request->hasfile('project_busi')) {
            $fileName = time().'_'.$request->file('project_busi')->getClientOriginalName();
            $filePath = $request->file('project_busi')->storeAs('project_documents_uploads', $fileName);
            $fileModel->file_type="projectbusi";
            $fileModel->project_id=$project->project_id;
            $fileModel->project_file_title = time().'_'.$request->file('project_busi')->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->save();
        }

        $request->session()->flash('alert-success', 'project was successfully added!. You can now manage it.');
        return redirect()->route('ds-pillar-manager')
            ->with(['success', 'project was successfully added!. you can now manage it.'], ['tab', 'projects-nactivities-md-content']);

        //var_dump( $request->get('created_by'));
        }
        public function createNewProject(){

            $facil=Facilitator::all();
            $lead=PillarActivities::all();

            return view('lmds.dsprojects.ds-create-new-project')->with('facil',$facil)
            ->with('lead',$lead);
        }

        public function edit($id)
        {
            $facil=Facilitator::all();
            $lead=PillarActivities::all();
            $model=PillarProject::find($id);

            return view('lmds.dsprojects.ds-edit-project')->with('facil',$facil)
            ->with('lead',$lead)->with('model',$model);
        }
        public function update(Request $request)
        {

            $request->validate([
                'project_title' => 'required',
                'project_desc' => 'required',
                'total_project_cost' => 'required',
                'created_by' => 'required',
                'pillar_ref_id' => 'required',
                'start_date'=> 'required',
                'end_date'=> 'required'

            ]);
            $proj=PillarProject::find($request->pjid);

           $proj->project_title = $request->get('project_title');
           $proj->created_by= $request->get('created_by');
           $proj->pillar_ref_id=$request->pillar_ref_id;
           $proj->project_desc = $request->get('project_desc');
           $proj->review_status = $request->review_status;
           $proj->total_project_cost = $request->get('total_project_cost');
           $proj->current_stage = $request->get('current_stage');
           $proj->start_date = $request->start_date;
           $proj->end_date = $request->end_date;
           $proj->lead = $request->lead;
           $proj->project_funders = $request->pfunder;
           $proj->project_partiners = $request->ppartiner;





            // 'project_objectives' => $request->get('project_objectives'),
            // 'project_expected_outcomes' => $request->get('project_expected_outcomes'),
             $proj->update();
            //get last project id


             $proj_ref_id = $proj->project_id;
             $project_objectives = [];




             foreach($request->input('project_objectives') as $key => $value) {
                 $project_objectives["project_objectives.{$key}"] = 'required';
             }

            // store the projObj
            foreach($request->input('project_objectives') as $key => $value) {
                $projobj = new projectObjective([
                    'project_id' => $proj_ref_id,
                    'objective_content' => $value
                ]);
                $projobj->save();
            }



             //store project doc file
             $fileModel = new DocProjectFile;

             if($request->hasfile('project_tech')) {
                 $fileName = time().'_'.$request->file('project_tech')->getClientOriginalName();
                 $filePath = $request->file('project_tech')->storeAs('project_documents_uploads', $fileName);
                 $fileModel->file_type="projecttech";
                 $fileModel->project_id=$proj->project_id;
                 $fileModel->project_file_title = time().'_'.$request->file('project_tech')->getClientOriginalName();
                 $fileModel->file_path = '/storage/' . $filePath;
                 $fileModel->save();
             }
             if($request->hasfile('project_busi')) {
                $fileName = time().'_'.$request->file('project_busi')->getClientOriginalName();
                $filePath = $request->file('project_busi')->storeAs('project_documents_uploads', $fileName);
                $fileModel->file_type="projectbusi";
                $fileModel->project_id=$proj->project_id;
                $fileModel->project_file_title = time().'_'.$request->file('project_busi')->getClientOriginalName();
                $fileModel->file_path = '/storage/' . $filePath;
                $fileModel->save();
            }

            $request->session()->flash('alert-success', 'project was successfully added!. You can now manage it.');
            return redirect()->route('ds-pillar-manager')
                ->with(['success', 'project was successfully added!. you can now manage it.'], ['tab', 'projects-nactivities-md-content']);

            //var_dump( $request->get('created_by'));
            }
    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
                $project = PillarProject::find($id);

        //return view('pillar-project.show', compact('pillarprojects'));
            return view('lmds.dsprojects.ds-view-project-full-details', compact('project'));

    }
    public function getPdf($pdf)
    {


        $path = storage_path('app\project_documents_uploads' . '/' . $pdf);
      // header
     $header = [
       'Content-Type' => 'application/pdf',
       'Content-Disposition' => 'inline; filename="' . $pdf . '"'
     ];

        return response()->file($path, $header);
    }
}
