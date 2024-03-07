<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;
    protected $table = 'visitors';
    protected $fillable = [
        'Name',
        'id',
        'DoB',
        'Email',
        'Phone',
        'Gander',
        'Addrees',
        'Password',
        'Typeofblood'
    ];

    public function requests()
    {
        return $this->hasMany(Requestt::class);
    }


    public function donations()
    {
        return $this->hasMany(Donation::class);
    }
    
}
