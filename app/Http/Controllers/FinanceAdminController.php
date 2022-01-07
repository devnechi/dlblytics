<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\User;
use App\Pillar;
use App\Department;
use App\DManagerRoles;
use App\Imprest;
use App\PillarActivities;
use App\PillarProject;
use App\PillarSubActivities;
use Auth;

class FinanceAdminController extends Controller
{

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
                return view('financeAdmin.index',
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


    //  to create a new pillar
    public function createNewPillar()
    {
        return view('financeAdmin.hr.fin_pillar.hr-create-new-pillar');
    }

    //  to create a new department
    public function createNewDepartment()
    {
        return view('financeAdmin.hr.fin_depts.hr-create-new-department');
    }



    //  Advance request
    public function createTrainingAdvance()
    {
        return view('financeAdmin.finRequest.training-advance-request');
    }

    public function createTravelAdvance()
    {
        return view('financeAdmin.finRequest.travel-advance-request');
    }

    public function createAllowanceRequest(){
        return view('financeAdmin.finRequest.create-allowance-request');
    }

    public function createperDiemClaim(){
        return view('financeAdmin.finRequest.new-per-diem-claim');
    }

    public function createPettyCash(){
        return view('financeAdmin.finRequest.new-petty-cash');
    }

    public function createPaymentRequisition(){
        return view('financeAdmin.finRequest.create-new-payment-requisition');
    }

    public function createNewWorkshopRegistration(){
       return view('financeAdmin.finRequest.create-new-workshop-registration');
    }


    // financial reports

    public function createBankReconciliationReport(){
        return view('financeAdmin.finReports.create-bank-reconciliation-report');
    }

    public function createPettyCashReconciliationReport(){
        return view('financeAdmin.finReports.create-petty-cash-reconciliation-report');
    }

    public function createPaymentVoucher(){
        return view('financeAdmin.finReports.create-payment-voucher');
    }
    public function createDepositVoucher(){
        return view('financeAdmin.finReports.create-deposit-voucher');
    }
    public function createJournalVoucher(){
        return view('financeAdmin.finReports.create-journal-voucher');
    }

    public function createPaySlip(){
        return view('financeAdmin.finReports.create-pay-slip');
    }

}
