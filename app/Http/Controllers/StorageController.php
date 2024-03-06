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

        return view('/Dashboards.blood_storage', compact('visitors', 'bloodTypes', 'selectedBloodType'));
    }
}


