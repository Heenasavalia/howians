<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    protected $table = "work_experience";
    protected $fillable = [
        'user_id','company_name','user_experience','work_designation','company_add','start_time','end_time'
    ];
}
