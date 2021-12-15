<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Imprest;
use Illuminate\Http\Request;

class TestimprestController extends Controller
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
            $testimprest = Imprest::latest()->paginate($perPage);
        } else {
            $testimprest = Imprest::latest()->paginate($perPage);
        }

        return view('imprest.testimprest.index', compact('testimprest'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('imprest.testimprest.create');
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
        
        $requestData = $request->all();
        
        Imprest::create($requestData);

        return redirect('imprest/testimprest')->with('flash_message', 'Imprest added!');
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
        $testimprest = Imprest::findOrFail($id);

        return view('imprest.testimprest.show', compact('testimprest'));
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
        $testimprest = Imprest::findOrFail($id);

        return view('imprest.testimprest.edit', compact('testimprest'));
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
        
        $testimprest = Imprest::findOrFail($id);
        $testimprest->update($requestData);

        return redirect('imprest/testimprest')->with('flash_message', 'Imprest updated!');
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
        Imprest::destroy($id);

        return redirect('imprest/testimprest')->with('flash_message', 'Imprest deleted!');
    }
}
