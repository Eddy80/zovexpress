<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    protected function create(Request $request)  //array $data
    {
       /* return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);*/

      //  dd($request->all());

        $validator =  $this->validate($request,[
            'firstname'=> 'required',
            'lastname'=> 'required',
            'email'=> 'required|email|unique:users',
            'password'=> 'required',
            'phone'=> 'required',
            'passport'=> 'required',

            //'avatar' => 'nullable|image'
        ]);



        $user = User::add($request->all());

        $userid = $user->id;
        $code = $request->get('userkod');

        $codearray = explode("-",$code);

        $info = substr($codearray[0], 0, 1);

        $country = (int) substr($codearray[0], 1, strlen($codearray[0])-1);

        $countryinfoid = -1;
        if ($info == 'S')
            $countryinfoid = 1;
        if ($info == 'A')
            $countryinfoid = 2;


        DB::table('codes')->insert([
            ['userid' => $userid, 'code' => $code, 'countryid' => $country, 'countryinfoid' => $countryinfoid]

        ]);

       // dd($user);
        return redirect('/tracking');
    }


    protected function createsimple(Request $request)  //array $data
    {
       //   dd($request->all());

        $validator =  $this->validate($request,[

            'firstname'=> 'required',
            'lastname'=> 'required',
            'email'=> 'required|email|unique:users',
            'password'=> 'required',
            'phone'=> 'required',
            'passport'=> 'required',


        ]);


        $user = User::add($request->all());

        $userid = $user->id;
        $code = $request->get('userkod');

        $codearray = explode("-",$code);

        $info = substr($codearray[0], 0, 1);

        $country = (int) substr($codearray[0], 1, strlen($codearray[0])-1);

        $countryinfoid = -1;
        if ($info == 'S')
            $countryinfoid = 1;
        if ($info == 'A')
            $countryinfoid = 2;


        DB::table('codes')->insert([
            ['userid' => $userid, 'code' => $code, 'countryid' => $country, 'countryinfoid' => $countryinfoid]

        ]);

        // dd($user);

    }
}
