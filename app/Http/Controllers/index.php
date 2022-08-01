<?php

namespace App\Http\Controllers;

use App\Models\courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class index extends Controller
{
    public function logout(){
        auth::logout();
        return redirect(route('login_res'));
    }

    public function home(){
        $course = courses::all();
        $teacher_id = $course[0]->teacher_id;

        return view('frontend.home',compact(['course']));
    }

}
