@extends('admin.usermaster')



@section('user_name',$name)
@section('user_phone','0'.$phone)
@section('user_role',$role)
@section('user_profile_image',asset('image/profile_picture/teacher/'.$image))

@section('page_name',$course_name)
{{--menu--}}


@section('menu_link_1',route('teacher_dashboard'))
@section('menu1','Dashboard')
@section('menu1_icon','bi bi-grid-fill')


@section('menu_link_2',route('add_course'))
@section('menu2','Add Course')
@section('menu2_icon','bi bi-file-earmark-plus')


@section('menu_link_3',route('view_add_topic'))
@section('menu3','Add Topic')
@section('menu3_icon','bi bi-book')

@section('menu4_active','active')
@section('menu_link_4',route('all_course'))
@section('menu4','All Course')
@section('menu4_icon','bi bi-people-fill')

@section('menu5','Analytics')
@section('menu5_icon','bi bi-graph-up-arrow')

@section('menu6','Live')
@section('menu6_icon','bi bi-camera-video-fill')

@section('menu7','Suport Request')
@section('menu7_icon','bi bi-card-text')

@section('menu8','Logout')
@section('menu8_icon','bi bi-box-arrow-left')

<style>


    .thumbnail {
        text-align: center;
        position: relative;
    }
</style>

@section('content')
    <link rel="stylesheet" href="{{asset('assets/css/main/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/app-dark.css')}}">
    <link href="https://vjs.zencdn.net/7.19.2/video-js.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/css/shared/iconly.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <div class="continer">

        <div class="col-12 col-lg-12">

            <div class="row">

                @include('errors')
                @include('notifi')

                <div class="thumbnail">
                    <img src="{{asset('all_course/course_thumbnail/'.$course_name.'/'.$course_pic)}}" class="img-fluid img-thumbnail" alt="...">
                </div>


                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Launch demo modal
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="{{route('single_course_topic',$course_id)}}" method="post">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Topic Here</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                {{csrf_field()}}
                                @include('errors')
                                @include('notifi')
                                <b> <span>Course Name</span>  </b>
                                <select class="form-select" name="course" aria-label="Default select example" disabled>
                                    <option selected>{{$course_name}}</option>
                                </select>
                                <br>

                              <b> <span>Topic Name</span> </b>
                                <input type="text" class="form-control"  name="Topic_Name" id="topic">

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <input type="submit" value="Save" class="btn btn-primary">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>






                <div class="accordion" id="accordionExample">
                    @foreach($course as $courses)

                    <div class="accordion-item ">
                        <h2 class="accordion-header " id="heading{{$courses->id}}">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$courses->id}}" aria-expanded="true" aria-controls="collapse{{$courses->id}}">
                              <h5> <strong>{{$courses->Topic_Name}} </strong> </h5>
                            </button>
                        </h2>
                        <div id="collapse{{$courses->id}}" class="accordion-collapse collapse show" aria-labelledby="heading{{$courses->id}}" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form method="post" action="{{route('add_class',[$courses->course_id,$courses->id])}}" role="form" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col">
                                            <label for="video_title" class="form-label">Video Title</label>
                                            <input type="text" name="video_title" class="form-control" id="video_title">
                                        </div>
                                        <div class="col">
                                            <label for="video" class="form-label">Upload Video Here</label>
                                            <input type="file" class="form-control" id="video" name="class_video">
                                        </div>
                                        <div class="col">
                                            <br>
                                            <input type="submit" class="btn btn-outline-success mt-2 " value="Upload">
                                        </div>
                                    </div>
                                </form>


                                @foreach($content as $class)
                                <div class="row">
                                    <div class="col-md-auto">
                                        @if($class->topic_id  == $courses->id)
{{--                                        <video width="150" height="100" controls>--}}
{{--                                            <source src="{{asset('all_course/content/'.$course_name.'/'.$courses->Topic_Name.'/'.$class->video)}}" type="video/mp4">--}}
{{--                                        </video>--}}



                                            <video
                                                id="my-video"
                                                class="video-js"
                                                controls
                                                preload="auto"
                                                width="250px"
                                                height="150px"
                                                poster=""

                                                data-setup="{}"
                                            >
                                                <source src="{{asset('all_course/content/'.$course_name.'/'.$courses->Topic_Name.'/'.$class->video)}}" type="video/mp4">

                                                <p class="vjs-no-js">
                                                    To view this video please enable JavaScript, and consider upgrading to a
                                                    web browser that
                                                    <a href="https://videojs.com/html5-video-support/" target="_blank"
                                                    >supports HTML5 video</a
                                                    >
                                                </p>
                                            </video>








                                            <br>
                                            <br>
                                            <br>

                                            @endif
                                    </div>
                                    <div class="col-md-auto">
                                        @if($class->topic_id  == $courses->id)

                                            <br>
                                        <h4>{{$class->title}}</h4>
                                            <a href="{{route('delete_class',[$course_id,$class->topic_id,$class->id])}}" onclick="return confirm('Are you sure you want to delete this Class?');" class="btn btn-danger">Delete</a>
                                        @endif
                                    </div>
                                </div>
                                    @endforeach




                            </div>
                        </div>
                    </div>

                    @endforeach


                </div>








                <script src="https://vjs.zencdn.net/7.19.2/video.min.js"></script>
@endsection





























