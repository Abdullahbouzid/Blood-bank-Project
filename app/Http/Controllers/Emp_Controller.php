<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\Bank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
        $request->validate([
            'Email' => ['required', 'email', 'exists:employees'],
            'Password' => ['required', 'min:8', 'exists:employees']
        ]);
        // 

        $visitor = DB::table('employees')
            ->where([
                ['Email', '=', $request->input('Email')],
                ['password', '=', $request->input('Password')]
            ])
            ->first();
        if ($visitor) {
            $idEmp = employee::where('Email', $request->input('Email'))
                ->value('id');

            $name = employee::where('Email', $request->input('Email'))
                ->value('Name');

            $type = employee::where('Email', $request->input('Email'))
                ->value('Type');

            $address = employee::where('Email', $request->input('Email'))
                ->value('Addrees');

            $phone = employee::where('Email', $request->input('Email'))
                ->value('Phone');

            $gender = employee::where('Email', $request->input('Email'))
                ->value('Gander');

            setcookie("Id", $idEmp);
            setcookie("User", $name);
            setcookie("Type", $type);
            setcookie("Adds", $address);
            setcookie("phone", $phone);
            setcookie("Gander", $gender);

            return redirect('/dashboard');

        } else {
            return redirect('/login_admin');
        }

    }

    public function show_Emp()
    {
        // $ShowEmps = employee::all();
        $ShowEmps = employee::where('Type', 'موظف')->get();
        // $ShowEmps = employee::where('Type', 'موظف')
        //             ->join('banks', 'employees.Bank_id', '=', 'banks.id')
        //             ->select('employees.*', 'banks.bank_name', 'banks.bank_address')
        //             ->get();


        return view('/Dashboards.empcontrol', compact('ShowEmps'));
    }


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
