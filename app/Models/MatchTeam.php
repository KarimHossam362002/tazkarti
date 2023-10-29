<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchTeam extends Model
{
    use HasFactory , HasUuids;
    protected $fillable = ['id', 'team_id' , "match_id"];
}
