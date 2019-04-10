<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table = "orders";
    protected $fillable = [
        'order_id','user_id','car','labor','product','start','namestart','destination','namedestination'
    ];
    public $timestamps = true;
}
