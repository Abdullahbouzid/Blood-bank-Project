<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\lo;


class FormCheck extends Controller
{

    function getUserlogin(Request $req)
    {
        $req->validate([
            'email' => 'required',
            'password' => 'required'

        ]);
    }

}
