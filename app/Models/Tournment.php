<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournment extends Model
{
    use HasFactory , HasUuids;
    protected $fillable = ['tournment_name' , 'status'];

    function matches(){
       return $this->hasMany(Matche::class);
    }
    function teams(){
       return $this->hasMany(Team::class);
    }
}
