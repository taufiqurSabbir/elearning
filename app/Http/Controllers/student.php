<?php

namespace App\Http\Controllers;

use App\Models\students;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class student extends Controller
{
   public function student_res_view(){
    return view('student_login');
   }



    public function student__res_login(){

        request() -> validate([
            'phone' => 'required|numeric|digits:10',
        ]);


       $num_check = User::where('phone',request('phone'))->get();

if(count($num_check) == 1){

    $phone = $num_check[0]['phone'];
        $otp = random_int(1000, 9999);
    User::where('phone',$phone)->update([
        'OTP' => $otp ,
        'verify'=>'0',
    ]);


    return redirect(route('otp',$phone));


}elseif(count($num_check) < 1){

    User::create([
        'phone'=> request('phone'),
        'OTP' =>  random_int(1000, 9999),
        'user_role' => 'student',
        'verify'=>'0',

    ]);
    $num_check = User::where('phone',request('phone'))->get();
    $phone = $num_check[0]['phone'];

   return redirect(route('otp',$phone));

}
   }

    public function otp_confirm_view($phone){
        return view('otp_confarmation',compact('phone'));

    }

    public function otp_confirm($phone){

//        Auth::attempt([
//            'OTP' =>request('otp'),
//            'phone' =>$phone,
//        ]);
//
//        if(Auth::check()){
//            User::where('phone',$phone)->update([
//                'verify'=>'1',
//                'OTP' =>  random_int(1000, 9999),
//                'phone_verified_at' => date('d-m-y H:i:s'),
//
//            ]);
//            return redirect(route('student_dashboard'))->with('success','login successfully');
//        }else{
//            return  back() ->with('failed',"OTP not matched");
//        }

       $otp_check = User::where('OTP',request('otp'))->get();


        $phone_check = User::where('phone',$phone)->first();

       if(count($otp_check) ==1){
           Auth::login($phone_check);

           User::where('phone',$phone)->update([
               'verify'=>'1',
               'OTP' =>  random_int(1000, 9999),
               'phone_verified_at' => date('d-m-y H:i:s'),

           ]);
           $info_check = User::where('id',Auth::id())->get('info');
            $info_check =  $info_check[0]['info'];
            if($info_check == 0){
                return redirect(route('student_info'));
            }else{
                return redirect(route('student_dashboard'))->with('success','login successfully');
            }

       }else{
           return  back() ->with('failed',"OTP not matched");
       }
        return view('otp_confirm',compact('phone'));

    }


    public function student_detiles(){
       return view('student_frontend.student_information');
    }


    public function submit_student_info(){
       request()->validate([
           'profile_image'=>'mimes:jpg,bmp,png',
           'name'=>'required',
           'gender'=>'required'
       ]);

        $image_name = rand().'.'.request('profile_image')->extension();
        request('profile_image') ->move('image/profile_picture',$image_name);

        DB::transaction(function () use($image_name){
            \App\Models\students::create([
                'student_name' => request('name'),
                'gender' => request('gender'),
                'user_id' => Auth::id(),
                'profile_picture' => $image_name,
            ]);
            User::where('id',Auth::id())->update([
                'info'=>'1'
            ]);
        });

        return redirect(route('student_dashboard'))->with('success','Registation successfully');


    }

    public function student_dashboard(){
       $student = students::where('user_id',Auth::id())->get();
       $user = User::where('id',Auth::id())->get();
       $student_id = $student[0]['id'];
       $name = $student[0]['student_name'];
       $image = $student[0]['profile_picture'];
       $phone = $user[0]['phone'];
        $bar = 20;



       return view('student_frontend.dashboard.student_dashboard',compact(['name','image','phone','student_id','bar']));

    }

    public function my_course(){
        $student = students::where('user_id',Auth::id())->get();
        $user = User::where('id',Auth::id())->get();
        $student_id = $student[0]['id'];
        $name = $student[0]['student_name'];
        $image = $student[0]['profile_picture'];
        $phone = $user[0]['phone'];
        $bar = 20;



        return view('student_frontend.dashboard.my_course',compact(['name','image','phone','student_id','bar']));

    }



}
