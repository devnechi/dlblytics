<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\User;
use DateTime;
use App\Pillar;
use App\Department;
use App\DManagerRoles;
use Auth;


class PillarsController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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

        //all departments
        //all pillars
        $pillars = Pillar::all();
        $departments = Department::all();

        // $departments = DB::table('dlab_departments')
        // ->join('users', 'dlab_departments.dept_manager_id', '=', 'dlab_departments.dept_manager_id')
        // ->select('dlab_departments.*', 'users.fname')
        // ->get();

        $depts = DB::table('users')
        ->join('dlab_departments', 'users.Department', '=', 'dlab_departments.dept_manager_id')
        ->select('users.fname', 'dlab_departments.*')
        ->get();


        // getting all dept managers dept_manager_role_tbl
          $pillarmanagers = DB::table('users')
                        ->join('pillar_manager_role_tbl', 'users.role', '=', 'pillar_manager_role_tbl.role_id')
                        ->join('dlab_departments', 'users.Department', '=', 'dlab_departments.dept_id')
                        ->select('users.*', 'pillar_manager_role_tbl.role_title', 'dlab_departments.dept_title')
                        ->get();

         $deptmanagers = DB::table('users')
                        ->join('dept_manager_role_tbl', 'users.role', '=', 'dept_manager_role_tbl.role_id')
                        ->join('dlab_departments', 'users.Department', '=', 'dlab_departments.dept_id')
                        ->select('users.*', 'dept_manager_role_tbl.role_title', 'dlab_departments.dept_title')
                        ->get();



         $deptstaffs = DB::table('users')
                    ->join('dept_staff_role_tbl', 'users.role', '=', 'dept_staff_role_tbl.role_id')
                    ->join('dlab_departments', 'users.Department', '=', 'dlab_departments.dept_id')
                    ->select('users.*', 'dept_staff_role_tbl.role_title', 'dlab_departments.dept_title')
                    ->get();


         $pillarstaffs = DB::table('users')
                    ->join('pillar_staff_role_tbl', 'users.role', '=', 'pillar_staff_role_tbl.role_id')
                    ->join('dlab_departments', 'users.Department', '=', 'dlab_departments.dept_id')
                    ->select('users.*', 'pillar_staff_role_tbl.role_title', 'dlab_departments.dept_title')
                    ->get();

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
        //return redirect('/finance-dashboard')->withInput(['tab'=>'hr-pillar-content'])->with('success', 'A new pillar was successfully added!');
        return back()->withInput(['tab'=>'hr-pillar-content']);
        // return redirect('financeAdmin.index',
        // compact('deptmanagers',
        // 'pillarmanagers',
        // 'deptstaffs',
        // 'pillarstaffs',
        // 'depts',
        // 'pillars',
        // 'departments'))->with('success', 'A new pillar was successfully added!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pillar = Pillar::find($id);
        // return view('admin.pillarmanage.edit-pillar', compact('pillar'));
        return view('financeAdmin.hr.fin_pillar.hr-view-full-pillar-details', compact('pillar'));


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
        // return view('admin.pillarmanage.edit-pillar', compact('pillar'));
        return view('financeAdmin.hr.fin_pillar.hr-update-pillar-details', compact('pillar'));

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
        $updateTime = new \DateTime('NOW');;
        $pillar = Pillar::find($id);
        $pillar->pillar_title =  $request->get('pillar_title');
        $pillar->pillar_desc = $request->get('pillar_desc');
        $pillar->pillar_status = $request->get('pillar_status');
        $pillar->date_updated = $updateTime->format('Y-m-d H:i:s');

        $pillar->save();
          //return redirect('/finance-dashboard')->with('success', 'pillar was successfully updated!');
          // return back()->withInput(['tab'=>'finance-hr-content-md']);

          return redirect('/finance-dashboard')->withInput(['tab'=>'finance-hr-content-md'])->with('success', 'A new pillar was successfully added!');


    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
