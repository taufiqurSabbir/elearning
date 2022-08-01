<?php

namespace App\Http\Controllers;
use App\Models\content;
use App\Models\course_category;
use App\Models\courses;
use App\Models\Jobs_Cover;
use App\Models\Prerequisites;
use App\Models\Skill_cover;
use App\Models\Topic;
use Illuminate\Support\Facades\File;

use App\Models\students;
use App\Models\teachers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class teacher extends Controller
{
    public function teacher_login_view(){
        return view('teacher.teacher_login');
    }

    public function teacher_login(){
        request() -> validate([
            'phone' => 'required|numeric|digits:10',
        ]);


        $num_check = User::where('phone',request('phone'))->get();
        $role_check =  User::where('phone',request('phone'))->get('user_role');

        if(count($num_check) == 1){
            $role_check = $role_check[0]['user_role'];

                if($role_check=='teacher'){
            $phone = $num_check[0]['phone'];

            User::where('phone',$phone)->update([
                'OTP' =>  random_int(1000, 9999),
                'verify'=>'0',
            ]);

            return redirect(route('teacher.otp',$phone));
                }else{
                    return redirect(route('teacher_login'))->with('failed',"Sorry,You are not a teacher");
                }

        }elseif(count($num_check) < 1){
            return redirect(route('teacher_login'))->with('failed',"Number Not Found. Contract With Authority ");

        }
    }




    public function teacher_otp_confirm($phone){
        request()->validate([
            'otp'=>'required'
        ]);

        $otp_check = User::where('OTP',request('otp'))->get();


        $phone_check = User::where('phone',$phone)->first();

        if(count($otp_check) ==1){

            if($phone_check['phone'] == $phone){
                Auth::login($phone_check);

                User::where('phone',$phone)->update([
                    'verify'=>'1',
                    'OTP' =>  random_int(1000, 9999),
                    'phone_verified_at' => date('d-m-y H:i:s'),

                ]);
                $info_check = User::where('id',Auth::id())->get('info');
                $info_check =  $info_check[0]['info'];
                if($info_check == 0){
                    return redirect(route('teacher_info'));
                }else{
                    return redirect(route('teacher_dashboard'))->with('success','login successfully');
                }
            }
        }else{
            return  back() ->with('failed',"OTP not matched");
        }
//        return view('teacher.teacher_otp_confirmation',compact('phone'));

    }




    public function otp_confirm_view($phone){
        return view('teacher.teacher_otp_confirmation',compact('phone'));
    }



    public function teacher_detiles(){
        return view('teacher.teacher_info');
    }

    public function teacher_submit_info(){
        request()->validate([
            'profile_image'=>'mimes:jpg,bmp,png',
            'name'=>'required',
            'gender'=>'required',
            'institute' =>'required'
        ]);

        $image_name = rand().'.'.request('profile_image')->extension();
        request('profile_image') ->move('image/profile_picture/teacher',$image_name);

        DB::transaction(function () use($image_name){
            \App\Models\teachers::create([
                'teacher_name' => request('name'),
                'subject' => request('subject'),
                'gender' => request('gender'),
                'institute' =>request('institute'),
                'user_id' => Auth::id(),
                'profile_picture' => $image_name,
            ]);
            User::where('id',Auth::id())->update([
                'info'=>'1'
            ]);
        });

        return redirect(route('teacher_dashboard'))->with('success','Registation successfully');


    }



    public function teacher_dashboard(){

        $teacher = teachers::where('user_id',Auth::id())->get();
        $role = User::where('id',Auth::id())->get('user_role');
        $role = $role[0]['user_role'];
        $user = User::where('id',Auth::id())->get();
        $teacher_id = $teacher[0]['id'];
        $name = $teacher[0]['teacher_name'];
        $image = $teacher[0]['profile_picture'];
        $phone = $user[0]['phone'];
        $course = courses::where('teacher_id',auth::id())->get();
        $course_count = count($course);


        return view('teacher.dashboard.dashboard',compact(['name','image','phone','teacher_id','role','course_count']));
    }

    public function add_course_view(){
        $teacher = teachers::where('user_id',Auth::id())->get();
        $role = User::where('id',Auth::id())->get('user_role');
        $role = $role[0]['user_role'];
        $user = User::where('id',Auth::id())->get();
        $teacher_id = $teacher[0]['id'];
        $name = $teacher[0]['teacher_name'];
        $image = $teacher[0]['profile_picture'];
        $phone = $user[0]['phone'];
        $course_category = course_category::all();

        return view('teacher.dashboard.add_course',compact(['name','image','phone','teacher_id','role','course_category']));
    }

    public function submit_course(){




        request()->validate([
            'course_name'=> 'required',
            'course_title'=> 'required',
            'course_price'=> 'required',
            'course_category'=> 'required',
            'description'=> 'required',
            'Prerequisites'=> 'required',
            'Skills'=> 'required',
            'Jobs'=> 'required',
            'thumbnail'=> 'mimes:jpg,bmp,png',
            'badge_image'=> 'mimes:jpg,bmp,png',
            'promo_video'=> 'mimetypes:video/avi,video/mpeg,video/quicktime,video/mp4',
        ]);
            $course_name = request('course_name');
            $badge_path = 'all_course/course_badge/'.$course_name;
            $thumbnail_path = 'all_course/course_thumbnail/'.$course_name;
            $promo_video_path = 'all_course/course_promo/'.$course_name;
            $content = 'all_course/content/'.$course_name;


        DB::transaction(function () use($course_name,$badge_path,$thumbnail_path,$promo_video_path,$content){
            $thumbnail = rand().'.'.request('thumbnail')->extension();
            $badge_image = rand().'.'.request('badge_image')->extension();
            $course_promo = rand().'.'.request('promo_video')->extension();

            \App\Models\courses::create([
                'name' => request('course_name'),
                'title'=> request('course_title'),
                'description'=> request('description'),
                'course_category'=> request('course_category'),
                'price'=> request('course_price'),
                'photo'=> $thumbnail,
                'badge_image'=>  $badge_image ,
                'video'=>   $course_promo ,
                'teacher_id'=>auth::id(),
            ]);


            if(File::isDirectory($badge_path)){
                return back()->with('failed','Course Already Present');
            }else{
                File::makeDirectory($badge_path, 0775, true);
            }

            if(File::isDirectory($thumbnail_path)){
                return back()->with('failed','Course Already Present');
            }else{
                File::makeDirectory($thumbnail_path, 0775, true);
            }

            if(File::isDirectory($promo_video_path)){
                return back()->with('failed','Course Already Present');
            }else{
                File::makeDirectory($promo_video_path, 0775, true);
            }
            if(File::isDirectory($content)){
                return back()->with('failed','Course Already Present');
            }else{
                File::makeDirectory($content, 0775, true);
            }

            request('thumbnail') ->move($thumbnail_path,$thumbnail);
            request('badge_image') ->move($badge_path,$badge_image);
            request('promo_video') ->move($promo_video_path,$course_promo);


        });


        $teacher_id = teachers::where('user_id',auth::id())->get();
        $teacher_id= $teacher_id[0]->id;

        $course_id =  DB::table('courses')
            ->where('name', '=' , request('course_name')  )
            ->where('teacher_id', '=' ,$teacher_id)
            ->get();
        $course_id = $course_id[0]->id;

        Prerequisites::create([
            'prerequisites' => request('Prerequisites'),
            'course_id' =>  $course_id
        ]);

        Skill_cover::create([
            'skill'=> request('Skills'),
            'course_id' =>  $course_id
        ]);
        Jobs_Cover::create([
            'job_sector' => request('Jobs'),
            'course_id' =>  $course_id
        ]);



        return redirect(route('add_course'))->with('success','Course added Successfully');
    }

    public function view_add_topic(){
        $teacher = teachers::where('user_id',Auth::id())->get();
        $role = User::where('id',Auth::id())->get('user_role');
        $role = $role[0]['user_role'];
        $user = User::where('id',Auth::id())->get();
        $teacher_id = $teacher[0]['id'];
        $name = $teacher[0]['teacher_name'];
        $image = $teacher[0]['profile_picture'];
        $phone = $user[0]['phone'];
        $course = courses::where('teacher_id',auth::id())->get();

        return view('teacher.dashboard.add_topic',compact(['name','image','phone','teacher_id','role','course']));
    }


    public function add_topic(){
       request()->validate([
                'Topic_Name' => 'required',
                'course' => 'required'
       ]);

        $topic_name = request('Topic_Name');
        $course_name = courses::where('id',request('course'))->get();
        $course_name = $course_name[0]->name;
        $topic_path = 'all_course/content/'.$course_name.'/'.$topic_name;

        DB::transaction(function () use ($topic_path){
            Topic::create([
                'Topic_Name'=> request('Topic_Name'),
                'course_id' => request('course'),
                'user_id' => auth::id(),
            ]);


            if(File::isDirectory($topic_path)){
                return back()->with('failed','topic Already Present');
            }else{
                File::makeDirectory($topic_path, 0775, true);
            }

        });





        return redirect(route('view_add_topic'))->with('success','topic added Successfully');
    }


    public function edit_course(){
        $teacher = teachers::where('user_id',Auth::id())->get();
        $role = User::where('id',Auth::id())->get('user_role');
        $role = $role[0]['user_role'];
        $user = User::where('id',Auth::id())->get();
        $teacher_id = $teacher[0]['id'];
        $name = $teacher[0]['teacher_name'];
        $image = $teacher[0]['profile_picture'];
        $phone = $user[0]['phone'];
        $course = courses::where('teacher_id',auth::id())->get();

        return view('teacher.dashboard.edit_course',compact(['name','image','phone','teacher_id','role','course']));
    }


    public function all_course(){
        $teacher = teachers::where('user_id',Auth::id())->get();
        $role = User::where('id',Auth::id())->get('user_role');
        $role = $role[0]['user_role'];
        $user = User::where('id',Auth::id())->get();
        $teacher_id = $teacher[0]['id'];
        $name = $teacher[0]['teacher_name'];
        $image = $teacher[0]['profile_picture'];
        $phone = $user[0]['phone'];
        $course = courses::where('teacher_id',auth::id())->get();



//        dd($coure_catagory[0]->name);

        return view('teacher.dashboard.all_course',compact(['name','image','phone','teacher_id','role','course',]));
    }

    public function single_course($course_id){
        $teacher = teachers::where('user_id',Auth::id())->get();
        $role = User::where('id',Auth::id())->get('user_role');
        $role = $role[0]['user_role'];
        $user = User::where('id',Auth::id())->get();
        $teacher_id = $teacher[0]['id'];
        $name = $teacher[0]['teacher_name'];
        $image = $teacher[0]['profile_picture'];
        $phone = $user[0]['phone'];
        $course = courses::where('id',$course_id)->get();
        $course_name = $course[0]->name;
        $course_id = $course[0]->id;

        $course_pic = $course[0]->photo;



      $course =   DB::table('courses')
          ->join('topics', 'courses.id', '=', 'topics.course_id')
          ->where('courses.id', '=' , $course_id  )
          ->where('topics.user_id', '=' , auth::id())

          ->select( 'topics.Topic_Name','topics.id','topics.course_id')

          ->get();

      $content = content::where('course_id',$course_id)->get();


        return view('teacher.dashboard.single_course',compact(['name','image','phone','teacher_id','role','course','course_name','course_pic','content','course_id']));
    }


    public function add_class($course_id,$topic_id){
        request()->validate([
            'video_title' => 'required',
             'class_video'=> 'mimetypes:video/avi,video/mpeg,video/quicktime,video/mp4',
        ]);

        $course_name = courses::where('id',$course_id)->get();
        $course_name = $course_name[0]->name;

        $topic_name = Topic::where('id',$topic_id)->get();
        $topic_name = $topic_name[0]->Topic_Name;

        $content_path = 'all_course/content/'.$course_name.'/'.$topic_name;

        $class_video = rand().'.'.request('class_video')->extension();
        request('class_video') ->move($content_path,$class_video);
        content::create([
            'video'=>$class_video,
            'title' =>request('video_title'),
            'course_id' => $course_id,
            'topic_id' => $topic_id
        ]);



        return Redirect::back()->with('success','class added Successfully');
    }




    public function add_single_course_topic($course_id){
        request()->validate([
            'Topic_Name' => 'required',
        ]);

        $topic_name = request('Topic_Name');
        $course_name = courses::where('id',$course_id)->get();
        $course_name = $course_name[0]->name;
        $topic_path = 'all_course/content/'.$course_name.'/'.$topic_name;

        DB::transaction(function () use ($topic_path,$course_id){
            Topic::create([
                'Topic_Name'=> request('Topic_Name'),
                'course_id' => $course_id,
                'user_id' => auth::id(),
            ]);


            if(File::isDirectory($topic_path)){
                return back()->with('failed','topic Already Present');
            }else{
                File::makeDirectory($topic_path, 0775, true);
            }

        });





        return Redirect::back()->with('success','topic added Successfully');
    }

    public function delete_class($course_id,$topic_id,$content_id){

        $course_name = courses::where('id',$course_id)->get();

        $course_name = $course_name[0]->name;

        $topic_name = Topic::where('id',$topic_id)->get();

        $topic_name = $topic_name[0]->Topic_Name;

        $video_name = content::where('id',$content_id)->get();

        $video_name = $video_name[0]->video;



        $path = 'all_course/content/'.$course_name.'/'.$topic_name.'/'.$video_name;


         content::find($content_id)->delete();


        File::delete($path);

        return redirect::back()->with('success','Class Deleted Successfully');
    }



}
