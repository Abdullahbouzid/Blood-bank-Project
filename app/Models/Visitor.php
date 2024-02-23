<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;
    protected $table = 'visitors';

    public function requests()
    {
        return $this->hasMany(request::class);
    }


    public function donations()
    {
        return $this->hasMany(donation::class);
    }
}
