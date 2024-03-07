<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requestt;
use App\Models\Visitor;

class Request_Controller extends Controller
{
    //
    public function store()
    {

        $request = new Requestt;
        $request->visitor_id = $_COOKIE["Id"];
        $request->employee_id = 0;
        $request->typeofblood = trim(request()->Typeofblood);
        $request->no_bags = trim(request()->NO_Bags);
        $request->status_request = trim(request()->Status_Request);

        $request->save();

        sleep(1);
        header("Location: /Blood_Request");
        exit;

    }


    public function show_request()
    {
        $show_requests = Requestt::with('visitors')->get();


        return view('/Dashboards.requestcontrol', compact('show_requests'));
    }

    public function destroy(Requestt $req) 
    {
        $req->delete();
    
        return redirect()->route('requestcontrol.index')->with('success', 'Blood bank deleted successfully!');
    }
}
