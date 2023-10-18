<?php
namespace App\Traits;
use Illuminate\Support\Str;

trait UUID{
    protected static function bootUUID()
    {
        // parent::boot();
        // Str::uuid();
        static::creating(function ($user) {
            $user->{$user->getKeyName()} = (string) Str::uuid();
            $user->save();
        });
    }
    public function getUUIDIncrementing(){
        return false;
    }
    public function getUUIDKeyType(){
        return 'string';
    }


}
?>
