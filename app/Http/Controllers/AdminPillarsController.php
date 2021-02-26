<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pillar;
use Auth;


class AdminPillarsController extends Controller
{

    public function index() {

        $pillars = Pillar::all();

        return view('admin.pillarmanage.manage_pillars', compact('pillars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('admin.pillarmanage.create-pillar');
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
            'pillar_title'=>'required',
            'pillar_desc'=>'required',

        ]);

        $pillar = new Pillar([
            'creators_id' => $request-> get('creator_id'),
            'pillar_title' => $request->get('pillar_title'),
            'pillar_desc' => $request->get('pillar_desc'),
            'pillar_status' => $request->get('pillar_status'),
        ]);

        //  var_dump( $request-> get('creator_id'));

        $pillar->save();
        return redirect('/manage-pillars')->with('success', 'A new pillar was successfully added!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('id.show', compact('product'));
        //return view('articles.show',compact('article'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pillar = Pillar::find($id);
        return view('admin.pillarmanage.edit-pillar', compact('pillar'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'pillar_title'=>'required',
            'pillar_desc'=>'required'
        ]);

        $pillar = Pillar::find($id);
        $pillar->pillar_title =  $request->get('pillar_title');
        $pillar->pillar_desc = $request->get('pillar_desc');
        $pillar->pillar_status = $request->get('pillar_status');

        $pillar->save();
        return redirect('/manage-pillars')->with('success', 'pillar was successfully updated!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pillar = Pillar::find($id);
        $pillar->delete();
        return redirect('/manage-pillars')->with('success', 'pillar was successfully deleted!');
    }
}
