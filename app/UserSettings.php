<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSettings extends Model
{
    protected $table = 'user_settings';
    protected $fillable = [
         'user_id','plan_id' , 'is_select_plan' ,'start_time','end_time',
    ];
}
