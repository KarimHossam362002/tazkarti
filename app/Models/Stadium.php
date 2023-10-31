<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    use HasFactory ;
    protected $fillable = ['name' , 'city' , 'location' , 'status'];
    protected $table = 'stadiums';
    public function match(){
        return $this->hasOne(Matche::class);
    }

}
