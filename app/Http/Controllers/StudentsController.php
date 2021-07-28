<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


use App\Course;
use App\User;
use App\Program;
use App\Payment_status;
use App\Payment;
use App\Country;



class StudentsController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'IsStudent', 'Active']);
    }



    public function indexStudentProgram()
    {
        $user = Auth()->user();
        $stuPrograms = $user->program()->get();
        $program = $user->program()->latest()->first();
        $pay = $user->program()->latest()->first()->pivot->payment_status;
        $payment_statuz = Payment_status::find($pay);
        return view('student.programs.list')->with('payment_statuz', $payment_statuz)->with('stuPrograms', $stuPrograms);
    }


    public function indexStudentCourse()
    {
        $user = Auth()->user();
        $stuCourses = $user->course()->get();
        return view('student.courses.list')->with('stuCourses', $stuCourses);
    }


    public function storeProfilePicture(Request $request)
    {
            #Validate profile picture
        $this->validate($request,[
            'profile_picture'=>'image|required|max:1999'
        ]);

            // Handle file upload
            if($request->hasFile('profile_picture')){
                // $fileNameWithExt = $request->file('profile_picture')->getClientOriginalName();
                // $filename = pathInfo($fileNameWithExt, PATHINFO_FILENAME);
                // $extension = $request->file('profile_picture')->getClientOriginalExtension();
                // $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                // $filePath = 'images/profile_pictures/'. $fileNameToStore;
                // $path = Storage::disk('local')->put($filePath , fopen($request->file('profile_picture'), 'r+'), 'public');
                // $url = url('/').'/storage/apps/'.$filePath;


                $imagePath = $request['profile_picture']->store('uploads', 'public');

                $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
                $image->save();

                $url = $imagePath;
                

                // $url  = Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix();
                // $url  .= 'images/profile_pictures/'. $fileNameToStore;
                //$url =  url('https://findworkaacad.s3.amazonaws.com/'.$filePath);
                //$path = Storage::disk('s3')->put($filePath , fopen($request->file('profile_picture'), 'r+'), 'public');
                //$url = url('https://findworkaacad.s3.amazonaws.com/'.$filePath);
            }
    
            #Save profile picture on database
            $user = Auth()->user();
            if($request->hasFile('profile_picture')){
                $user->profile_picture = $url;
            }
            $user->save();

        return redirect('/dashboard')->with('success', 'Profile Picture updated successfully');
    }


    public function updateStudentPassword(Request $request)
    {
            #Validate Form
        $this->validate($request,[
            'old_password'=>'required',
            'password'=>'required|confirmed|min:6',
        ]);

        $user= Auth()->user();
        $hashedPassword = $user->password;
        if (Hash::check($request['old_password'], $hashedPassword)) {
            $user->password = \Hash::make($request['password']);
            $user->save();
            return redirect('/dashboard')->with('success', 'Password updated successfuly');
        } else{
            return redirect('/dashboard')->with('error', 'Password incorrect! Kindly input the correct password');
        }
        // $password = \Hash::make($request['old_password']);
        // dd($password)       ;
        // if($user->password != $password ){
        

    }

    public function editProfile()
    {
        if(Auth::user()->suspension->id == 1){
            $roles=Auth::user()->roles()->get();
            foreach($roles as $role){
                if($role->id == 3){
                    $student = Auth::user();
                    $countries= Country::all();
                    return view('student.editprofile')->with('countries', $countries)->with('student',$student);
                }
                elseif($role->id==2){
                    $tutor = Auth::user();
                    $tCourses = $tutor->course()->get();
                    return view('tutor.dashboard')->with('tutor',$tutor)->with('tCourses',$tCourses);
                }
                else{
                    return redirect('/');
                }
            }
        }else{
            return view('user-suspended')->with('success', 'Account Suspended');
        }

    }

    public function saveProfile(Request $request) {
        $this->validate($request, 
        [
            'first_name'=> 'required',
            'country'=> 'required',
            'age'=> 'nullable',
            'state'=> 'nullable',
            'address_line_1'=> 'nullable',
            'address_line_2'=> 'nullable',
            'phone_number'=> 'required',
        ]);


        $user = Auth()->user();
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->full_name = $request['first_name'].$request['last_name'];
        $user->country_id =$request['country'];
        $user->state = $request['state'];
        $user->address_line_1 = $request['address_line_1'];
        $user->address_line_2 = $request['address_line_2'];
        $user->phone_number = $request['phone_number'];
        $user->save();
        return redirect('/dashboard')->with('success', 'You have successfuly updated the profile');
    }

}
