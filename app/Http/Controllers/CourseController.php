<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    function index(){
        $courses = Course::all();

        return view("Index", [
            'courses' => $courses
        ]);
    }

    function aboutUs(){
        return view("AboutUs");
    }

    function course(){
        return view('Course');
    }
}
