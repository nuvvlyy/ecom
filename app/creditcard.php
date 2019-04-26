<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class creditcard extends Model
{
    protected $table = "creditcards";
    protected $fillable = [
        'user_id','credit_id','exp_date','cvv','name','lastname'
    ];
    public $timestamps = true;
}
