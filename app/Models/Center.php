<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    use HasFactory;
    protected $table = 'centers';
    protected $fillable = [
        'id',
        'Name',
        'Addrees',
        'Type',
        'Bank_id'
    ];

    public function employees()
    {
        return $this->belongsTo(employee::class);
    }
    public function donations()
    {
        return $this->hasMany(Donation::class);
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }
}
