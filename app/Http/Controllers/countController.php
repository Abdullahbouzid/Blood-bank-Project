<?php

namespace App\Http\Controllers;
use App\Models\Center;
use App\Models\Bank;
use App\Models\employee;
use App\Models\Visitor;
use Illuminate\Http\Request;

class countController extends Controller
{
    //
    public function Show_count()
    {
        // قم بإرجاع جميع البيانات المتاحة في جدول "مصرف الدم"
        $CentersCount = Center::count();
        $BanksCount = Bank::count();
        $AdminCount = employee::where('Type', 'مسؤول')->count();
        $EmpCount = employee::where('Type', 'موظف')->count();
        $vistorCount=Visitor::count();
        return view('/Dashboards.dashboard', compact('CentersCount','BanksCount','AdminCount','EmpCount','vistorCount'));
    }
}
