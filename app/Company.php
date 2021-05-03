<?php

namespace App;

use App\Notifications\CompanyResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

class Company extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'first_name','last_name' ,'mobile','email', 'password',
         'company_name',
         'gst_number','location', 'latitude', 'longitude','city', 'state', 'country', 'pincode',
         'total_experience', 'years_of_establishment', 'status', 'created_at',
         'is_online', 'is_branch_available', 'branch_name', 'branch_place','user_target', 'no_of_employees',
         'nearby_famous_landmark', 'targeted_age_group','pricing_plan_id' , 'is_select_plan' ,'start_time','end_time',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CompanyResetPassword($token));
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d H:i:s');
    }
}
