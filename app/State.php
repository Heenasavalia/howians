<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
     protected $table = "countries";
    protected $fillable = [
        'name','country_id','status'
    ];
}
