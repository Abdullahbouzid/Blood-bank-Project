<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisitorControllers extends Controller
{
    public function store()
    {
        request()->validate([
            'Email' => ['unique:visitors,Email']
        ]);

        $visitor = new Visitor;
        $visitor->Username = trim(request()->Username);
        $visitor->Email = trim(request()->Email);
        $visitor->Password = trim(request()->Password);
        $visitor->DOB_Visitor = trim(request()->DOB_Visitor);

        $visitor->save();
        sleep(1);

        header("Location: /home");
        exit;

    }

}
