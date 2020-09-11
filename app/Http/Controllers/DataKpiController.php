<?php

namespace App\Http\Controllers;

use App\DataKpi;
use Illuminate\Http\Request;
use App\Pillar;
use Auth;

class DataKpiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

       // $kpis = DB::table('articles')->paginate(3);

        $kpis = DataKpi::paginate(3);

        return view('admin.kpimanage.manage-kpis', ['kpis' => $kpis]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $pillars = Pillar::pluck('id', 'pillar_title');
        $pillars = Pillar::all(['id', 'pillar_title']);


        return view('admin.kpimanage.create-kpi', compact('pillars', $pillars));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DataKpi  $dataKpi
     * @return \Illuminate\Http\Response
     */
    public function show(DataKpi $dataKpi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DataKpi  $dataKpi
     * @return \Illuminate\Http\Response
     */
    public function edit(DataKpi $dataKpi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DataKpi  $dataKpi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataKpi $dataKpi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DataKpi  $dataKpi
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataKpi $dataKpi)
    {
        //
    }
}
