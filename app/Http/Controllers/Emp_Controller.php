<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Emp_Controller extends Controller
{
    //حفظ بيانات موظف جديد
    // public function requestPatient()
    // {

    //     $request = new Request;
    //     $request->Name_Emp = trim(request()->Name_Emp);
    //     $request->DoB_Emp = trim(request()->DoB_Emp);
    //     $request->Type_Emp = trim(request()->Type_Emp);
    //     $request->Email_Emp = trim(request()->Email_Emp);
    //     $request->Phone_Emp = trim(request()->Phone_Emp);
    //     $request->password_Emp = trim(request()->password_Emp);
    //     $request->Adds_Emp = trim(request()->Adds_Emp);
    //     $request->Gander_Emp = trim(request()->Gander_Emp);

    //     $request->save();

    //     sleep(1);
    //     header("Location: /dashboard");
    //     exit;

    // }

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
}
