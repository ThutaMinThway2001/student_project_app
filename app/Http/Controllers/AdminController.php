<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
        $courseCount = Course::all()->count();
        $userCount = User::all()->count();

        return view('Admin.Admin', [
            'courseCount' => $courseCount,
            'userCount' => $userCount,
        ]);
    }

    function createProject(){
        return view('Admin.CreateProject');
    }

    function postProject(){
        $validation = request()->validate([
            'name' => 'required',
            'detail' => 'required',
            'fees' => 'required'
        ]);

        if($validation){
            $name = request('name');
            $detail = request('detail');
            $fees = request('fees');

            $course = new Course();
            $course->name = $name;
            $course->detail = $detail;
            $course->fees = $fees;
            $course->save();

            return redirect()->route('home');
        }else{
            return back()->with('error', 'something wrong!');
        }
    }

    function basicClass(){
        return view('Admin.BasicClass');
    }

    function n5Class(){
        return view('Admin.N5Class');
    }

    function n4Class(){
        return view('Admin.N4Class');
    }

    function userLists(){
        $users = User::all();

        return view('Admin.UserLists', [
            'users' => $users
        ]);
    }

    function deleteProject($id){
        $deleteProject = Course::find($id);
        $deleteProject->delete();

        return redirect()->route('home');
    }
}
