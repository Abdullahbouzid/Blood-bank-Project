<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    protected $table = 'donations';
    protected $fillable = [
        'Dof_Donation',
        'visitor_id',
        'center_id',
    ];


    public function visitor()
    {
        return $this->belongsTo(Visitor::class);
    }
    public function center()
    {
        return $this->belongsTo(Center::class);
    }
    public function employees()
        {
            return $this->belongsTo(Employee::class);
        }
}
