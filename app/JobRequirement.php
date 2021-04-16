<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobRequirement extends Model
{
    protected $table  = "job_requirements";
    protected $filleble = [
    	'email','is_display_email','title','designation','number_of_vacancy','minimum_salary','maximum_salary','other_salary_detail','start_time','end_time','work_experience','job_type','work_type','discription','address','location','latitude','longitude','pincode','city','state','country'
    ];
}
