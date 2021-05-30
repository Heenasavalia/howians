<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PricingPlans extends Model
{
	protected $table = 'pricing_plans';
    protected $fillable = [
         'name','price' ,'type','status','post_limit'
    ];

    public function fetures()
    {
        return $this->belongsToMany('App\PricingFetures','pricing_paln_fetures','pricing_plan_id','pricing_feture_id');
    }

}
