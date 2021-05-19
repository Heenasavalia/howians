<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyGallery extends Model
{
    protected $table = "company_gallery";
    protected $fillable = [
        'company_id', 'image', 'created_at'
    ];

    public function customer()
    {
        return $this->belongsTo('App\Company');
    }
}
