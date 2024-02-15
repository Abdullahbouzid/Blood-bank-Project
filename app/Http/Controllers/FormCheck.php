<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormCheck extends Controller
{
    function getUserlogin(Request $req)
    {
        $req->validate([
            'visitorpassword'=>'required | min : 8',

        ]);
        return $req->input();

    }
    //
}
