<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\Pillar;
use App\Department;
use App\DManagerRoles;
use App\Imprest;
use App\PillarActivities;
use App\PillarProject;
use App\PillarSubActivities;

class AdminController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
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
        ->join('dlab_departments', 'users.department_id', '=', 'dlab_departments.dept_manager_id')
        ->select('users.fname', 'dlab_departments.*')
        ->get();


        // getting all dept managers dept_manager_role_tbl
          $pillarmanagers = DB::table('users')
                        ->join('pillar_manager_role_tbl', 'users.role_id', '=', 'pillar_manager_role_tbl.role_id')
                        ->join('dlab_departments', 'users.department_id', '=', 'dlab_departments.dept_id')
                        ->select('users.*', 'pillar_manager_role_tbl.role_title', 'dlab_departments.dept_title')
                        ->get();

         $deptmanagers = DB::table('users')
                        ->join('dept_manager_role_tbl', 'users.role_id', '=', 'dept_manager_role_tbl.role_id')
                        ->join('dlab_departments', 'users.department_id', '=', 'dlab_departments.dept_id')
                        ->select('users.*', 'dept_manager_role_tbl.role_title', 'dlab_departments.dept_title')
                        ->get();



         $deptstaffs = DB::table('users')
                    ->join('dept_staff_role_tbl', 'users.role_id', '=', 'dept_staff_role_tbl.role_id')
                    ->join('dlab_departments', 'users.department_id', '=', 'dlab_departments.dept_id')
                    ->select('users.*', 'dept_staff_role_tbl.role_title', 'dlab_departments.dept_title')
                    ->get();


         $pillarstaffs = DB::table('users')
                    ->join('pillar_staff_role_tbl', 'users.role_id', '=', 'pillar_staff_role_tbl.role_id')
                    ->join('dlab_departments', 'users.department_id', '=', 'dlab_departments.dept_id')
                    ->select('users.*', 'pillar_staff_role_tbl.role_title', 'dlab_departments.dept_title')
                    ->get();
                // all dept staff
                // all pillar staff
                // all pillar managers
                // all pillar projects
                $projects=PillarProject::all();
                // all pillar projects
                $activities=PillarActivities::all();
                // all pillar projects
                $subactivities=PillarSubActivities::all();
                // all pillar projects
                $imprests=Imprest::all();

                //opend finance dashboard index page
                return view('admin.index',
                compact('deptmanagers',
                'pillarmanagers',
                'deptstaffs',
                'pillarstaffs',
                'depts',
                'pillars',
                'projects',
                'activities',
                'subactivities',
                'imprests',
                'departments'));

    }
}
