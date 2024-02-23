<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    protected $table = 'donations';
    public function visitors()
        {
            return $this->belongsTo(Visitor::class);
        }

    public function employees()
        {
            return $this->belongsTo(Employee::class);
        }
}
