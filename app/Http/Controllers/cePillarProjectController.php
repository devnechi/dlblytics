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
            'start_date'=>'required',
            'end_date'=>'required',
            'project_file_title.*' => 'required|file|mimes: doc,docx,csv,rtf,xlsx,xls,txt,pdf,zip|max:2048',
            'project_expected_outcomes.*' => 'required|file|mimes: doc,docx,csv,rtf,xlsx,xls,txt,pdf,zip|max:2048'
        ]);



        $project = new PillarProject([
            'project_title' => $request->get('project_title'),
            'created_by' => $request->get('created_by'),
            'pillar_ref_id'=>$request->get('pillar_ref_id'),
            'project_desc' => $request->get('project_desc'),
            'total_project_cost' => $request->get('total_project_cost'),
            'current_stage' => $request->get('current_stage'),
            'start_date' => $request->get('start_date'),
            'end_date' => $request->get('end_date')
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



        if($request->hasfile('project_file_title'))
         {
            $file= $request->file('project_file_title');

                $path = $file->store('/Documents_uploads');
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

         if($request->hasfile('project_expected_outcomes'))
         {
            $file= $request->file('project_expected_outcomes');

                $path2 = $file->store('/Documents_uploads');
                $filename = time().'-'.$file->getClientOriginalName();
                // $file->move(public_path('images'), $filename);
                $file->move($path, $filename);
                $projectdoc = new DocProjectFile([
                    'project_id' => $proj_ref_id,
                    'project_file_title' => $filename,
                    'file_path' => $path2,
                    'created_at' => NOW()
                ]);
                $projectdoc->save();

         }

         $mailer= new MailController();
         $mailer->SendMail();
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
