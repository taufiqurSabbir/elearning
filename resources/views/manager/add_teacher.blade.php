@extends('admin.usermaster')



@section('user_name','sabbir')
@section('user_phone','0179294545')
@section('user_role','manager')
@section('user_profile_image',asset('image/profile_picture/teacher/'))

@section('page_name','Student Dashboard')
{{--menu--}}

@section('menu_link_1',route('manager_dash'))
@section('menu1','Dashboard')
@section('menu1_icon','bi bi-grid-fill')

@section('menu2_active','active')

@section('menu_link_2',route('add_teacher'))
@section('menu2','Add Course')
@section('menu2_icon','bi bi-file-earmark-plus')

@section('menu3','My Course')
@section('menu3_icon','bi bi-book')

@section('menu4','All Students')
@section('menu4_icon','bi bi-people-fill')

@section('menu5','Analytics')
@section('menu5_icon','bi bi-graph-up-arrow')

@section('menu6','Live')
@section('menu6_icon','bi bi-camera-video-fill')

@section('menu7','Suport Request')
@section('menu7_icon','bi bi-card-text')

@section('content')
    <link rel="stylesheet" href="{{asset('assets/css/main/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main/app-dark.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/shared/iconly.css')}}">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Course</th>
                        <th scope="col">Institute</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>

{{--                    <tr>--}}
{{--                        <th scope="row"></th>--}}
{{--                        <td></td>--}}
{{--                        <td></td>--}}
{{--                        <td></td>--}}
{{--                        <td></td>--}}

{{--                        <td>--}}
{{--                            <a href="#" class="btn btn-success btn-sm">Edit</a>--}}
{{--                            <a href="#" class="btn btn-danger btn-sm">Delete</a>--}}
{{--                        </td>--}}
{{--                    </tr>--}}

                    </tbody>
                    <tfoot>
                    ...
                    </tfoot>
                </table>
            </div>
            <div class="col-4">
                <style>
                    .teacher_input{

                        padding: 2rem;
                        background-color: rgba(216, 224, 238, 0.87);
                        border-radius: 0rem 0rem 3rem 3rem;

                    }
                    .from_title{
                        padding: 1rem;
                        background-color: #d8e0ee;
                        border: none;
                        border-radius: 3rem 3rem 0rem 0rem;
                        text-align: center;
                    }
                </style>
                <div class="">
                <form action="">
                    @include('errors')
                    @include('notifi')
                    <div class="teacher_input card" style=" background-color: #d8e0ee;">
                        <div style="text-align: center">
                            <h3 id="addtechertitle">Add New Teacher</h3>

                            <h3 id="updatetechertitle" >Update Teacher</h3>

                        </div>


                        <label for="mobile"  class="form-label">Mobile Number:</label>
                        <input type="number" name="mobile" id="mobile" class="form-control" placeholder="Teacher's Mobile No">
                        <br>
                        <div class="d-grid gap-2">
                        <input type="submit" value="Add Teacher" onclick="add_teacher()" id="addbtn" class="btn btn-success p-3">
                        <input type="submit" value="Update Teacher" id="updatebtn" class="btn btn-success p-3">
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>



    <script>
        $('#addtechertitle').show();
        $('#updatetechertitle').hide();

        $('#addbtn').show();
        $('#updatebtn').hide();

        $.ajaxSetup(
            {
                header:{
                    'X-CSRF-TOKEN': $('meta [name="csrf-token"]').attr('content')
                }
            }
        )


        // $(document).ready(function(){
        //     $("button").click(function(){
        //         $.ajax({url: "all/teacher", success: function(result){
        //                console.log(result)
        //             }});
        //     });
        // });



        function all_teacher(){
            $.ajax({
                type: "GET",
                dataType: 'json',
                url:'{{route('all_teacher')}}',
                success:function(response){
                    var data ="";
                    $.each(response,function(key,value){
                       data = data + " <tr>"
                        data = data + " <th scope='row'>"+value.id+"</th>"
                        data = data + "<td>"+value.teacher_name+"</td>"
                        data = data + "<td>"+"0"+value.phone+"</td>"
                        data = data + "<td>"+value.subject+"</td>"
                        data = data + "<td>"+value.institute+"</td>"
                        data = data + "<td>"
                        data = data+ " <a href='#' class='btn btn-success btn-sm'>Edit</a>"
                        data = data + " <a href='#' class='btn btn-danger btn-sm'>Delete</a>"
                        data = data + "</td>"
                       data = data + " </tr>"
                    })
                    $('tbody').html(data);
                }
                })
        }

     all_teacher();

        function add_teacher(){
                var phone = $('#mobile').val()

            $.ajax({
                type: "POST",
                dataType: 'json',
                data:{phone:phone},
                url:'{{route('submit_teacher')}}',
                success:function(response){
                    alert("Teacher Added",response)
                }})

        }
        add_teacher();
    </script>
@endsection
