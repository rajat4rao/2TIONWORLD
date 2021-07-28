<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

use App\User;
use App\Role;
use App\Course;
use App\Program;
use App\Country;


class TutorsDashboardController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'IsTutor', 'Active']);
    }


        
    // public function getDashboard()
    // {
    //     return view('tutor.dashboard');
    // }


        #COURSE MANAGEMENT
    public function indexCourse()
    {
        $courses = Course::all();
        return view('tutor.courses.list')->with('courses', $courses);
    }

    public function indexTutCourse()
    {
        $user = Auth()->user();
        // $role = $user->role->first()->name;
        // dd($role);
        $tutCourses = $user->course()->get();
        // dd($tutCourses);
        // foreach($tutCourses as $tutCourse){
        //     $tutCs [] = $tutCourse->program(['name'])->first();
        // }
        // // dd($tutCs);
        // dd($tutCourses);
        // $courses = Course::all();
        return view('tutor.courses.tut-list')->with('tutCourses', $tutCourses);
    }


    public function studentsCourse()
    {
        $user = Auth()->user();
        $tutCourses = $user->course()->get();
        
        return view('tutor.students.students-course')->with('tutCourses', $tutCourses);
    }
 

    // public function indexTutStudent()
    // {
    //     $user = Auth()->user();
    //     $tutCourses = $user->course()->get();
    //     // dd($tutCourses);
    //     // $students = User::whereRoleIs('Student')->get();
    //     $students = User::whereRoleIs('Student')->get();
    //     // dd($students);
    //     // foreach($students as $student){
    //     //     for($x=0; $x< count($tutCourses); $x++){
    //     //         $me[] = $student->where('course' == $tutCourses[$x]);
    //     //     } 
    //     // }
    //     // dd($me);
    //     for($x=0; $x< count($tutCourses); $x++){
    //         $tutorCourses[] = $tutCourses[$x];
    //     }
    //     // dd($tutorCourses);
    //     foreach($tutorCourses as $tutorCourse){
    //         for($x=0; $x< count($tutCourses); $x++){
    //         $tutStudents[] = $tutorCourse->user()->whereRoleIs('Student')->get();
    //         // $tutStudents[] =  $tutCourse->user()->first();
    //         // $hewo = array_merge($tutStudents[$x],$tutStudents[$x++]);
    //     }
    // };
    //     dd($tutStudents);
    //     // dd($tutPrograms);
    //     // dd($tutCourses);
    //     //     foreach($tutPrograms as $tutProgram){
    //     //         $tutStudents[] = $tutProgram->user()->first();
    //     //    (array_merge($a1,$a2)) }
    //     $cc = 0;
    //     if($cc <= count($tutStudents))
    //     foreach($tutStudents as $tutStudent){
    //         $naya[] = array_merge(array($tutStudent[0]), array($tutStudent[1]));
    //         $cc++;
    //     }

    //     function addAllArrays(){

    //     }
    //     dd($naya);

    //     dd(array_merge($tutStudents,$tutStudents[1]));
    //     foreach($tutStudents[0] + $tutStudents[1] as $tutStudent){
    //         $una[] = $tutStudent->firstname;
    //     }
    //     dd($una);
    //     dd($tutStudents[0]);
    //         // foreach($tutStudents as $tutStudent){
    //         //     // $students[] = $tutProgram->user()->first() ;
    //         //     $courze[] =$tutStudent->program()->course->get();
    //         // }
    //         // dd($courze);
    //         // dd($student->firstname);
    //     // $course = Course::all();
    //     // $programz = Program::all();
    //     // dd($programz);
    //     // $programs = $course->program()->id->get(['']);;
    //     // dd($programs);
       
    //     // $tutPrograms = $tutCourses->program($id)->get();
    //     // dd($tutPrograms);
    //     // // dd($tutCourses);
    //     // // dd($tutCourses);
    //     // // $courses = Course::all();
    //     return view('tutor.students.tut-list')->with('tutStudents', $tutStudents);
    // }


    public function showTutCourseStudent($id)
    {
        $tutor = Auth()->user();
        // dd($user);
        $tutCourse = $tutor->course()->find($id);
        // $tPrograms[] = $tutCourse->program;
        // $role = $tutor->roles;
        // dd($tutCourse);
        // if($role->first()->id == 2){
        $tStudents = $tutCourse->user()->whereRoleIs('Student')->get();
        // foreach($tStudents as $tStudent){
        //     $heret[]= $tStudent->id()->get();
        // }
        // dd($tStudents);
        // foreach($tStudents as $tStudent){
        //     $tutorStudents = User::whereRoleIs('Student')->get();
        // }
        //     // $roles [] = $tStudent->role()->first();
        //     dd($tutorStudents);
        //     $result=array_diff($tutorStudents,$tStudents);
        //     dd($result);
        // foreach($tStudents as $tStudent){
        //     if(in_array($tStudent, $tutorStudents)){
        //        return 'ohoiuiu';
        //     }
        //     // $tStudents[] = $tutorStudents->where('id',$tStudent->first()->id);
            
        // }
        // dd($holla);
        // dd($tutorStudents);
        // if ($tStudent->roles()->id == 3){
        // $tutorStudents [] = $tStudent;
        // }
        // // }
        // dd($tutorStudents);
        // foreach($tPrograms as $tProgram){
        //     $tStudents[] = $tProgram->user()->first();
        // }
        // // $courzes = $user->course(['id'])->get();
        
        return view('tutor.students.tut-list')->with('tStudents', $tStudents)->with('tutCourse', $tutCourse);
    }

    public function storeProfilePicture(Request $request)
    {
            #Validate profile picture
        $this->validate($request,[
            'profile_picture'=>'image|required|max:1999'
        ]);

            // Handle file upload
        if($request->hasFile('profile_picture')){
            $fileNameWithExt = $request->file('profile_picture')->getClientOriginalName();
            $filename = pathInfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('profile_picture')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $filePath = 'images/profile_pictures/'. $fileNameToStore;
            $path = Storage::disk('s3')->put($filePath , fopen($request->file('profile_picture'), 'r+'), 'public');
            $url = url('https://findworkaacad.s3.amazonaws.com/'.$filePath);
        }

        #Save profile picture on database
        $user = Auth()->user();
        if($request->hasFile('profile_picture')){
            $user->profile_picture = $url;
        }
        $user->save();

        return redirect('/dashboard')->with('success', 'Profile Picture updated successfully');
    }


    public function updateTutorPassword(Request $request)
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
                    $countries= Country::all();
                    return view('tutor.editprofile')->with('countries', $countries)->with('tutor',$tutor)->with('tCourses',$tCourses);
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
            'position' => 'required',
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
        $user->position = $request['position'];
        $user->save();
        return redirect('/dashboard')->with('success', 'You have successfuly updated the profile');
    }



    public function storeCourse(Request $request)
    {
        $this->validate($request, 
        [
            'name'=> 'required',
            'description'=> 'nullable',
        ]);

        $course= new Course();
        $course->name = $request['name'];
        $course->description = $request['description'];
        $course->save();

        $program = $request['program'];
        $course->program()->attach(1);

        $user = Auth()->user();
        $user->course()->attach($course);
        
        return redirect('dashboard/tut-courses')->with('success', 'Course has been created successfully');
    }
 



}
