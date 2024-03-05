<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $table = 'employees';

    protected $fillable =[
        'id',
        'Name',
        'DoB',
        'Type',
        'Email',
        'Phone',
        'password',
        'Address',
        'Gander',
        'Bank_id',
    ];

    // public function login(Request $request)
    // {
    //     $email = $request->input('Email_Emp');
    //     $password = $request->input('password_Emp');
    
    //     $user = Emp::where('Email_Emp', $email)->first();
    
    //     if ($user && Hash::check($password, $user->password)) {
    //         // تم التحقق بنجاح من مصداقية المستخدم
    //         return redirect()->route('home'); // توجيه إلى الواجهة الأخرى
    //     } else {
    //         // فشل التحقق من مصداقية المستخدم
    //         return redirect()->back()->withErrors(['Email_Emp' => 'خطأ في بيانات الاعتماد']);
    //     }
    // }



    public function requests()
    {
        return $this->hasMany(request::class);
    }   

    public function donations()
    {
        return $this->hasMany(donation::class);
    }

  
    public function bank()
    {
    return $this->belongsTo(Bank::class);
    }

//     public function centers()
// {
//     return $this->hasMany(Center::class);
// }
}
