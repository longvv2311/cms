<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\course;

class CourseControler extends Controller
{
    public funtion index(),
    {
        //get all resources
        $courses = Course::all();
        return view('courses');
    }
}
