<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobRequirement extends Model
{
    protected $table  = "job_requirements";
    protected $fillable = [
        'company_id','job_category','education','email','is_display_email','title','designation',
        'number_of_vacancy',
        'minimum_salary','maximum_salary','other_salary_detail','gender',
        'start_time','end_time','work_experience','work_experiance_type',
        'job_type','work_type','discription','address','location','latitude','longitude',
        'pincode','city','state','country','require_skill', 'slug', 'unique_id','status'
    ];

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

//    public function getCreatedAtAttribute($value)
//    {
//        return date("d F Y H:i", strtotime($value));
//    }

}
