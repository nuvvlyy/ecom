<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    protected $table = "status";
    protected $fillable = [
        'user_id','track_id','order_id','status','car',	'start','destination',

    ];
    public $timestamps = true;
}