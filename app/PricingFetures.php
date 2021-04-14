<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PricingFetures extends Model
{
    protected $table = 'pricing_fetures';
    protected $fillable = [
         'name'
    ];

    public function plans()
    {
        return $this->belongsToMany('App\PricingPlans');
    }
}
