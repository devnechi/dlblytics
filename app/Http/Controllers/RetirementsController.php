<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Retirement;
use Illuminate\Http\Request;

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

        return view('retitements.retirements.index', compact('retirements'));
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

        dd($request);
        $requestData = $request->all();

        Retirement::create($requestData);

        return redirect('retirements')->with('flash_message', 'Retirement added!');
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
