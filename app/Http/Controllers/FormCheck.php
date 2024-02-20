<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormCheck extends Controller
{

    function getUserlogin(Request $req)
    {
        $req->validate([
            'email' => 'required',
            'password' => 'required | min : 8'

        ]);

        // if (empty($req->input('visitorpassword'))) {
        //     return redirect()->back()->withErrors(['visitorpassword' => 'يجب كتابة كلمة المرور الخاصة بك']);
        // }

        // return $req->input();
        // return 'كلمة المرور يجب ان تحتوي على 8 حروف على الاقل';

    }
}
