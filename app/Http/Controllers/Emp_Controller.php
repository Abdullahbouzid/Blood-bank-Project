<?php

namespace App\Http\Controllers;
use App\Models\employee;
use App\Models\Bank;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class Emp_Controller extends Controller
{
    public function store()
    {

        $emp = new employee;
       
        // $emp->id = trim(request()->id);
        $emp->DoB = trim(request()->DoB);
        $emp->Name = trim(request()->Name);
        $emp->Addrees = trim(request()->Addrees);
        $emp->Email = trim(request()->Email);
        $emp->Phone = trim(request()->Phone);
        $emp->Gander = trim(request()->Gander);
        $emp->Password = trim(request()->Password);
        $emp->Bank_id = trim(request()->Bank_id);

        
        $emp->save();

        sleep(1);
        header("Location: /empcontrol");
        exit;

    }

    public function login(Request $request)
    {
        $credentials = $request->only('Email_Emp', 'password_Emp');
    
        if (Auth::attempt($credentials)) {
            // تم التحقق بنجاح من مصداقية المستخدم
            return redirect()->route('home'); // توجيه إلى الواجهة الأخرى
            return "hi ";
        } else {
            // فشل التحقق من مصداقية المستخدم
            return redirect()->back()->withErrors(['Email_Emp' => 'خطأ في بيانات الاعتماد']);
        }
    }

    public function show_Emp()
    {
      
        $ShowEmps = employee::with('bank')->where('Type', 'موظف')->get();
       
        // $banknames= Bank::select('Name')->distinct()->get();
        $banks =Bank::all();
           return view('/Dashboards.empcontrol', compact('ShowEmps','banks'));
        // return view('/Dashboards.empcontrol', compact('ShowEmps','banknames','banks'));
    }
    
    
    // public function getWorkplaces(Request $request)
    // {
    // $banknames = $request->banknames;
    // $banknames = Bank::where('Name', $banknames)->get();
    // return view('control.getWorkplaces', compact('banknames'));
    // }


    public function show_Admin()
    {
      
        $ShowAdmins = employee::where('Type', 'مسؤول')->get();

        
        return view('/Dashboards.admincontrol', compact('ShowAdmins'));
    }

    public function destroy(employee $emp) 
    {
        $emp->delete();
    
        return redirect()->route('empcontrol.show_Emp')->with('success', 'empcontrol deleted successfully!');
    }

 


}
