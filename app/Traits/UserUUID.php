<?php
namespace App\Traits;
use Illuminate\Support\Str;

trait UserUUID{
    protected static function boot()
    {
        parent::boot();
        // Str::uuid();
    static::creating(
            function ($user) {
            $user->{$user->getKeyName()} = (string) Str::uuid();
            // $user->tazkarti_id = uniqid() . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
            $user->save();
        }
    );
    }
    public function getIncrementing(){
        return false;
    }
    public function getKeyType(){
        return 'string';
    }


}
?>
