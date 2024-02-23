<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Helpers\RouteHelper;
use App\Models\Request;

class Request_Controllers extends Controller
{
    //
    public function store()
    {

        $request = new Request;
        $request->Name_Patient = trim(request()->Name_Patient);
        $request->DOB_Patient = trim(request()->DOB_Patient);
        $request->Adds_Patient = trim(request()->Adds_Patient);
        $request->Phone_Patient = trim(request()->Phone_Patient);
        $request->TOB_Patient = trim(request()->TOB_Patient);
        $request->Gander_Patient = trim(request()->Gander_Patient);

        $request->save();

        sleep(1);
        header("Location: /BloodRequest");
        exit;

    }
}
