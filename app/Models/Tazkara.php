<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tazkara extends Model
{
    use HasFactory , HasUuids;
    protected $fillable = ['tazkara' , 'match_id','entertainment_id'];
    public function match(){
        return $this->belongsTo(Matche::class);
    }
    public function entertainment(){
        return $this->belongsTo(Entertainment::class);
    }
}
