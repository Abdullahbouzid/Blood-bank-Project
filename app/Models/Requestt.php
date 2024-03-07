<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requestt extends Model
{
    use HasFactory;
    protected $table = 'requests';
    protected $fillable = [
        
        'id',
        'DoB',
        'typeofblood',
        'no_bags',
        'status_request',
        'visitor_id',
        'employee_id'
    ];


    public function visitors()
    {
        return $this->belongsTo(Visitor::class);
    }

    public function employees()
    {
        return $this->belongsTo(employee::class);
    }
}
