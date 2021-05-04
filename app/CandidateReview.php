<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CandidateReview extends Model
{
    protected $table = "candidate_review";
 	protected $fillable = [
 		'user_id','company_id','job_id','rate','description'
 	];
}
