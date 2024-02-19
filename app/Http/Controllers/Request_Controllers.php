<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Helpers\RouteHelper; 
use App\Models\Request;
class Request_Controllers extends Controller
{
    //
    public function requestPatient(){

        
//  $request=Request();
 $Name_Patient=Request()->Name_Patient;
 $DOB_Patient=Request()->DOB_Patient;
 $Adds_Patient=Request()->Adds_Patient;
 $Phone_Patient=Request()->Phone_Patient;
 $TOB_Patient=Request()->TOB_Patient;
 $Gander_Patient=Request()->Gander_Patient;

 $request=new Request;
 $request->Name_Patient=$Name_Patient;
 $request->DOB_Patient=$DOB_Patient;
 $request->Adds_Patient=$Adds_Patient;
 $request->Phone_Patient=$Phone_Patient;
 $request->TOB_Patient=$TOB_Patient;
 $request->Gander_Patient=$Gander_Patient;

 $request->save();

 header("Location: /BloodRequest"); 
 exit;
//  return to_route('stor');
 
    // return RouteHelper::to_route('stor');
    }
}
