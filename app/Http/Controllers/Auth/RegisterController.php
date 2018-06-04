<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Validation\Rule;
use Route;
use App\Setting;
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
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    private $tenant_id = "";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {   
        $this->middleware('guest');
        $route = Route::current();
        $this->tenant_id = config('tenant');
    //    dd($route);

    }

    public function showRegistrationForm(){
        $setting = new Setting();
        $settings = $setting->getSettingsByTenant(config('tenant'));
        return view('auth.register')->with('settings',$settings);
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
            'firstname' => 'required|string|max:255',
            'lastname' => 'string|max:255',
            'fullname' => 'string|max:255',
            'email' => 'required|string|email|max:255',
            'email' => Rule::unique('users')->where(function ($query) {
                return $query->where('tenant_id', config('tenant'));
            }),

            'password' => 'required|string|min:6|confirmed',
            'skypeid'  => 'string|max:100',
            'phonework'=> 'string|max:50',
            'phonemobile'=> 'string|max:50',
            'street1'=> 'string|max:100',
            'street2'=> 'string|max:100',
            'city'=> 'string|max:100',
            'state'=> 'string|max:100',
            'postalcode'=> 'string|max:100',
            'companyname'=> 'string|max:100',
            'website'=> 'string|max:100',
            'twitter'=> 'string|max:100'
        ]);
    }
    

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $data['password'] =  Hash::make($data['password']);
        $data['tenant_id'] =  $this->tenant_id;
        return User::create($data);
    }
}
