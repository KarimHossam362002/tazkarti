<?php
namespace App\Traits;


use Illuminate\Support\Str;

trait Tazkarti_ID
{
    protected static function bootTazkarti()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->tazkarti_id = 10000000000000;
            $model->save();
        });
    }
    public function getIncrementingTazkarti()
    {
        return true;
    }
    public function getKeyTypeTazkarti()
    {
        return 'integer';
    }

}
?>
