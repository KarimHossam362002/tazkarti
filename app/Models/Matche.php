<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matche extends Model
{
    use HasFactory;
    protected $fillable = ['date','time_number' ,'time_period', 'status' , 'tournment_id' , 'stadium_id'];
    
    protected $dates = ['date'];
    public function getCustomDateAttribute($value)
    {
        return Carbon::parse($value)->format('D d M Y');
    }
    function tournment(){
        return $this->belongsTo(Tournment::class);
    }
    public function teams()
    {
    return $this->belongsToMany(Team::class, 'match_teams' , 'match_id' , 'team_id');
    }
    public function stadium(){
        return $this->belongsTo(Stadium::class);
    }
    public function tazkaras(){
        return $this->hasMany(Tazkara::class);
       }
}
