<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;
    protected $table = 'banks';

    


    public function employees()
    {
        return $this->hasMany(employee::class);
    }

    public function centers()
    {
    return $this->hasMany(Center::class);
    }
}
