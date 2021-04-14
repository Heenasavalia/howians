<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanySetting extends Model
{
    protected $table = 'company_settings';
    protected $fillable = [
         'company_id','pricing_plan_id' , 'is_select_plan' ,'start_time','end_time',
    ];
}
