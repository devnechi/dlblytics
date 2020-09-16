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

        $request->validate([
            'kpi_title'=>'required',
            'kpi_desc'=>'required',

        ]);

        $kpi = new DataKpi([
            'creators_id' => $request-> get('creator_id'),
            'kpi_title' => $request->get('kpi_title'),
            'ref_pillar_id'=> $request->get('ref_pillar_id'),
            'kpi_desc' => $request->get('kpi_desc'),
            'dc_timing' => $request->get('dc_timing'),
            'fq_of_dc' => $request->get('fq_of_dc'),
            'classification' => $request->get('classification'),
            'unit_of_measure' => $request->get('unit_of_measure'),
            'method_of_dc' => $request->get('method_of_dc'),
            'dissaggregate' => $request->get('dissaggregate'),
            'formula' => $request->get('formula'),
            'reporting_respns' => $request->get('reporting_respns'),
            'target_value' => $request->get('target_value'),
            'tolerance_band' => $request->get('tolerance_band'),
            'last_approved' => $request->get('last_approved')

        ]);

          //var_dump($kpi);

        $kpi->save();
       return redirect('/manage-kpis')->with('success', 'A new kpi was successfully added!');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\DataKpi  $dataKpi
     * @return \Illuminate\Http\Response
     */
    public function show(DataKpi $dataKpi)
    {
        //return view('articles.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DataKpi  $dataKpi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pillars = Pillar::all();
         $kpi = DataKpi::find($id);

         return view('admin.kpimanage.edit-kpi', compact(['kpi', 'pillars']));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DataKpi  $dataKpi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kpi_title'=>'required',
            'kpi_desc'=>'required',

        ]);

        $kpi = DataKpi::find($id);
        $kpi->kpi_title = $request->get('kpi_title');
        $kpi->ref_pillar_id = $request->get('ref_pillar_id');
        $kpi->kpi_desc = $request->get('kpi_desc');
        $kpi->dc_timing = $request->get('dc_timing');
        $kpi->fq_of_dc = $request->get('fq_of_dc');
        $kpi->classification = $request->get('classification');
        $kpi->unit_of_measure = $request->get('unit_of_measure');
        $kpi->method_of_dc = $request->get('method_of_dc');
        $kpi->dissaggregate = $request->get('dissaggregate');
        $kpi->formula = $request->get('formula');
        $kpi->reporting_respns = $request->get('reporting_respns');
        $kpi->target_value = $request->get('target_value');
        $kpi->tolerance_band = $request->get('tolerance_band');
        $kpi->last_approved = $request->get('last_approved');

        $kpi->save();
        return redirect('/manage-kpis')->with('success', ' kpi was successfully updated! ');

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
