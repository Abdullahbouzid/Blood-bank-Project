<?php

namespace App\Http\Controllers;

use App\Models\Test;

use Illuminate\Http\Request;

class Center_Controllers extends Controller
{
    //
    public function show()
    {

        $testData = Test::all();
        $testName = Test::select('name')->DISTINCT()->get();

        return view('center', ['testData' => $testData, 'testName' => $testName]);

    }


}
