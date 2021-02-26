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


class HRmanageDeptsController extends Controller
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
        $department = new Department([
            'creators_id' => $request-> get('creator_id'),
            'dept_title' => $request->get('dept_title'),
            'dept_description' => $request->get('dept_description')
        ]);

        $department->save();
        // return back()->withInput(['tab'=>'hr-department-content']);
        // return redirect('/finance-dashboard')->withInput(['tab'=>'hr-departments-content'])->with('success', 'A new pillar was successfully added!');

        return redirect('/finance-dashboard')->with(['success', 'A new department was successfully added!'], ['tab', 'hr-departments-content']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $department = Department::find($id);
        // return view('admin.pillarmanage.edit-pillar', compact('pillar'));
        return view('financeAdmin.hr.fin_depts.hr-department-full-details', compact('department'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department = Department::find($id);
        // return view('admin.pillarmanage.edit-pillar', compact('pillar'));
        return view('financeAdmin.hr.fin_depts.hr-update-department-details', compact('department'));

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
            'dept_title'=>'required',
            'dept_description'=>'required'
        ]);
        $updateTime = new \DateTime('NOW');;
        $department = Department::find($id);
        $department->dept_title =  $request->get('dept_title');
        $department->dept_description = $request->get('dept_description');
        // $department->pillar_status = $request->get('pillar_status');
        $department->date_updated = $updateTime->format('Y-m-d H:i:s');
        $department->save();

          //return redirect('/finance-dashboard')->with('success', 'pillar was successfully updated!');
          // return back()->withInput(['tab'=>'finance-hr-content-md']);
          return redirect('/finance-dashboard')->withInput(['tab'=>'finance-hr-content-md'])->with('success', 'Department was successfully updated!');

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
