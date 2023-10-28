<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory , HasUuids;
    protected $fillable = ['team_name','team_logo' , 'tournment_id'];

    function tournment(){
        return $this->belongsTo(Tournment::class);
    }
    public function matches()
    {
        return $this->belongsToMany(Matche::class, 'match_teams' , 'match_id' ,'team_id');
    }
   
}
