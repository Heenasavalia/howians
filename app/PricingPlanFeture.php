<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PricingPalnFeture extends Model
{
    protected $table = 'pricing_paln_fetures';
    protected $fillable = [
         'pricing_plan_id','pricing_feture_id'
    ];

    // public function pricing_plans()
    // {
    //     return $this->belongsTo('App\PricingPlans');
    // }

    // public function pricing_features()
    // {
    //     return $this->belongsTo('App\PricingFetures');
    // }
}
