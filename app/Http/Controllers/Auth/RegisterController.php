<?php

namespace App\Http\Controllers\Auth;

use App\Role;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'terms'    =>'accepted'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     * This function is used in the trait up to handle user creation
     * if need add something to the user before create this is the right place
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'avatar'=> 'noavatar.png',
            'email' => $data['email'],
            'username' => $data['email'],
            'api_token' => str_random(60),
            'password' => bcrypt($data['password']),
        ]);
        //To assign a default role
        $tenantRole= Role::query()->where('name','tenant')->first();
        if($tenantRole){
            $user->attachRole($tenantRole);
        }


        return $user;

        /*return User::create([
            'name' => $data['name'],
            'avatar'=> 'noavatar.png',
            'email' => $data['email'],
            'username' => $data['email'],
            'api_token' => str_random(60),
            'password' => bcrypt($data['password']),
        ]);*/
    }


}
