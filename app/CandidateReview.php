<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CandidateReview extends Model
{
    protected $table = "candidate_review";
 	protected $fillable = [
 		'user_id','company_id','job_id','rate','description'
 	];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function job() {
        return $this->belongsTo('App\JobRequirement');
    }
}
