<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    protected $table = "companies";
    protected $fillable = [
        'user_id','nameoforcompany','idoftax','field','addressofcom','zipcode','country','city','zone','tel'
    ];
    public $timestamps = true;
}