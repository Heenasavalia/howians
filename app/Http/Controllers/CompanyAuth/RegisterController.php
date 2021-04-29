<?php

namespace App\Http\Controllers\CompanyAuth;

use App\Company;
use App\CompanySetting;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/company/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('company.guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return Company
     */
    protected function create(array $data)
    {
//        return Company::create([
//            'first_name' => $data['first_name'],
//            'last_name' => $data['last_name'],
//            'mobile' => $data['mobile'],
//            'email' => $data['email'],
//            'password' => bcrypt($data['password']),
//
//        ]);
//        dd($data);
//        $data['gst_number'] = (isset($data['gst_number']) && $data['gst_number']) ? $data['gst_number'] : null;
//        $data['company_name'] = (isset($data['company_name']) && $data['company_name']) ? $data['company_name'] : null;
//        $data['address'] = (isset($data['address']) && $data['address']) ? $data['address'] : null;
//        $data['location'] = (isset($data['location']) && $data['location']) ? $data['location'] : null;
//        $data['latitude'] = (isset($data['latitude']) && $data['latitude']) ? $data['latitude'] : null;
//        $data['longitude'] = (isset($data['longitude']) && $data['longitude']) ? $data['longitude'] : null;
//        $company = Company::create([
//            'first_name' => $data['first_name'],
//            'last_name' => $data['last_name'],
//            'email' => trim($data['email']),
//            'password' => bcrypt($data['password']),
//            'company_name' => $data['company_name'],
//            'gst_number' => $data['gst_number'],
//            'address' => $data['address'],
//            'location' => $data['location'],
//            'latitude' => $data['latitude'],
//            'longitude' => $data['longitude'],
//            'pincode' => $data['pincode'],
//            'city' => $data['city'],
//            'state' => $data['state'],
//            'country' => $data['country'],
//            'total_experience' => $data['total_experience'],
//            'years_of_establishment' => $data['years_of_establishment'],
//            'user_target' => $data['user_target'],
//            'no_of_employees' => $data['no_of_employees'],
//        ]);
        $data['password'] =  bcrypt($data['password']);
        $company = Company::create($data);
        if ($company) {
            $company_setting = CompanySetting::create([
                'company_id' => $company->id,
            ]);
        }
        return $company;
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('company.auth.register');
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('company');
    }
}
