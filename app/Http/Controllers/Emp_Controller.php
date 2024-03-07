<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\Bank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Emp_Controller extends Controller
{
    public function store()
    {
        request()->validate([
            'Name' => ['unique:employees'],
            // 'Password' => ['required', 'min:8']
        ]);

        $emp = new employee;

        $emp->id = trim(request()->id);
        $emp->DoB = trim(request()->DoB);
        $emp->Name = trim(request()->Name);
        $emp->Type = trim(request()->Type);
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

        $ShowEmps = employee::where('Type', 'موظف')->get();

        $banknames = Bank::select('Name')->distinct()->get();
        $banks = Bank::select('Addrees')->distinct()->get();


        return view('/Dashboards.empcontrol', compact('ShowEmps', 'banknames', 'banks'));
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
