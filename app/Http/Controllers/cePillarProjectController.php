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


class cePillarProjectController extends Controller
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

        $validatedData = $request->validate([
            'files' => 'required|file|mimes: doc,docx,csv,rtf,xlsx,xls,txt,pdf,zip'
            ],
            [
                'files.*.required' => 'Please upload an file only',
                'files.*.mimes' => 'Only doc, docx, pdf and txt files are allowed',
                'files.*.max' => 'Sorry! Maximum allowed size for an image is 2MB'
            ]);

        if($request->hasfile('files'))
         {
            foreach($request->file('files') as $key => $file)
            {
                $path = $file->store('storage/project_documents_uploads');
                $filename = time().'-'.$file->getClientOriginalName();
                // $file->move(public_path('images'), $filename);
                $file->move($path, $filename);
                $projectdoc = new DocProjectFile([
                    'project_id' => $proj_ref_id,
                    'project_file_title' => $filename,
                    'file_path' => $path,
                    'created_at' => NOW()
                ]);
                $projectdoc->save();
            }
         }


        $request->session()->flash('alert-success', 'project was successfully added!. You can now manage it.');
         return redirect()->route('ce-pillar-manager')
            ->with(['success', 'project was successfully added!. you can now manage it.'], ['tab', 'projects-nactivities-md-content']);

        }

    /**
     * Display the specified resource.
     *
     * @param  \App\PillarProject  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
                $project = PillarProject::find($id);

        //return view('pillar-project.show', compact('pillarprojects'));
            return view('lmce.ceprojects.ce-view-project-full-details', compact('project'));

    }
}
