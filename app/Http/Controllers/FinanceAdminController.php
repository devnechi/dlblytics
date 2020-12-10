<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceAdminController extends Controller
{

    public function index()
    {
        return view('financeAdmin.index');
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
