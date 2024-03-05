<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;


class Visitor_Controller extends Controller
{
    public function store()
    {
        request()->validate([
            'Email' => ['unique:visitors,Email'],
            'Password' => ['required', 'min:8']
        ]);

        $visitor = new Visitor;
        $visitor->Name = trim(request()->Name);
        $visitor->DoB = trim(request()->DoB);
        $visitor->Email = trim(request()->Email);
        $visitor->Phone = trim(request()->Phone);
        $visitor->Password = trim(request()->Password);
        $visitor->Addrees = trim(request()->Addrees);
        $visitor->Gander = trim(request()->Gander);
        $visitor->Typeofblood = trim(request()->Typeofblood);

        $visitor->save();
        sleep(1);

        setcookie("User", request()->Name);

        return redirect('/home')->with('Name', request()->Name);

    }
    public function index()
    {
        $vitsits = Visitor::all();

        return view('/Dashboards.visitcontrol', compact('vitsits'));

    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'Email' => ['required', 'email', 'exists:visitors'],
            'Password' => ['required', 'min:8']
        ]);

        $visitor = DB::table('visitors')
            ->where([
                ['Email', '=', $request->input('Email')],
                ['Password', '=', $request->input('Password')]
            ])
            ->first();
        if ($visitor) {
            $name = Visitor::where('Email', $request->input('Email'))
                ->value('Name');

            $dateOfBirth = Visitor::where('Email', $request->input('Email'))
                ->value('DoB');

            $address = Visitor::where('Email', $request->input('Email'))
                ->value('Addrees');

            $phone = Visitor::where('Email', $request->input('Email'))
                ->value('Phone');

            $typeOfBlood = Visitor::where('Email', $request->input('Email'))
                ->value('Typeofblood');

            $gender = Visitor::where('Email', $request->input('Email'))
                ->value('Gander');

            setcookie("User", $name);
            setcookie("DoB", $dateOfBirth);
            setcookie("Adds", $address);
            setcookie("phone", $phone);
            setcookie("TOB", $typeOfBlood);
            setcookie("Gander", $gender);

            return redirect('/home');

        } else {
            return redirect('/');
        }
    }



    public function destroy(Visitor $vitsit) 
    {
        $vitsit->delete();
    
        return redirect()->route('visitcontrol.index')->with('success', 'visitcontrol deleted successfully!');
    }
}
