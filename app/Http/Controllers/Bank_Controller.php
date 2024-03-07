<?php

namespace App\Http\Controllers;
use App\Models\Bank;


use Illuminate\Database\QueryException;

class Bank_Controller extends Controller
{
    //
    public function index()
    {
        // إرجاع جميع البيانات المتاحة في جدول "مصرف الدم"
        $ShowBanks = Bank::all();
        
        return view('/Dashboards.bankcontrol', compact('ShowBanks'));
    }
    
    public function store()
    {

        $bank = new Bank;
        // $bank->id = trim(request()->id);
        $bank->Name = trim(request()->Name);
     
        $bank->Addrees = trim(request()->Addrees);

        $bank->save();

        sleep(1);
        header("Location: /bankcontrol");
        exit;

    }
    public function destroy(Bank $bank) 
{
    $bank->delete();

    return redirect()->route('bankcontrol.index')->with('success', 'Blood bank deleted successfully!');
}

        // public function update(Bank $bank)
        // {
        //     $validatedData = $bank->validate([
        //     'id' => 'required|integer',
        //     'Name' => 'required|string',
        //     'Addrees' => 'required|string',
        //     'Type' => 'required|string',
        //     ]);

        //     $bank = Bank::find($bank->id);
        //     $bank->update($validatedData);

  
        // }
 

}
