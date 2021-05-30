<?php

namespace App\Http\Middleware;

use App\JobRequirement;
use App\PricingPlans;
use Closure;
use Illuminate\Support\Facades\Auth;

class SelectedPlan
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $company = Auth::user();
        if ($company->is_select_plan == true) {
            $select_plan = $company->pricing_plan_id;
            $plan_post_limit = PricingPlans::select('post_limit')->where('id', $select_plan)->first()->post_limit;
            $total_added_job = JobRequirement::where('company_id', $company->id)->count();
            // dd($total_added_job < $plan_post_limit);
            if ($plan_post_limit == -1) {
                return $next($request);
            } else if ($total_added_job < $plan_post_limit) {
                return $next($request);
            } else {
                return redirect('company/plan-selection')->with('warning', 'Upgrad Your Plan For More Add Job Requirement');
            }
        } else {
            $msg = 'It is done, <a href="' . url('/user/profile') . '"> click here  </a>  to see the result';
            return redirect('company/plan-selection')->with('warning', 'First Select Plans After You Add Post');
        }
    }
}
