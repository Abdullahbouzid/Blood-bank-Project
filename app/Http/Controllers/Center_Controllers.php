<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Center_Controllers extends Controller
{
    //
    public function show()
    {

        // $Name_Center = Request()->Name_Center;
        // $Type_of_Center = Request()->Type_of_Center;
        // $Adds_Center = Request()->Adds_Center;

        // $request = new Request;
        // $request->Name_Center = $Name_Center;
        // $request->Type_of_Center = $Type_of_Center;
        // $request->Adds_Center = $Adds_Center;
        $data = Request()->all();

        dd($data);

        // $request->save();
        // return view('Blood_Center', ['center'->$data]);


    }


}
