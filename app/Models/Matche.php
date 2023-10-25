<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matche extends Model
{
    use HasFactory;
    protected $fillable = ['date','time_number' ,'time_period', 'status'];
    
    protected $dates = ['date'];
    public function getCustomDateAttribute($value)
    {
        return Carbon::parse($value)->format('D d M Y');
    }
}
