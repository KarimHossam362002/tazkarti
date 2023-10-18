<?php
namespace App\Traits;
use Illuminate\Support\Str;

trait Tazkarti_id{
    protected static function bootTazkarti_id()
    {
        // parent::boot();

        static::creating(function ($user) {
            $user->tazkarti_id = uniqid() . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT); // Set a value for the other column
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
