@extends('admin.usermaster')



@section('user_name',$name)
@section('user_phone','0'.$phone)
@section('user_role',$role)
@section('user_profile_image',asset('image/profile_picture/teacher/'.$image))

@section('page_name','All Course')
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

@section('content')
    <link rel="stylesheet" href="{{asset('assets/css/main/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/app-dark.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/shared/iconly.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <div class="continer">

        <div class="col-12 col-lg-12">
            <div class="row">



                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Course Name</th>
                        <th scope="col">Course Title</th>
                        <th scope="col">price</th>
                        <th scope="col">Date Of Publish</th>
                        <th scope="col">Courses Status</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($course as $courses)
                    <tr>

                        <td>{{$courses->name}}</td>
                        <td>{{$courses->title}}</td>
                        <td>{{$courses->price}}</td>
                        <td>{{$courses->created_at}}</td>
                        <td>{{$courses->created_at}}</td>
                        <td>
                            {{ (App\Models\course_category::find($courses->course_category))->name }}
                        </td>


                        <td>
                            <a type="button" href="{{route('single_course',$courses->id)}}" class="btn btn-success btn-sm">Add Class</a>
                            <button type="button" class="btn btn-success btn-sm">Edit</button>
                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                        </td>

                    </tr>
                        @endforeach
                    </tbody>
                </table>




            </div>
        </div>






@endsection
