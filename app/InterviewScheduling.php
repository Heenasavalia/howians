<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InterviewScheduling extends Model
{
    protected $table = "interview_schedulings";
    protected $fillable = [
        'company_id','job_requirement_id','interview_time'
    ];
}
