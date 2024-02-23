<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;
    protected $table = 'requests';
         
             
        public function visitors()
            {
                return $this->belongsTo(Visitor::class);            
            }

            public function employees()
            {
                return $this->belongsTo(employee::class);
            }
}
