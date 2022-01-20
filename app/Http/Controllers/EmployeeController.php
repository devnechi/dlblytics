<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use App\Pillar;
use App\Department;
use App\DManagerRoles;
use App\DStaffRoles;
use App\PStaffRoles;
use App\PManagerRoles;
use App\Genders;
use App\User;



class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::latest()->paginate(5);

        return view('financeAdmin.hr.create-new-user', compact('employees'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pillars = Pillar::all();
        return view('financeAdmin.hr.create-new-user',  compact('pillars'));
    }

    public function createPillarManager()
    {
        $pillars = Pillar::all();
        $pillarmanagerroles = PManagerRoles::all();
        $genders = Genders::all();
        return view('financeAdmin.hr.creatingUsers.hr-create-pillar-manager',  compact('pillars', 'pillarmanagerroles', 'genders'));
    }


    public function createPillarStaff(){
        $pillars = Pillar::all();
        $genders = Genders::all();
        $pillarstaffroles = PStaffRoles::all();

        return view('financeAdmin.hr.creatingUsers.hr-create-pillar-staff',  compact('pillars', 'genders', 'pillarstaffroles'));
    }


    public function createDeptManager()
    {
        // $pillars = Pillar::all();
        $depts = Department::all();
        $genders = Genders::all();
        $deptmanagerroles = DManagerRoles::all();

        return view('financeAdmin.hr.creatingUsers.hr-create-dept-manager',  compact('depts', 'genders', 'deptmanagerroles'));
    }

    public function createDeptStaff(){
        // $pillars = Pillar::all();
        $depts = Department::all();
        $genders = Genders::all();
        $deptstaffroles = DStaffRoles::all();

        return view('financeAdmin.hr.creatingUsers.hr-create-dept-staff',  compact('depts', 'genders', 'deptstaffroles'));
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
            'fname' => 'required',
            'mname' => 'required',
            'lname' => 'required',
            'password' => 'required',
            'email' => 'required|unique:users,email',
            'phonenumber' => 'required',
            'bankaccnumber' => 'required',
            'bankaccnumber' => 'required',
            'bankusername' => 'required',
            'totalsalary' => 'required',
            'job_description' => 'required',
            'tin_number' => 'required'
        ]);

        $employee = new Employee([
            'fname' => $request->get('fname'),
            'mname' => $request->get('mname'),
            'lname' => $request->get('lname'),
            'password' => Hash::make($request->get('password')),
            'email' => $request->get('email'),
            'role_id' => $request->get('role_id'),
            'dob' => $request->get('dob'),
            'gender_id' => $request->gender_id,
            'martialstatus' => $request->martialstatus,
            'nationality' => $request->nationality,
            'address' => $request->get('address'),
            'phonenumber' => $request->get('phonenumber'),
            'emegency_contact' => $request->get('emegency_contact'),
            'department_id' => $request->get('department_id'),
            'pillar_id' => $request->pillar_id,
            'job_description' => $request->get('job_description'),
            'bankusername' => $request->get('bankusername'),
            'bankname' => $request->get('bankname'),
            'driving_license' => $request->get('driving_license'),
            'tin_number' => $request->get('tin_number'),
            'bankaccnumber' => $request-> get('bankaccnumber'),
            'currencyType' => $request->currencyType,
            'totalsalary' => $request->get('totalsalary'),
            'working_type' => $request->working_type,
            'acc_status' => $request->get('acc_status'),
            'user_photo_url' => $request->get('user_photo_url'),
            'added_by' => $request->get('added_by'),
            'user_emp_contact_url' => $request-> get('user_emp_contact_url'),
            'status_id' => $request->get('status_id')
        ]);

         $employee->save();
         return redirect()->route('finance-dashboard')
             ->with(['success', 'Staff created successfully.'], ['tab', 'finance-hr-content-md']);
           // var_dump($employee);
          //  var_dump($request->pillar_id);
         // var_dump($request->pillar_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);
        $employee->update($request->all());

        return redirect()->route('employees.index')
            ->with('success', 'Staff updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {

        $employee->delete();

        return redirect()->route('employees.index')
            ->with('success', 'Staff deleted successfully');
    }
}
