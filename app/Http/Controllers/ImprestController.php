<?php

namespace App\Http\Controllers;

use App\Imprest;
use App\Imprest_activity;
use App\Retirement;
use Illuminate\Http\Request;
use App\imprest_review;
use Auth;
class ImprestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $cuid = Auth::user()->user_id;
        $cpid = Auth::user()->pillar_id;

        $imprest = Imprest::where('pillar_id', $cpid);
        $imprests = $imprest->get();
        $imprestapprv=$imprest->where('status','approved')->where('pillar_id',$cpid)->get();
        $imprestsubmited=$imprest->where('status','submitted')->where('pillar_id',$cpid)->get();
        $imprestprossessing=$imprest->where('status','prossessing')->where('pillar_id',$cpid)->get();
        $imprestdenied=$imprest->where('status','denied')->where('pillar_id',$cpid)->get();


        return view('imprest.ds-imprest-index')->with('imprests',$imprests)
        ->with('imprestapprv',$imprestapprv)
        ->with('imprestsubmited',$imprestsubmited)
        ->with('imprestprossessing',$imprestprossessing)
        ->with('imprestdenied',$imprestdenied);
    }
    public function retireindex()
    {


        return view('lmds.dsactivities.ds-retirement-index');
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
            'purpose' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);

        $imprest = new Imprest([
            'requested_by' => $request->get('requested_by'),
            'imp_typ'=>$request->imp_typ,
            'purpose' => $request->purpose,
            'start_date' => $request->get('start_date'),
            'end_date' => $request->get('end_date')
        ]);

        //get last project id
        $impid=$imprest->save();

         for($i=0; $i<count($request->imp_act_name);$i++)
        {
            $impact = new Imprest_activity([
                'imp_act_name' => $request->imp_act_name[$i],
                'rate'=>$request->rate[$i],
                'units' => $request->units[$i],
                'total_cost' => $request->total_cost[$i],
                'imprest_id' => $impid,
            ]);
            $impact->save();
        }

        $request->session()->flash('alert-success', 'project was successfully added!. You can now manage it.');
        return redirect()->route('ds-pillar-manager')
            ->with(['success', 'project was successfully added!. you can now manage it.'], ['tab', 'projects-nactivities-md-content']);


        }
public function edit($id)
{

    $imprest=Imprest::findOrFail($id);
        return view('imprest.ds-edit-imprest')
        ->with('imprest',$imprest);
}

        public function update(Request $request)
        {
            $request->validate([
                'imp_act_id'=> 'required',
                'amount_used'=> 'required',
                'balance'=> 'required',
                'described'=> 'required',
            ]);


             for($i=0; $i<count($request->amount_used);$i++)
            {

       if($request->hasfile('imprest_doc')) {
        $fileName = time().'_'.$request->file('imprest_doc')[$i]->getClientOriginalName();
        $filePath = $request->file('imprest_doc')[$i]->storeAs('project_documents_uploads', $fileName);

    }
                $retire = new Retirement([
                    'imp_act_id'=> $request->imp_act_id,
                    'amount_used'=> $request->amount_used,
                    'balance'=> $request->balance,
                    'receipt_path'=> $request->filePath,
                    'described'=> $request->described,


                ]);
                $retire->save();
            }

            //return view('pillar-project.show', compact('pillarprojects'));
                return view('lmds.dsprojects.ds-view-project-full-details', compact('project'));

        }
    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function review(Request $request)
    {
        $imp = Imprest::findOrFail($request->imprest_id);
        $imp->status=$request->status;
        $imp->update();
        $imprev = new imprest_review([
            'comments'=>$request->comments,
            'imprest_id'=>$request->imprest_id,
            'user_id'=>Auth::user()->user_id
        ]);
        $imprev->save();
        return redirect('retirements')->with('flash_message', 'Retirement updated!');
    }
    public function destroy($id)
    {
        Imprest::destroy($id);

        return redirect('imprest/imprest')->with('flash_message', 'Imprest deleted!');
    }
    public function show($impid)
    {

                $imprest=Imprest::findOrFail($impid);

                return view('imprest.show')
                ->with('imprest',$imprest);

    }
}
