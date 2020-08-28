<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dlab Analytics</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

    </style>


    <style>
        .ourgoalcard {
            box-shadow: none;
        }

        #right_curtain .carousel-inner img {
            object-fit: cover;
        }



        @media only screen and (max-width: 768px) {
            .contact-form {
                margin-top: 25px;
            }

            .btn-send {
                width: 100%;
                padding: 10px;
            }

            .second-portion {
                margin-top: 25px;
            }
        }

        /* Conatct end */


        /* block circular */
        .block {
            border: 0px solid rgb(244, 245, 248);
            text-align: center;
            vertical-align: middle;
        }

        .circle {
            background: #62a087;
            background: images/Beef.jpg;
            background-size: cover;
            border-radius: 400px;
            color: white;
            height: 400px;
            font-weight: bold;
            width: 400px;
            display: table;
            margin: 20px auto;
        }

        .circle p {
            vertical-align: middle;
            font-size: 40px;
            display: table-cell;
        }

        .circle H1 {
            vertical-align: middle;
            display: block;
        }

        .circle H1 i.fa {
            display: inline-block;
            border-radius: 60px;
            box-shadow: 0px 0px 2px #888;
            padding: 0.5em 0.6em;

        }

        .img-circle {
            border-radius: 50%;
        }

        .img__overlay {
            align-items: center;
            bottom: 0;
            display: flex;
            justify-content: center;
            left: 0;
            opacity: 0;
            position: absolute;
            right: 0;
            top: 0;
            transition: opacity 0.25s;
            z-index: 1;
        }

        .img__overlay {
            background-color: rgba(46, 204, 113, 0.4);
            background: linear-gradient(65deg, rgba(46, 204, 113, 0.4), rgba(243, 156, 18, 0.4));
            color: #fafafa;
            font-size: 24px;
        }

        .img__overlay:hover {
            opacity: 1;
        }

        .image-wrapper {
            width: 100%;
            height: 100%;
            background-color: #000;
            border-radius: 50%;
            margin: 0;
            padding: 0;
        }

        .circle img {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            display: block;
            border-radius: 50%;
        }

        /* .img {
        border-radius: 100%;
        display: flex;
        flex: 0 0 150px;
        height: 150px;
        justify-content: center;
        overflow: hidden;
        position: relative;
        width: 150px;
      }

      .img img {
        height: 100%;
      } */

        /* data collection */
        #datacolection {
            background-color: #fff;
            color: #000;

        }

        #aboutTeams {
            padding: 24px background-color: #f3f7f4;
            color: #000;

        }

        #conver {
            background-color: #63f0dc;
        }


        /* footer section */
        /* Footer */
        @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

        section {
            padding: 60px 0;
        }

        section .section-title {
            text-align: center;
            color: #007b5e;
            margin-bottom: 50px;
            text-transform: uppercase;
        }

        #footer {
            background: #00ccb6 !important;
        }

        #footer h5 {
            padding-left: 10px;
            border-left: 3px solid #eeeeee;
            padding-bottom: 6px;
            margin-bottom: 20px;
            color: #130909;
        }

        #footer a {
            color: #130909;
            text-decoration: none !important;
            background-color: transparent;
            -webkit-text-decoration-skip: objects;
        }

        #footer ul.social li {
            padding: 3px 0;
        }

        #footer ul.social li a i {
            margin-right: 5px;
            font-size: 25px;
            -webkit-transition: .5s all ease;
            -moz-transition: .5s all ease;
            transition: .5s all ease;
        }

        #footer ul.social li:hover a i {
            font-size: 30px;
            margin-top: -10px;
        }

        #footer ul.social li a,
        #footer ul.quick-links li a {
            color: #130f0f;
        }

        #footer ul.social li a:hover {
            color: #130909;
        }

        #footer ul.quick-links li {
            padding: 3px 0;
            -webkit-transition: .5s all ease;
            -moz-transition: .5s all ease;
            transition: .5s all ease;
        }

        #footer ul.quick-links li:hover {
            padding: 3px 0;
            margin-left: 5px;
            font-weight: 700;
        }

        #footer ul.quick-links li a i {
            margin-right: 5px;
        }

        #footer ul.quick-links li:hover a i {
            font-weight: 700;
        }

        .sliderHead {
            font-size: 65px;
            color: #fff;
        }

        /* contact section */
        body {
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
            font-family: 'PT Sans', sans-serif;
            letter-spacing: 0px;
            font-size: 18px;
            color: #525756;
            font-weight: 400;
            line-height: 2;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #272d2c;
            margin: 0px 0px 15px 0px;
            font-weight: 400;
            font-family: 'PT Sans', sans-serif;
        }

        h1 {
            font-size: 42px;
            line-height: 42px;
        }

        h2 {
            font-size: 30px;
            line-height: 32px;
        }

        h3 {
            font-size: 24px;
            line-height: 30px;
        }

        h4 {
            font-size: 18px;
            line-height: 26px;
        }

        h5 {
            font-size: 16px;
            font-weight: 400;
        }

        h6 {
            font-size: 12px;
            font-weight: 400;
        }

        p {
            margin: 0 0 20px;
            line-height: 1.6;
        }

        p:last-child {
            margin: 0px;
        }

        ul,
        ol {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
            color: #272d2c;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            transition: all 0.3s;
        }

        a:focus,
        a:hover {
            text-decoration: none;
            color: #f8591b;
        }

        sub {
            bottom: 0em;
        }

        .lead {
            font-size: 23px;
            font-weight: 400;
            line-height: 1.5;
            font-family: 'PT Serif', serif;
            color: #272d2c;
            margin-bottom: 40px;
        }


        .form-group {
            margin-bottom: 5px;
        }

        .form-control {
            border-radius: 0px;
            color: #6b6c6d;
            font-size: 14px;
            font-weight: 600;
            width: 100%;
            height: 52px;
            padding: 0px;
            line-height: 1.42857143;
            border-top: transparent;
            border-left: transparent;
            border-right: transparent;
            border-bottom: 1px solid #cbcfce;
            background-color: transparent;
            text-transform: uppercase;
            letter-spacing: 0px;
            margin-bottom: 10px;
            -webkit-box-shadow: inset 0 0px 0px rgba(0, 0, 0, .075);
            box-shadow: inset 0 0px 0px rgba(0, 0, 0, .075);
        }

        .form-control:focus {
            color: #34b2a4 !important;
            outline: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
            border-bottom-color: #34b2a4;
            font-size: 12px;
        }

        .input-group {
            position: relative;
            display: table;
            border-collapse: separate;
        }

        input[type=checkbox],
        input[type=radio] {
            margin: 8px 0 0;
            margin-top: 12px;
            line-height: normal;
        }

        input::-webkit-input-placeholder {
            color: #6b6c6d !important;
        }

        input:focus::-webkit-input-placeholder {
            color: #34b2a4 !important;
            bottom: 20px;
            position: relative;
        }

        textarea::-webkit-input-placeholder {
            color: #6b6c6d !important;
        }

        textarea:focus::-webkit-input-placeholder {
            color: #34b2a4 !important;
            bottom: 20px;
            position: relative;
            font-size: 12px;
        }

        .input-group-addon {
            background-color: transparent;
            border: 1px solid #34b2a4;
            border-radius: 0px;
        }

        .focus {
            border-top: transparent;
            border-left: transparent;
            border-right: transparent;
            border-bottom: 1px solid #cbcfce;
            background-color: #fff;
        }

        .focus:focus {
            border-top: transparent;
            border-left: transparent;
            border-right: transparent;
            border-bottom: 1px solid #cbcfce;
            outline: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .has-success .form-control {
            border-color: #3c763d;
            background-color: #fff;
            box-shadow: none;
        }

        .has-success .form-control:focus {
            border-color: #3c763d;
            outline: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .has-error .form-control {
            border-color: #a94442;
            background-color: #fff;
            box-shadow: none;
        }

        .has-error .form-control:focus {
            border-color: #34b2a4;
            outline: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .input-group-addon:last-child {
            border-left: 0;
            border-right: transparent;
            border-top: transparent;
        }

        .input-group-addon i {
            color: #34b2a4;
        }

        option {
            color: #6b6c6d;
        }

        hr {
            border-top: 1px solid #e4e9e8;
            margin-bottom: 40px;
            margin-top: 40px;
        }

        .mb60 {
            margin-bottom: 60px;
        }

        .btnContact {
            font-family: 'PT Sans', sans-serif;
            font-size: 16px;
            text-transform: capitalize;
            font-weight: 600;
            /* padding: 11px 30px; */
            border-radius: 6px;
            line-height: 1.8;
            letter-spacing: 0px;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            transition: all 0.3s;
            word-wrap: break-word;
            white-space: normal !important;
        }

        .btn-primary {
            background-color: #f8591b;
            color: #fff;
            border: 1px solid #f8591b;
        }

        .btn-primary:hover {
            background-color: #e64c10;
            color: #fff;
            border: 1px solid #e64c10;
        }

        .btn-primary.focus,
        .btn-primary:focus {
            background-color: #e64c10;
            color: #fff;
            border: 1px solid #e64c10;
        }

        .space-medium {
            padding-top: 80px;
            padding-bottom: 80px;
        }

        .pdt20 {
            padding-top: 20px;
        }

        .contact-pageheader {
            position: relative;
            background: rgba(145, 238, 226, 1);
            background: -moz-linear-gradient(left, rgba(145, 238, 226, 1) 0%, rgba(145, 238, 226, 1) 22%, rgba(145, 238, 226, 1) 31%, rgba(145, 238, 226, 1) 39%, rgba(57, 196, 182, 1) 71%, rgba(57, 196, 182, 1) 100%);
            background: -webkit-gradient(left top, right top, color-stop(0%, rgba(145, 238, 226, 1)), color-stop(22%, rgba(145, 238, 226, 1)), color-stop(31%, rgba(145, 238, 226, 1)), color-stop(39%, rgba(145, 238, 226, 1)), color-stop(71%, rgba(57, 196, 182, 1)), color-stop(100%, rgba(57, 196, 182, 1)));
            background: -webkit-linear-gradient(left, rgba(145, 238, 226, 1) 0%, rgba(145, 238, 226, 1) 22%, rgba(145, 238, 226, 1) 31%, rgba(145, 238, 226, 1) 39%, rgba(57, 196, 182, 1) 71%, rgba(57, 196, 182, 1) 100%);
            background: -o-linear-gradient(left, rgba(145, 238, 226, 1) 0%, rgba(145, 238, 226, 1) 22%, rgba(145, 238, 226, 1) 31%, rgba(145, 238, 226, 1) 39%, rgba(57, 196, 182, 1) 71%, rgba(57, 196, 182, 1) 100%);
            background: -ms-linear-gradient(left, rgba(145, 238, 226, 1) 0%, rgba(145, 238, 226, 1) 22%, rgba(145, 238, 226, 1) 31%, rgba(145, 238, 226, 1) 39%, rgba(57, 196, 182, 1) 71%, rgba(57, 196, 182, 1) 100%);
            background: linear-gradient(to right, rgba(145, 238, 226, 1) 0%, rgba(145, 238, 226, 1) 22%, rgba(145, 238, 226, 1) 31%, rgba(145, 238, 226, 1) 39%, rgba(57, 196, 182, 1) 71%, rgba(57, 196, 182, 1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#91eee2', endColorstr='#39c4b6', GradientType=1);
            margin-bottom: 70px;
        }

        .contact-caption {
            position: relative;
            top: 180px;
        }

        .contact-title {
            font-family: 'PT Serif', serif;
            font-size: 50px;
            font-style: italic;
            margin-bottom: 40px;
            line-height: 80px;
        }

        .contact-caption-text {
            font-size: 23px;
            color: #272d2c;
        }

        #contact-map {
            height: 450px;
            width: 100%;
            position: relative;
        }

        .contact-form {
            background-color: #fff;
            padding: 30px;
            text-align: center;
            position: relative;
            bottom: 0px;
            top: 100px;
            -webkit-box-shadow: 1px 2px 14px 0px rgba(0, 0, 0, 0.29);
            -moz-box-shadow: 1px 2px 14px 0px rgba(0, 0, 0, 0.29);
            box-shadow: 1px 2px 14px 0px rgba(0, 0, 0, 0.29);
        }

        .contact-section {
            margin-bottom: 40px;
            margin-top: 40px;
            padding-bottom: 30px;
            border-bottom: 1px solid #e4e9e8;
        }

        .contact-section .contact-icon {
            float: left;
            margin-bottom: 20px;
            display: inline-block;
            font-size: 25px;
            color: #34b2a4;
            padding-right: 20px;
            position: initial;
        }

        .contact-section .contact-info {
            padding-top: 10px;
            font-weight: 700;
        }

        .contact-social {}

        .contact-social ul {}

        .contact-social ul li {
            float: left;
        }

        .contact-social ul li a {
            font-size: 16px;
            padding-right: 10px;
            color: #6b6c6d;
        }

        .contact-social ul li a:hover {
            color: #0084bf;
        }

        .location-block {
            border-radius: 2px;
            border: 1px solid #eaeaea;
            padding: 30px;
            margin-bottom: 20px;
            background-color: #fff;
        }

        .location-content {}

        .location-block ul {}

        .location-block ul li {
            line-height: 2.2;
            font-size: 15px;
        }

        .location-icon {
            color: #0084bf;
            padding-right: 10px;
            font-size: 15px;
        }

        /* .nav-content {
          padding-top: 67px;
      } */
        @media (max-width:767px) {
            #footer h5 {
                padding-left: 0;
                border-left: transparent;
                padding-bottom: 0px;
                margin-bottom: 10px;
            }
        }

        .pat_title {
            background-image: url("images/dlab/dlab_pat.png");
            background-repeat: repeat-x;
            height: 100px;
        }
        }

        .carousel-inner .carousel-item img {
            max-height: 780px !important;

        }

        .testclass {
            background-image: url("images/slider/grid_b.jpg"), linear-gradient(rgba(0, 0, 0, 0.15), rgba(0, 180, 217, 0.3));
            background-blend-mode: overlay;
            height: 660px;
        }

        .testclass_head_img {
            background-image: url("images/slider/grid.jpg"), linear-gradient(rgba(0, 0, 0, 0.15), rgba(0, 180, 217, 0.3));
            background-blend-mode: overlay;
            height: 760px;
        }

        .d-md-block {
            padding-top: 350px;
        }

    </style>

</head>

<body>
    {{-- <div class="flex-center position-ref full-height"> --}}
    <div class="flex-center position-ref">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>
            {{--
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
            @endif --}}
            @endauth
        </div>
        @endif

        <div class="content">
            <main>
                <div class="container-fluid testclass_head_img">
                    <div class="d-md-block">
                        <div class="text-center">

                            <h5 style="font-size: 86px; font-weight: 800;  padding: 10px;">Data Analytics Platform</h5>
                            <p style="font-size: 26px; padding: 10px;">We are creative tech heads who like to write
                                code, program softwares and develop information systems that might help someone,
                                community or business improve its productivity.
                                We hope with our vast knowledge in technology and development of various technology
                                products we have something to contribute in the industry to elevate it to its full
                                potential.
                                What we want</p>
                        </div>
                    </div>
                </div>
                <br />
                <br />



                <h1 class="heading-1">Data Management and Industry Insights </h1>
                <p class="paragraph-1 text-center">With the platform all stakeholders in the business will have access
                    to a wide range of data</p>
                <div class="row">
                    <div class="col-md-offset-2 col-md-4">
                        <div class="card col-md-8">
                            <img src="images/card/data_col.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title">Data Collection Platform </h4>
                                <p class="card-text">assists members and industry stakeholders to track productivity.
                                </p>
                                <!-- <a href="#" class="btn btn-outline-read-more">Read More</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-offset-1 col-md-4">
                        <div class="card col-md-8">
                            <img src="images/card/dash.png" alt="" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title">Analytics Platform </h4>
                                <p class="card-text">Record keeping, information management and data processing</p>
                                <!-- <a href="#" class="btn btn-outline-read-more">Read More</a> -->
                            </div>
                        </div>
                    </div>

                </div>
        </div>


        </main>
    </div>
    </div>
</body>

</html>
