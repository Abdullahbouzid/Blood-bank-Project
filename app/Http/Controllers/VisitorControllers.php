<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisitorControllers extends Controller
{
    // createVisitor
    public function store()
    {
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

    public function show($emailVisitor)
    {
        $visitor = Visitor::where('Email', $emailVisitor)->first();

        if ($visitor) {
            // return '..البريد الالكتروني مسجل لدينا مسبقا';
            return $visitor;
        }
    }
}
