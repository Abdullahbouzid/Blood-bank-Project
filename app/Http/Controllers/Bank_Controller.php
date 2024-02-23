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
        $bloodBanks = BloodBank::all();
        
        return view('banks.index', compact('bloodBanks'));
    }
}
