<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApplyCandidate extends Model
{
    protected $table = "applyed_candidate";
    protected $fillable = [
        'user_id','company_id','job_id','description','resume'
    ];
}
