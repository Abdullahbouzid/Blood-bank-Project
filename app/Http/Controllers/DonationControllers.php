<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use Illuminate\Http\Request;


class DonationControllers extends Controller
{
    //
    public function requestVisitor()
    {
        $nameVisitor = request()->Name_Visitor;
        $DOB_Visitor = request()->DOB_Visitor;
        $Adds_Visitor = request()->Adds_Visitor;
        $Ph_Visitor = request()->Ph_Visitor;
        $TOB_Visitor = request()->TOB_Visitor;
        $Gender_Visitor = request()->Gender_Visitor;
        $DOD_Visitor = request()->DOD_Visitor;

        $donation = new Donation;

        $donation->nameVisitor = $nameVisitor;
        $donation->DOB_Visitor = $DOB_Visitor;
        $donation->Adds_Visitor = $Adds_Visitor;
        $donation->Ph_Visitor = $Ph_Visitor;
        $donation->TOB_Visitor = $TOB_Visitor;
        $donation->Gender_Visitor = $Gender_Visitor;
        $donation->DOD_Visitor = $DOD_Visitor;

        $donation->save();


        header("Location: /blood_donation");
        exit;

    }
}