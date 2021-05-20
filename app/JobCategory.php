<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
 	protected $table = "job_categories";
 	protected $fillable = [
 		'name','parent_id','created_at'
 	];

}
