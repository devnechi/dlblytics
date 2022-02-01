<?php

namespace App\Http\Controllers;

use App\Reqiuest;
use App\Imprest_activity;
use App\Retirement;
use Illuminate\Http\Request;
use App\imprest_review;
use App\PillarActivities;
use Auth;
use App\Notifications\StatusNotification;
use Notification;

class RequestController extends Controller
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

        $reqiuest = Reqiuest::all();
        $imprests = Reqiuest::paginate(10);
        $imprestapprv = $reqiuest->where('status', 'approved')->where('pillar_id', $cpid);
        $imprestsubmited = $reqiuest->where('pillar_id', $cpid)->where('status', 'submited');
        $imprestprossessing = $reqiuest->where('status', 'prossessing')->where('pillar_id', $cpid);

        $imprestdenied = $reqiuest->where('status', 'denied')->where('pillar_id', $cpid);


        return view('reqiuest.ds-reqiuest-index')->with('imprests', $imprests)
            ->with('imprestapprv', $imprestapprv)
            ->with('imprestsubmited', $imprestsubmited)
            ->with('imprestprossessing', $imprestprossessing)
            ->with('imprestdenied', $imprestdenied);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('reqiuest.create-new-request');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\reqiuest  $reqiuest
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        $request->validate([
            'purpose' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);

        $reqiuest = new Reqiuest([
            'requested_by' => $request->get('requested_by'),
            'req_typ' => $request->imp_typ,
            'purpose' => $request->purpose,
            'start_date' => $request->get('start_date'),
            'end_date' => $request->get('end_date')
        ]);

        //get last project id
        $impid = $reqiuest->save();

        for ($i = 0; $i < count($reqiuest->imp_act_name); $i++) {
            $impact = new Imprest_activity([
                'imp_act_name' => $reqiuest->imp_act_name[$i],
                'rate' => $reqiuest->rate[$i],
                'units' => $reqiuest->units[$i],
                'total_cost' => $reqiuest->total_cost[$i],
                'imprest_id' => $impid,
            ]);
            $impact->save();
        }

        $reqiuest->session()->flash('alert-success', 'project was successfully added!. You can now manage it.');
        return redirect()->route('ds-pillar-manager')
            ->with(['success', 'project was successfully added!. you can now manage it.'], ['tab', 'projects-nactivities-md-content']);
    }
    public function edit($id)
    {

        $reqiuest = Reqiuest::findOrFail($id);
        return view('reqiuest.edit-reqiuest')
            ->with('reqiuest', $reqiuest);
    }

    public function update(Reqiuest $reqiuest)
    {
        $reqiuest->validate([
            'imp_act_id' => 'required',
            'amount_used' => 'required',
            'balance' => 'required',
            'described' => 'required',
        ]);


        for ($i = 0; $i < count($reqiuest->amount_used); $i++) {

            if ($reqiuest->hasfile('imprest_doc')) {
                $fileName = time() . '_' . $reqiuest->file('imprest_doc')[$i]->getClientOriginalName();
                $filePath = $reqiuest->file('imprest_doc')[$i]->storeAs('project_documents_uploads', $fileName);
            }
            $retire = new Retirement([
                'imp_act_id' => $reqiuest->imp_act_id,
                'amount_used' => $reqiuest->amount_used,
                'balance' => $reqiuest->balance,
                'receipt_path' => $reqiuest->filePath,
                'described' => $reqiuest->described,


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
    public function review(reqiuest $reqiuest)
    {
        $imp = reqiuest::findOrFail($reqiuest->imprest_id);
        $act = PillarActivities::findOrFail($imp->pillar_activities_pillar_act_id);
        $imp->status = $reqiuest->status;
        $act->review_status = $reqiuest->status;

        if (Auth::user()->pillar_id == 1) {
            if ($reqiuest->status == 'Approved') {
                $imp->current_stage = "Line manager";
                $act->current_stage = "Line manager";
                $imp->status = 'Approved';
                $act->review_status = 'Approved';
            }
        } else {
            if ($reqiuest->status == 'Approved') {
                $imp->current_stage = "Line manager";
                $act->current_stage = "Line manager";
                $imp->status = 'submited';
                $act->review_status = 'submited';
            }
        }

        $imp->update();
        $act->update();
        $imprev = new imprest_review([
            'comments' => $reqiuest->comments,
            'imprest_id' => $reqiuest->imprest_id,
            'user_id' => Auth::user()->user_id
        ]);
        $imprev->save();
        $data = Auth::user();

        $billData = [

            'body' => 'Your reqiuest has been reviewed.',
            'actionText' => 'Check out on the system',
            'actionURL' => route('retireindex'),
            'thanks' => 'Thanks yoo',
            'bill_id' => 0007
        ];
        Notification::route('mail', 'semperjack@gmail.com')
            ->notify(new StatusNotification($billData));
        return redirect('finance-dashboard')->with('flash_message', 'Retirement updated!');
    }
    public function destroy($id)
    {
        reqiuest::destroy($id);

        return redirect('reqiuest/reqiuest')->with('flash_message', 'reqiuest deleted!');
    }
    public function show($impid)
    {

        $reqiuest = reqiuest::findOrFail($impid);

        return view('reqiuest.show')
            ->with('reqiuest', $reqiuest);
    }
}
