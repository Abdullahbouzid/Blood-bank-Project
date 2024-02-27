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
            'Password' => 'required|min:8'
        ]);

        $visitor = new Visitor;
        $visitor->Name = trim(request()->Username);
        $visitor->Email = trim(request()->Email);
        $visitor->Password = trim(request()->Password);
        $visitor->DOB_Visitor = trim(request()->DOB_Visitor);

        $visitor->save();
        sleep(1);

        header("Location: /home");
        exit;

    }
    public function show_visitor_control()
    {
       $vitsits=Visitor::all();
       
       return view('/Dashboards.visitcontrol', compact('vitsits'));

    }
}
