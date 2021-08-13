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
use DB;

class SearchController extends Controller
{
    public function saveProfile(Request $request) {
        $this->validate($request, 
        [
            'keywords'=> 'required',
            'location'=> 'required',
        ]);

        //dd($request['keywords']);die;

        //$course = Course::where('name', 'LIKE', '%'.$request['keywords'].'%')->toSql();
        //$course = Course::where('name', 'LIKE', 'biology')->toSql();
        $courses= Course::query()->where('name', 'LIKE', '%'.$request['keywords'].'%')->get();
        $course_id = array();
        foreach($courses as $course) {
            $course_id[] = $course->id;
        }

        $results = DB::table('course_user')->whereIn('course_id', $course_id)->get();

        $user_ids = array();
        foreach($results as $res) {
            $user_ids[] = $res->user_id;
        }


        $user = new User(); 
        $users = $user->whereIn('id',$user_ids)->paginate(2);
        $user_details = array();

        $i = 0;
        foreach($users as $u) {
            $user_details[$i]['profile_picture'] = $u->profile_picture;
            $user_details[$i]['full_name'] = $u->first_name . $u->last_name ;
            $user_details[$i]['position'] = $u->position;
            $user_details[$i]['phone_number'] = $u->phone_number;
            $i++;
        }
        return view('student.search')->with('users', $user_details);

    }
}
