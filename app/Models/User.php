<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Traits\UUID;
use App\Traits\Tazkarti_id;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


// use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable , UUID , Tazkarti_id;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'tazkarti_id',
        'name',
        'email',
        'password',
        'image',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    // use this only in User model because of double IDs
    protected static function boot()
    {
        parent::boot();


        self::bootUUID();


        self::bootTazkarti_id();

        // Your other boot logic here
    }

    // add this when using UUID in any model
    public function getIncrementing()
    {
        return false;
    }
    // add this when using UUID in any model
    public function getKeyType()
    {
        return 'string';
    }
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
