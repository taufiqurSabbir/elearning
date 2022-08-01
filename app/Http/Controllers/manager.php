<?php

namespace App\Http\Controllers;

use App\Models\teachers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class manager extends Controller
{
   public function manager_dash(){

       return view('manager.manager_dash');
   }

   public function add_teacher(){
//       $all_teacher = teachers::Order('','');
       return view('manager.add_teacher');
   }

   public function all_teacher(){
     $all_teacher =  DB::table('users')
           ->select('users.phone','teachers.teacher_name','teachers.subject','teachers.institute','teachers.id')
           ->join('teachers','teachers.user_id','=','users.id')->get();
//      $teacher =  teachers::orderBy('id','DESC')->get();
      return response()->json($all_teacher);
   }

   public function submit_teacher(){
       request()->validate([
           'phone' => 'required|numeric|digits:10',
       ]);
       $add_teacher = User::create([
            'phone' => request('phone'),
            'user_role' => 'teacher',
           'OTP' => random_int(1000, 9999),
        ]);
        return response()->json($add_teacher);
   }

}
