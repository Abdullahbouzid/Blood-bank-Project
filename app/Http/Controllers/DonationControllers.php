<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use Illuminate\Http\Request;


class DonationControllers extends Controller
{
    //
    public function store()
    {
        $donation = new Donation;

        $donation->nameVisitor = trim(request()->Name_Visitor);
        $donation->DOB_Visitor = trim(request()->DOB_Visitor);
        $donation->Adds_Visitor = trim(request()->Adds_Visitor);
        $donation->Ph_Visitor = trim(request()->Ph_Visitor);
        $donation->TOB_Visitor = trim(request()->TOB_Visitor);
        $donation->Gender_Visitor = trim(request()->Gender_Visitor);
        $donation->DOD_Visitor = trim(request()->DOD_Visitor);

        $donation->save();

        sleep(1);
        header("Location: /blood-donation");
        exit;

    }
}