<?php

namespace App\Http\Controllers;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StorageController extends Controller
{

    public function index(Request $request)
    {
        $bloodTypes = ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'];
        $selectedBloodType = $request->get('Typeofblood');

        if (empty($selectedBloodType)) {
            $visitors = Visitor::all();
        } else {
            $visitors = Visitor::where('Typeofblood', $selectedBloodType)->get();
        }
        $Ap = Visitor::where('Typeofblood', 'A+')->count();
        $An = Visitor::where('Typeofblood', 'A-')->count();
        $Bp = Visitor::where('Typeofblood', 'B+')->count();
        $Bn = Visitor::where('Typeofblood', 'B-')->count();
        $On = Visitor::where('Typeofblood', 'O-')->count();
        $Op = Visitor::where('Typeofblood', 'O+')->count();
        $ABn = Visitor::where('Typeofblood', 'AB-')->count();
        $ABp = Visitor::where('Typeofblood', 'AB+')->count();

        
        return view('/Dashboards.blood_storage', compact('visitors', 'bloodTypes', 'selectedBloodType','ABp','ABn','Op','On','Bn','Bp','An','Ap'));
    }
}


