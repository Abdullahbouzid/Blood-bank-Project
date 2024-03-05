<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

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
}
