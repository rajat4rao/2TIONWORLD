<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;


use App\User;
use App\Country;
use App\Program;
use App\Address;

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
    protected $redirectTo = '/dashboard';

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
            'name' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
        
        return User::create([
            'full_name' => $data['full_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function showRegistrationForm()
    {
        $programs = Program::all();
        $countries= Country::all();
        // $address = Address::all();
        return view('auth.register')->with('countries', $countries)->with('programs', $programs);
    }

    public function storeRegistrationForm(Request $request)
    {
        $this->validate($request, 
        [
            'username'=> 'required',
            'first_name'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
        ]);


    //    $address = new Address();
    //    $address->name = $request['address'];
    //    $address->save;


        $user= new User();
        $user->username = $request['username'];
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->full_name = $request['first_name']." ".$request['last_name'];
        $user->email = $request['email'];
        $user->password = \Hash::make($request['password']);
        $user->save();
        
        #Attach Program to User
        //$program = $request['program'];
        $user->program()->attach(1);

        $UserProgram = $user->program()->first();
        $userCourses[] = $UserProgram->course()->get();
        
        #Attach Program to User
        foreach($userCourses as $userCourse){
                $user->course()->attach($userCourse);
        };
        $role = 3;
        $user->attachRole($role);
        return redirect('/dashboard')->with('success', 'You have successfuly registered');
    }

    protected function register()
    {
        return redirect('/dashboard');
    }
}
