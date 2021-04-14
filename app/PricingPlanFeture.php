<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PricingPalnFeture extends Model
{
    protected $table = 'pricing_paln_fetures';
    protected $fillable = [
         'pricing_plan_id','pricing_feture_id'
    ];
}
