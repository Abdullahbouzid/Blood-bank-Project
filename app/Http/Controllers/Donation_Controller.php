<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use App\Models\Center;

class Donation_Controller extends Controller
{
    //
    public function store()
    {
        $donation = new Donation;

        $donation->Dof_Donation = request()->Dof_Donation;
        $donation->visitor_id = $_COOKIE["Id"];
        $donation->employee_id = 0;
        $donation->status_donation = false;

        $donation->save();

        sleep(1);
        header("Location: /blood_donation");
        exit;

    }

    public function showCenters(Request $request)
    {
        // قم بإرجاع جميع البيانات المتاحة في جدول "المراكز"
        // $NameCenters = Center::select('Addrees')->distinct()->get();
        $NameCenters = Center::all();

        return view('blood_donation', compact('NameCenters'));
    }
}
