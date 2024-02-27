<?php

namespace App\Http\Controllers;
use App\Models\Bank;
use Illuminate\Http\Request;

class Bank_Controller extends Controller
{
    //
    public function index()
    {
        // قم بإرجاع جميع البيانات المتاحة في جدول "مصرف الدم"
        $ShowBanks = Bank::all();
        
        return view('/Dashboards.bankcontrol', compact('ShowBanks'));
    }

    public function add_bank()
    {
       

        $bank = new Bank;
        $bank->id = trim(request()->bank_num);
        $bank->Name = trim(request()->nameof_bank);
        $bank->Address = trim(request()->bank_address);
        $bank->Type = trim(request()->bank_type);
        $bank->save();
        sleep(1);

        header("Location: /bankcontrol");
        exit;

    }
 

}
