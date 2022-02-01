<?php

namespace App\Http\Controllers;

use App\BankAcc;
use Illuminate\Http\Request;

class CobnkakksController extends Controller
{

        /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
    return view('financeAdmin.financeManagement.bnkacc.fin-add-bnk-account');
    }
    //store
    public function store(Request $request){

        $request->validate([
            'acctitle' => 'required',
            'bankname' => 'required',
            'bankaccno' => 'required',
            'bankaccountbalance'=> 'required',
            'currencyType'=> 'required',
            'banklocation'=> 'required'
        ]);

      //  $bankacc = new BankAcc()
        $bankacc = new BankAcc;
        $bankacc->creator_id = $request->creator_id;
        $bankacc->acctitle = $request->acctitle;
        $bankacc->bankname = $request->bankname;
        $bankacc->bankaccno = $request->bankaccno;
        $bankacc->bankaccountbalance = $request->bankaccountbalance;
        $bankacc->currencyType = $request->currencyType;
        $bankacc->banklocation = $request->banklocation;
        $bankacc->save();

        return redirect()->route('finance-management')
        ->with('success','Account has been added successfully.');
    }
}
