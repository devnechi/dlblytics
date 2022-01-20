<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Auth;
use App\Retirement;
use App\Imprest;
use App\retire_review;
use Illuminate\Http\Request;
use App\Notifications\StatusNotification;
use Notification;

class RetirementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $retirements = Retirement::latest()->paginate($perPage);
        } else {
            $retirements = Retirement::latest()->paginate($perPage);
        }

        return view('retirements.retirements.index', compact('retirements'));
    }

    public function retireshow($impid)
    {
        $imprest = Imprest::findOrFail($impid);

        return view('retirements.retirements.index', compact('imprest'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('retitements.retirements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {


        $retires = Retirement::where('imp_act_id', $request->get('imp_act_id'))->first();
        if (isset($retires)) {

            $retires->imp_act_id = $request->get('imp_act_id');
            $retires->amount_used = $request->get('amount_used');
            $retires->balance = $request->get('balance');
            $retires->described = $request->get('described');


            if ($request->hasfile('receipt')) {
                $fileName = time() . '_' . $request->file('receipt')->getClientOriginalName();
                $filePath = $request->file('receipt')->storeAs('project_documents_uploads', $fileName);

                $retires->receipt_path = '/storage/' . $filePath;
            }
            if ($request->hasfile('describedoc')) {
                $fileName = time() . '_' . $request->file('describedoc')->getClientOriginalName();
                $filePath = $request->file('describedoc')->storeAs('project_documents_uploads', $fileName);
                $retires->balance_path = '/storage/' . $filePath;
            }
            $retires->update();
        } else {
            $cretirement = new Retirement([
                'imp_act_id' => $request->get('imp_act_id'),
                'amount_used' => $request->get('amount_used'),
                'balance' => $request->get('balance'),
                'described' => $request->get('described'),
            ]);

            if ($request->hasfile('receipt')) {
                $fileName = time() . '_' . $request->file('receipt')->getClientOriginalName();
                $filePath = $request->file('receipt')->storeAs('project_documents_uploads', $fileName);

                $cretirement->receipt_path = '/storage/' . $filePath;
            }
            if ($request->hasfile('describedoc')) {
                $fileName = time() . '_' . $request->file('describedoc')->getClientOriginalName();
                $filePath = $request->file('describedoc')->storeAs('project_documents_uploads', $fileName);
                $cretirement->balance_path = '/storage/' . $filePath;
            }
            $cretirement->save();
        }
        return redirect('imprest')->with('flash_message', 'Retirement added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $retirement = Retirement::findOrFail($id);

        return view('retitements.retirements.show', compact('retirement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $retirement = Retirement::findOrFail($id);

        return view('retitements.retirements.edit', compact('retirement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {

        $requestData = $request->all();

        $retirement = Retirement::findOrFail($id);
        $retirement->update($requestData);

        return redirect('retirements')->with('flash_message', 'Retirement updated!');
    }

    public function review(Request $request)
    {
       
        $imprev = new retire_review([
            'comments' => $request->comments,
            'imprest_id' => $request->imprest_id,
            'imprest_act_id' => $request->imprest_act_id,
            'user_id' => Auth::user()->user_id
        ]);
        $imprev->save();
        $data = Auth::user();

        $billData = [

            'body' => 'You received an offer.',
            'actionText' => 'Check out the offer',
            'actionURL' => route('retireindex'),
            'thanks' => 'Thanks yoo',
            'bill_id'=> 0007
        ];
        Notification::route('mail', 'semperjack@gmail.com')
        ->notify( new StatusNotification($billData));

        dd('Bill notification has been sent!');
        return redirect('retirements')->with('flash_message', 'Retirement updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Retirement::destroy($id);

        return redirect('retirements')->with('flash_message', 'Retirement deleted!');
    }
}
