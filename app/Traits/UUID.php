<?php
namespace App\Traits;
use Illuminate\Support\Str;

trait UUID{
    protected static function bootUUID()
    {
        parent::boot();
        // Str::uuid();
        static::creating(function ($user) {
            $user->{$user->getKeyName()} = (string) Str::uuid();
            $user->save();
        });
    }
    public function getIncrementing(){
        return false;
    }
    public function getKeyType(){
        return 'string';
    }


}
?>