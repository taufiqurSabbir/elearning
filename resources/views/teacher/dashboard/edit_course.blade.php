@extends('admin.usermaster')



@section('user_name',$name)
@section('user_phone','0'.$phone)
@section('user_role',$role)
@section('user_profile_image',asset('image/profile_picture/teacher/'.$image))

@section('page_name','Add Course')
{{--menu--}}
@section('menu_link_1',route('teacher_dashboard'))
@section('menu1','Dashboard')
@section('menu1_icon','bi bi-grid-fill')


@section('menu_link_2',route('add_course'))
@section('menu2_active','active')
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

    <style>
        .title {
            width: 24rem;
        }

        textarea {
            width: 55rem;
        }

        input,
        textarea {
            border: 1px solid rgb(72, 150, 240);
            border-radius: 0.5rem;
        }

        input {
            height: 2.5rem;
            overflow: auto;
        }

        .thumbnail img {
            display: block;
            width: 55rem;

        }

        .thumbnail {
            position: relative;
        }

        .overlay {
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            background-color: rgba(0, 0, 0, 0.55);
            display: none;

        }

        .overlay .content h2 {
            text-transform: capitalize;
            padding-top: 22%;
            color: white;
        }

        .thumbnail:hover .overlay {
            display: block;
        }

        .accordion table tr {
            width: 100%;
        }
        .accordion table tr td{
            padding:1.5rem;
        }
        .accordion table tr td input{
            border-color:rgba(0, 0, 0, 0.22);
            height:auto;
            width:15rem;
            color:rgba(0, 0, 0, 0.16)
        }
        .accordion table tr td a{
            text-decoration:none;
            background-color: rgb(72, 150, 240);
            color:white;
            padding: 0.75em;
            border-radius: 0.5rem
        }
        .accordion table tr td a{

        }

        .accordion table tr .video img {
            width: 15rem;
            display:block;
        }
        .accordion table tr .video{
            position:relative;
        }
        .accordion table tr .video .overlay{
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            background-color: rgba(0, 0, 0, 0.55);
            display: none;
        }
        .accordion table tr .video:hover .overlay{
            display:block;
        }

        /* RESPONSIVE CSS */

        /* XS portarit */


        @media (max-width: 575.98px) {
            html {
                font-size: 6px;
            }

            #catagory_section .card {
                margin-top: 0 !important;
            }
        }

        /* S landscape */

        @media (min-width: 576px) and (max-width:767.98px) {
            html {
                font-size: 10px;
            }
        }

        /* M landscape */

        @media (min-width: 768px) and (max-width: 991.98px) {
            html {
                font-size: 10px;
            }
        }

        /* L landscape */

        @media (min-width: 992px) and (max-width: 1199.98px) {
            html {
                font-size: 14px;
            }
        }


        /* XL */

        @media (min-width: 1200px) and (max-width: 1439.98px) {
            html {
                font-size: 14px;
            }
        }

        /* XXL */

        @media (min-width: 1440px) and (max-width: 1599.98px) {
            html {
                font-size: 15px;
            }
        }

        /* 4k */
        @media (min-width: 1600px) {
            html {
                font-size: 20px;
            }
        }

        /* RESPONSIVE CSS */
    </style>

    <form action="">
            <div class="page-content">
                <section class="row">
                    <div class="row">
                        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <div class="d-flex justify-content-center m-5">
                                <div class="thumbnail">
                                    <div class="overlay">
                                        <div class=" content d-flex align-items-center justify-content-center">
                                            <h2>click to change the thumbnail</h2>
                                        </div>
                                    </div><img src="image\course.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="d-flex justify-content-end m-5">
                                <div>
                                    <div class="heading">
                                        <h5 class="my-3">Course Titile</h5>
                                    </div><input class="title" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="d-flex justify-content-start m-5">
                                <div>
                                    <div class="heading">
                                        <h5 class="my-3">Course Price</h5>
                                    </div><input class="price" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <div class="d-flex justify-content-center m-5">
                                    <div>
                                        <div class="heading">
                                            <h5 class="my-3">Course Overveiw</h5>
                                        </div><textarea class="overview" name="" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <div class="d-flex justify-content-center">
                                    <div class="accordion m-5" style="width: 55rem;" id="module_section">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="mod-1"><button class="accordion-button"
                                                                                            type="button" data-bs-toggle="collapse" data-bs-target="#mod-1-body"
                                                                                            aria-expanded="true" aria-controls="mod-1-body">Accordion Item #1 </button>
                                            </h2>
                                            <div id="mod-1-body" class="accordion-collapse collapse show"
                                                 aria-labelledby="mod-1" data-bs-parent="#module_section">
                                                <div class="accordion-body">
                                                    <table class="table-responsive mod video">
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="video">
                                                                    <div class="overlay">

                                                                    </div><img src="image\course.webp" alt="">
                                                                </div>
                                                            </td>
                                                            <td> <input type="text" placeholder="#sample name of video">
                                                            </td>
                                                            <td><a href="#">Delete</a></td>
                                                            <td><a href="#">Edit</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="video">
                                                                    <div class="overlay">

                                                                    </div><img src="image\course.webp" alt="">
                                                                </div>
                                                            </td>
                                                            <td> <input type="text" placeholder="#sample name of video">
                                                            </td>
                                                            <td><a href="#">Delete</a></td>
                                                            <td><a href="#">Edit</a></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="mod-2"><button class="accordion-button"
                                                                                            type="button" data-bs-toggle="collapse" data-bs-target="#mod-2-body"
                                                                                            aria-expanded="false" aria-controls="mod-2-body">Accordion Item #1 </button>
                                            </h2>
                                            <div id="mod-2-body" class="accordion-collapse collapse show"
                                                 aria-labelledby="mod-2" data-bs-parent="#module_section">
                                                <div class="accordion-body">
                                                    <table class="table-responsive mod video">
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="video">
                                                                    <div class="overlay">

                                                                    </div><img src="image\course.webp" alt="">
                                                                </div>
                                                            </td>
                                                            <td> <input type="text" placeholder="#sample name of video">
                                                            </td>
                                                            <td><a href="#">Delete</a></td>
                                                            <td><a href="#">Edit</a></td>
                                                        </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="mod-3"><button class="accordion-button"
                                                                                            type="button" data-bs-toggle="collapse" data-bs-target="#mod-3-body"
                                                                                            aria-expanded="false" aria-controls="mod-3-body">Accordion Item #1 </button>
                                            </h2>
                                            <div id="mod-3-body" class="accordion-collapse collapse show"
                                                 aria-labelledby="mod-3" data-bs-parent="#module_section">
                                                <div class="accordion-body">
                                                    <table class="table-responsive mod video">
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="video">
                                                                    <div class="overlay">

                                                                    </div><img src="image\course.webp" alt="">
                                                                </div>
                                                            </td>
                                                            <td> <input type="text" placeholder="#sample name of video">
                                                            </td>
                                                            <td><a href="#">Delete</a></td>
                                                            <td><a href="#">Edit</a></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
            </div>
        </form>


@endsection
