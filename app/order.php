<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table = "orders";
    protected $fillable = [
        'order_id','user_id','labor','product','start_county','start_zone','namestart','date_start','telstart','destination_county','destination_zone','namedestination','teldestination','date_destination',
        'weight','wide','long','high'
    ];
    public $timestamps = true;
}
