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
use App\DocProjectFile;
use Auth;

class PillarProjectController extends Controller
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
            'project_title' => 'required',
            'project_desc' => 'required',
            'total_project_cost' => 'required',
            'created_by' => 'required',
            'pillar_ref_id' => 'required',

        ]);

        $project = new PillarProject([
            'project_title' => $request->get('project_title'),
            'created_by' => $request->get('created_by'),
            'pillar_ref_id'=>$request->get('pillar_ref_id'),
            'project_desc' => $request->get('project_desc'),
            'total_project_cost' => $request->get('total_project_cost'),
            'current_stage' => $request->get('current_stage')
        ]);

        // 'project_objectives' => $request->get('project_objectives'),
        // 'project_expected_outcomes' => $request->get('project_expected_outcomes'),
         $project->save();
        //get last project id

         $project->project_id;
         $proj_ref_id = $project->project_id;
         $project_objectives = [];
         $project_expected_outcomes = [];
         $project_kpi_ref_id = [];



         foreach($request->input('project_objectives') as $key => $value) {
             $project_objectives["project_objectives.{$key}"] = 'required';
         }

         foreach($request->input('project_expected_outcomes') as $key => $value) {
             $project_expected_outcomes["project_expected_outcomes.{$key}"] = 'required';
         }

         foreach($request->project_kpi_ref_id as $key => $value) {
            $project_kpi_ref_id["project_kpi_ref_id.{$key}"] = 'required';
        }

         //pillar full document url


        // store the projObj
        foreach($request->input('project_objectives') as $key => $value) {
            $projobj = new projectObjective([
                'project_id' => $proj_ref_id,
                'objective_content' => $value
            ]);
            $projobj->save();
        }

        // store the proOutcomes
        foreach($request->input('project_expected_outcomes') as $key => $value) {
            $projoutcome = new projectOutcome([
                'project_id' => $proj_ref_id,
                'outcome_content' => $value
            ]);
            $projoutcome->save();
        }

        // store the project kpi reference
        foreach($request->project_kpi_ref_id as $key => $value) {
            $projrefkpi = new projectkpiReferences([
                'project_id' => $proj_ref_id,
                'ref_kpi_id' => $value
            ]);
            $projrefkpi->save();
        }

         //store project doc file
         $fileModel = new DocProjectFile;
         if($request->file()) {
             $fileName = time().'_'.$request->project_file_title->getClientOriginalName();
             $filePath = $request->file('project_file_title')->storeAs('project_documents_uploads', $fileName, 'private');

             $fileModel->proj_ref_id;
             $fileModel->project_file_title = time().'_'.$request->file->getClientOriginalName();
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
}
