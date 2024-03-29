<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dlab Admin') }}</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        /*
        DEMO STYLE
        */
        @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";


        body {
        font-family: 'Poppins', sans-serif;
        background: #fafafa;
        }

        p {
        font-family: 'Poppins', sans-serif;
        font-size: 1.1em;
        font-weight: 300;
        line-height: 1.7em;
        color: #999;
        }

        a, a:hover, a:focus {
        color: inherit;
        text-decoration: none;
        transition: all 0.3s;
        }

        .navbar {
        padding: 15px 10px;
        background: #fff;
        border: none;
        border-radius: 0;
        margin-bottom: 40px;
        box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }

        .navbar-btn {
        box-shadow: none;
        outline: none !important;
        border: none;
        }

        .line {
        width: 100%;
        height: 1px;
        border-bottom: 1px dashed #ddd;
        margin: 40px 0;
        }

        /* ---------------------------------------------------
        SIDEBAR STYLE
        ----------------------------------------------------- */
        #sidebar {
        width: 250px;
        position: fixed;
        top: 0;
        left: 0;
        height: 100vh;
        z-index: 999;
        background: #0488ae;
        color: #fff;
        transition: all 0.3s;
        }

        #sidebar.active {
        margin-left: -250px;
        }

        #sidebar .sidebar-header {
        padding: 20px;
        background: #0488ae;
        }

        #sidebar ul.components {
        padding: 20px 0;
        border-bottom: 1px solid #0488ae;
        }

        #sidebar ul p {
        color: #fff;
        padding: 10px;
        }

        #sidebar ul li a {
        padding: 10px;
        font-size: 1.1em;
        display: block;
        }
        #sidebar ul li a:hover {
        color: #0488ae;
        background: #fff;
        }

        #sidebar ul li.active > a, a[aria-expanded="true"] {
        color: #fff;
        background: #0488ae;
        }


        a[data-toggle="collapse"] {
        position: relative;
        }

        a[aria-expanded="false"]::before, a[aria-expanded="true"]::before {
        content: '\e259';
        display: block;
        position: absolute;
        right: 20px;
        font-family: 'Glyphicons Halflings';
        font-size: 0.6em;
        }
        a[aria-expanded="true"]::before {
        content: '\e260';
        }


        ul ul a {
        font-size: 0.9em !important;
        padding-left: 30px !important;
        background: #6d7fcc;
        }

        ul.CTAs {
        padding: 20px;
        }

        ul.CTAs a {
        text-align: center;
        font-size: 0.9em !important;
        display: block;
        border-radius: 5px;
        margin-bottom: 5px;
        }
        a.download {
        background: #fff;
        color: #0488ae;
        }
        a.article, a.article:hover {
        background: #6d7fcc !important;
        color: #fff !important;
        }


        /* ---------------------------------------------------
        CONTENT STYLE
        ----------------------------------------------------- */
        #content {
        width: calc(100% - 250px);
        padding: 40px;
        min-height: 100vh;
        transition: all 0.3s;
        position: absolute;
        top: 0;
        right: 0;
        }
        #content.active {
        width: 100%;
        }


        /* ---------------------------------------------------
        MEDIAQUERIES
        ----------------------------------------------------- */
        @media (max-width: 768px) {
        #sidebar {
            margin-left: -250px;
        }
        #sidebar.active {
            margin-left: 0;
        }
        #content {
            width: 100%;
        }
        #content.active {
            width: calc(100% - 250px);
        }
        #sidebarCollapse span {
            display: none;
        }
        }






        .wrimagecard{
        margin-top: 0;
        margin-bottom: 1.5rem;
        text-align: left;
        position: relative;
        background: #fff;
        box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
        border-radius: 4px;
        transition: all 0.3s ease;
        }
        .wrimagecard .fa{
        position: relative;
        font-size: 70px;
        }
        .wrimagecard-topimage_header{
        padding: 20px;
        }
        a.wrimagecard:hover, .wrimagecard-topimage:hover {
        box-shadow: 2px 4px 8px 0px rgba(46,61,73,0.2);
        }
        .wrimagecard-topimage a {
        width: 100%;
        height: 100%;
        display: block;
        }
        .wrimagecard-topimage_title {
        padding: 20px 24px;
        height: auto;
        padding-bottom: 0.75rem;
        position: relative;
        }
        .wrimagecard-topimage a {
        border-bottom: none;
        text-decoration: none;
        color: #525c65;
        transition: color 0.3s ease;
        }


        </style>

        <style>
        /*! * Start Bootstrap - Simple Sidebar (http://startbootstrap.com/) * Copyright 2013-2016 Start Bootstrap * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap/blob/gh-pages/LICENSE) */
        body {
         overflow-x: hidden;
        }

        .icon-font-size
        {
        font-size: 22px;
        }
        /* Toggle Styles */
        #wrapper {
         padding-left: 0;
         -webkit-transition: all 0.5s ease;
         -moz-transition: all 0.5s ease;
         -o-transition: all 0.5s ease;
         transition: all 0.5s ease;
        }
        #wrapper.toggled {
         padding-left: 250px;
        }
        #sidebar-wrapper {
         z-index: 1000;
         position: fixed;
         left: 250px;
         width: 0;
         height: 100%;
         margin-left: -250px;
         overflow-y: auto;
         background: #0488ae;
         -webkit-transition: all 0.5s ease;
         -moz-transition: all 0.5s ease;
         -o-transition: all 0.5s ease;
         transition: all 0.5s ease;
        }
        #wrapper.toggled #sidebar-wrapper {
         width: 250px;
        }
        #page-content-wrapper {
         width: 100%;
         position: absolute;
         padding: 15px;
        }
        #wrapper.toggled #page-content-wrapper {
         position: absolute;
         margin-right: -250px;
        }
        /* Sidebar Styles */
        .sidebar-nav {
         position: absolute;
         top: 0;
         width: 250px;
         margin: 0;
         padding: 0;
         list-style: none;
        }
        .sidebar-nav li {
         text-indent: 20px;
         line-height: 40px;
        }
        .sidebar-nav li a {
         display: block;
         text-decoration: none;
         color: #ffffff;
        }
        .sidebar-nav li a:hover {
         text-decoration: none;
         color: #fff;
         background: rgba(255,255,255,0.2);
        }
        .sidebar-nav li a:active, .sidebar-nav li a:focus {
         text-decoration: none;
        }
        .sidebar-nav > .sidebar-brand {
         height: 65px;
         font-size: 18px;
         line-height: 60px;
        }
        .sidebar-nav > .sidebar-brand a {
         color: #ffffff;
         background-color: black
        }
        .sidebar-nav > .sidebar-brand a:hover {
         color: #fff;
         background: none;
        }
        @media(min-width:768px) {
         #wrapper {
             padding-left: 0;
        }
         #wrapper.toggled {
             padding-left: 250px;
        }
         #sidebar-wrapper {
             width: 0;
        }
         #wrapper.toggled #sidebar-wrapper {
             width: 250px;
        }
         #page-content-wrapper {
             padding: 20px;
             position: relative;
        }
         #wrapper.toggled #page-content-wrapper {
             position: relative;
             margin-right: 0;
        }
        }
        /* .navbar-default {
         background-color: #eeeeee;
         border-bottom: 2px solid #0488ae;
        }
        .navbar {
         min-height: 50px;
        }
        @media (min-width: 768px) {
         .navbar-nav > li > a {
             padding-top: 10px;
             padding-bottom: 10px;
        }
        }
        .navbar {
         margin-bottom: 2px;
        } */
        .card {
         display: inline-block;
         position: relative;
         width: 100%;
         margin: 25px 0;
         box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.14);
         border-radius: 3px;
         color: rgba(0,0,0, 0.87);
         background: #fff;
        }
        .card .card-height-indicator {
         margin-top: 100%;
        }
        .card .title {
         margin-top: 0;
         margin-bottom: 5px;
        }
        .card .card-image {
         height: 60%;
         position: relative;
         overflow: hidden;
         margin-left: 15px;
         margin-right: 15px;
         margin-top: -30px;
         border-radius: 6px;
        }
        .card .card-image img {
         width: 100%;
         height: 100%;
         border-radius: 6px;
         pointer-events: none;
        }
        .card .card-image .card-title {
         position: absolute;
         bottom: 15px;
         left: 15px;
         color: #fff;
         font-size: 1.3em;
         text-shadow: 0 2px 5px rgba(33, 33, 33, 0.5);
        }
        .card .category:not([class*="text-"]) {
         color: #999999;
        }
        .card .card-content {
         padding: 15px 20px;
        }
        .card .card-content .category {
         margin-bottom: 0;
        }
        .card .card-header {
         box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
         margin: -20px 15px 0;
         border-radius: 3px;
         padding: 15px;
         background-color: #f1f1f1;
        }
        .card .card-header .title {
         color: #FFFFFF;
        }
        .card .card-header .category {
         margin-bottom: 0;
         color: rgba(255, 255, 255, 0.62);
        }
        .card .card-header.card-chart {
         padding: 0;
         min-height: 160px;
        }
        .card .card-header.card-chart + .content h4 {
         margin-top: 0;
        }
        .card .card-header .ct-label {
         color: rgba(255, 255, 255, 0.7);
        }
        .card .card-header .ct-grid {
         stroke: rgba(255, 255, 255, 0.2);
        }
        .card .card-header .ct-series-a .ct-point, .card .card-header .ct-series-a .ct-line, .card .card-header .ct-series-a .ct-bar, .card .card-header .ct-series-a .ct-slice-donut {
         stroke: rgba(255, 255, 255, 0.8);
        }
        .card .card-header .ct-series-a .ct-slice-pie, .card .card-header .ct-series-a .ct-area {
         fill: rgba(255, 255, 255, 0.4);
        }
        .card .chart-title {
         position: absolute;
         top: 25px;
         width: 100%;
         text-align: center;
        }
        .card .chart-title h3 {
         margin: 0;
         color: #FFFFFF;
        }
        .card .chart-title h6 {
         margin: 0;
         color: rgba(255, 255, 255, 0.4);
        }
        .card .card-footer {
         margin: 0 20px 10px;
         padding-top: 10px;
         border-top: 1px solid #eeeeee;
        }
        .card .card-footer .content {
         display: block;
        }
        .card .card-footer div {
         display: inline-block;
        }
        .card .card-footer .author {
         color: #999999;
        }
        .card .card-footer .stats {
         line-height: 22px;
         color: #999999;
         font-size: 12px;
        }
        .card .card-footer .stats .material-icons {
         position: relative;
         top: 4px;
         font-size: 16px;
        }
        .card .card-footer h6 {
         color: #999999;
        }
        .card img {
         width: 100%;
         height: auto;
        }
        .card .category .material-icons {
         position: relative;
         top: 6px;
         line-height: 0;
        }
        .card .category-social .fa {
         font-size: 24px;
         position: relative;
         margin-top: -4px;
         top: 2px;
         margin-right: 5px;
        }
        .card .author .avatar {
         width: 30px;
         height: 30px;
         overflow: hidden;
         border-radius: 50%;
         margin-right: 5px;
        }
        .card .author a {
         color: #3C4858;
         text-decoration: none;
        }
        .card .author a .ripple-container {
         display: none;
        }
        .card .table {
         margin-bottom: 0;
        }
        .card .table tr:first-child td {
         border-top: none;
        }
        .card [data-background-color="orange"] {
         background: linear-gradient(60deg, #0488ae, #0488ae);
        /*box-shadow: 0 12px 20px -5px #bfeaf6, 0 4px 20px 0px #bfeaf6, 0 7px 8px -5px #bfeaf6;
        */
        }
        .card [data-background-color] {
         color: #FFFFFF;
        }
        .card [data-background-color] a {
         color: #FFFFFF;
        }
        .card-stats .title {
         margin: 0;
        }
        .card-stats .card-header {
         float: left;
         text-align: center;
        }
        .card-stats .card-header i {
         font-size: 36px;
         line-height: 56px;
         width: 56px;
         height: 56px;
        }
        .card-stats .card-content {
         text-align: right;
         padding-top: 10px;
        }
        .card-nav-tabs .header-raised {
         margin-top: -30px;
        }
        .card-nav-tabs .nav-tabs {
         background: transparent;
         padding: 0;
        }
        .card-nav-tabs .nav-tabs-title {
         float: left;
         padding: 10px 10px 10px 0;
         line-height: 24px;
        }
        .card-plain {
         background: transparent;
         box-shadow: none;
        }
        .card-plain .card-header {
         margin-left: 0;
         margin-right: 0;
        }
        .card-plain .content {
         padding-left: 5px;
         padding-right: 5px;
        }
        .card-plain .card-image {
         margin: 0;
         border-radius: 3px;
        }
        .card-plain .card-image img {
         border-radius: 3px;
        }

        .navdropdown{
        background-color: #0488ae;
        }

        /* meant for the updateBatchData */
        .spcbelow{
        padding-top: 50;
        }

        .iconsz img{
            height: 50px;
            width: 30px;
        }

.dashrecentimpresttbl{
    background-color: #0488ae;
    color: #eeeeee;

}
.dashrecentretirementstbl{
    background-color: #00BCD4;
    color: #eeeeee;
}



        ///timezone_location_get
        a{text-decoration:none}
    h4{text-align:center;margin:30px 0;color:#444}
    .main-timeline{position:relative}
    .main-timeline:before{content:"";width:5px;height:100%;border-radius:20px;margin:0 auto;background:#242922;position:absolute;top:0;left:0;right:0}
    .main-timeline .timeline{display:inline-block;margin-bottom:50px;position:relative}
    .main-timeline .timeline:before{content:"";width:20px;height:20px;border-radius:50%;border:4px solid #fff;background:#ec496e;position:absolute;top:50%;left:50%;z-index:1;transform:translate(-50%,-50%)}
    .main-timeline .timeline-icon{display:inline-block;width:130px;height:130px;border-radius:50%;border:3px solid #ec496e;padding:13px;text-align:center;position:absolute;top:50%;left:30%;transform:translateY(-50%)}
    .main-timeline .timeline-icon i{display:block;border-radius:50%;background:#ec496e;font-size:64px;color:#fff;line-height:100px;z-index:1;position:relative}
    .main-timeline .timeline-icon:after,.main-timeline .timeline-icon:before{content:"";width:100px;height:4px;background:#ec496e;position:absolute;top:50%;right:-100px;transform:translateY(-50%)}
    .main-timeline .timeline-icon:after{width:70px;height:50px;background:#fff;top:89px;right:-30px}
    .main-timeline .timeline-content{width:50%;padding:0 50px;margin:52px 0 0;float:right;position:relative}
    .main-timeline .timeline-content:before{content:"";width:70%;height:100%;border:3px solid #ec496e;border-top:none;border-right:none;position:absolute;bottom:-13px;left:35px}
    .main-timeline .timeline-content:after{content:"";width:37px;height:3px;background:#ec496e;position:absolute;top:13px;left:0}
    .main-timeline .title{font-size:20px;font-weight:600;color:#ec496e;text-transform:uppercase;margin:0 0 5px}
    .main-timeline .description{display:inline-block;font-size:16px;color:#404040;line-height:20px;letter-spacing:1px;margin:0}
    .main-timeline .timeline:nth-child(even) .timeline-icon{left:auto;right:30%}
    .main-timeline .timeline:nth-child(even) .timeline-icon:before{right:auto;left:-100px}
    .main-timeline .timeline:nth-child(even) .timeline-icon:after{right:auto;left:-30px}
    .main-timeline .timeline:nth-child(even) .timeline-content{float:left}
    .main-timeline .timeline:nth-child(even) .timeline-content:before{left:auto;right:35px;transform:rotateY(180deg)}
    .main-timeline .timeline:nth-child(even) .timeline-content:after{left:auto;right:0}
    .main-timeline .timeline:nth-child(2n) .timeline-content:after,.main-timeline .timeline:nth-child(2n) .timeline-icon i,.main-timeline .timeline:nth-child(2n) .timeline-icon:before,.main-timeline .timeline:nth-child(2n):before{background:#f9850f}
    .main-timeline .timeline:nth-child(2n) .timeline-icon{border-color:#f9850f}
    .main-timeline .timeline:nth-child(2n) .title{color:#f9850f}
    .main-timeline .timeline:nth-child(2n) .timeline-content:before{border-left-color:#f9850f;border-bottom-color:#f9850f}
    .main-timeline .timeline:nth-child(3n) .timeline-content:after,.main-timeline .timeline:nth-child(3n) .timeline-icon i,.main-timeline .timeline:nth-child(3n) .timeline-icon:before,.main-timeline .timeline:nth-child(3n):before{background:#8fb800}
    .main-timeline .timeline:nth-child(3n) .timeline-icon{border-color:#8fb800}
    .main-timeline .timeline:nth-child(3n) .title{color:#8fb800}
    .main-timeline .timeline:nth-child(3n) .timeline-content:before{border-left-color:#8fb800;border-bottom-color:#8fb800}
    .main-timeline .timeline:nth-child(4n) .timeline-content:after,.main-timeline .timeline:nth-child(4n) .timeline-icon i,.main-timeline .timeline:nth-child(4n) .timeline-icon:before,.main-timeline .timeline:nth-child(4n):before{background:#2fcea5}
    .main-timeline .timeline:nth-child(4n) .timeline-icon{border-color:#2fcea5}
    .main-timeline .timeline:nth-child(4n) .title{color:#2fcea5}
    .main-timeline .timeline:nth-child(4n) .timeline-content:before{border-left-color:#2fcea5;border-bottom-color:#2fcea5}
    @media only screen and (max-width:1200px){.main-timeline .timeline-icon:before{width:50px;right:-50px}
    .main-timeline .timeline:nth-child(even) .timeline-icon:before{right:auto;left:-50px}
    .main-timeline .timeline-content{margin-top:75px}
    }
    @media only screen and (max-width:990px){.main-timeline .timeline{margin:0 0 10px}
    .main-timeline .timeline-icon{left:25%}
    .main-timeline .timeline:nth-child(even) .timeline-icon{right:25%}
    .main-timeline .timeline-content{margin-top:115px}
    }
    @media only screen and (max-width:767px){.main-timeline{padding-top:50px}
    .main-timeline:before{left:80px;right:0;margin:0}
    .main-timeline .timeline{margin-bottom:70px}
    .main-timeline .timeline:before{top:0;left:83px;right:0;margin:0}
    .main-timeline .timeline-icon{width:60px;height:60px;line-height:40px;padding:5px;top:0;left:0}
    .main-timeline .timeline:nth-child(even) .timeline-icon{left:0;right:auto}
    .main-timeline .timeline-icon:before,.main-timeline .timeline:nth-child(even) .timeline-icon:before{width:25px;left:auto;right:-25px}
    .main-timeline .timeline-icon:after,.main-timeline .timeline:nth-child(even) .timeline-icon:after{width:25px;height:30px;top:44px;left:auto;right:-5px}
    .main-timeline .timeline-icon i{font-size:30px;line-height:45px}
    .main-timeline .timeline-content,.main-timeline .timeline:nth-child(even) .timeline-content{width:100%;margin-top:-15px;padding-left:130px;padding-right:5px}
    .main-timeline .timeline:nth-child(even) .timeline-content{float:right}
    .main-timeline .timeline-content:before,.main-timeline .timeline:nth-child(even) .timeline-content:before{width:50%;left:120px}
    .main-timeline .timeline:nth-child(even) .timeline-content:before{right:auto;transform:rotateY(0)}
    .main-timeline .timeline-content:after,.main-timeline .timeline:nth-child(even) .timeline-content:after{left:85px}
    }
    @media only screen and (max-width:479px){.main-timeline .timeline-content,.main-timeline .timeline:nth-child(2n) .timeline-content{padding-left:110px}
    .main-timeline .timeline-content:before,.main-timeline .timeline:nth-child(2n) .timeline-content:before{left:99px}
    .main-timeline .timeline-content:after,.main-timeline .timeline:nth-child(2n) .timeline-content:after{left:65px}
    }



    /******************* Timeline Demo - 4 *****************/
    .main-timeline4{overflow:hidden;position:relative}
    .main-timeline4:before{content:"";width:5px;height:70%;background:#333;position:absolute;top:70px;left:50%;transform:translateX(-50%)}
    .main-timeline4 .timeline-content:before,.main-timeline4 .timeline:before{top:50%;transform:translateY(-50%);content:""}
    .main-timeline4 .timeline{width:50%;padding-left:100px;float:right;position:relative}
    .main-timeline4 .timeline:before{width:20px;height:20px;border-radius:50%;background:#fff;border:5px solid #333;position:absolute;left:-10px}
    .main-timeline4 .timeline-content{display:block;padding-left:150px;position:relative}
    .main-timeline4 .timeline-content:before{width:90px;height:10px;border-top:7px dotted #333;position:absolute;left:-92px}
    .main-timeline4 .year{display:inline-block;width:120px;height:120px;line-height:100px;border-radius:50%;border:10px solid #f54957;font-size:30px;color:#f54957;text-align:center;box-shadow:inset 0 0 10px rgba(0,0,0,.4);position:absolute;top:0;left:0}
    .main-timeline4 .year:before{content:"";border-left:20px solid #f54957;border-top:10px solid transparent;border-bottom:10px solid transparent;position:absolute;bottom:-13px;right:0;transform:rotate(45deg)}
    .main-timeline4 .inner-content{padding:20px 0}
    .main-timeline4 .title{font-size:24px;font-weight:600;color:#f54957;text-transform:uppercase;margin:0 0 5px}
    .main-timeline4 .description{font-size:14px;color:#6f6f6f;margin:0 0 5px}
    .main-timeline4 .timeline:nth-child(2n){padding:0 100px 0 0}
    .main-timeline4 .timeline:nth-child(2n) .timeline-content:before,.main-timeline4 .timeline:nth-child(2n) .year,.main-timeline4 .timeline:nth-child(2n):before{left:auto;right:-10px}
    .main-timeline4 .timeline:nth-child(2n) .timeline-content{padding:0 150px 0 0}
    .main-timeline4 .timeline:nth-child(2n) .timeline-content:before{right:-92px}
    .main-timeline4 .timeline:nth-child(2n) .year{right:0}
    .main-timeline4 .timeline:nth-child(2n) .year:before{right:auto;left:0;border-left:none;border-right:20px solid #f54957;transform:rotate(-45deg)}
    .main-timeline4 .timeline:nth-child(2){margin-top:110px}
    .main-timeline4 .timeline:nth-child(odd){margin:-110px 0 0}
    .main-timeline4 .timeline:nth-child(even){margin-bottom:80px}
    .main-timeline4 .timeline:first-child,.main-timeline4 .timeline:last-child:nth-child(even){margin:0}
    .main-timeline4 .timeline:nth-child(2n) .year{border-color:#1ebad0;color:#1ebad0}
    .main-timeline4 .timeline:nth-child(2) .year:before{border-right-color:#1ebad0}
    .main-timeline4 .timeline:nth-child(2n) .title{color:#1ebad0}
    .main-timeline4 .timeline:nth-child(3n) .year{border-color:#7cba01;color:#7cba01}
    .main-timeline4 .timeline:nth-child(3) .year:before{border-left-color:#7cba01}
    .main-timeline4 .timeline:nth-child(3n) .title{color:#7cba01}
    .main-timeline4 .timeline:nth-child(4n) .year{border-color:#f8781f;color:#f8781f}
    .main-timeline4 .timeline:nth-child(4) .year:before{border-right-color:#f8781f}
    .main-timeline4 .timeline:nth-child(4n) .title{color:#f8781f}
    @media only screen and (max-width:1200px){.main-timeline4 .year{top:50%;transform:translateY(-50%)}
    }
    @media only screen and (max-width:990px){.main-timeline4 .timeline{padding-left:75px}
    .main-timeline4 .timeline:nth-child(2n){padding:0 75px 0 0}
    .main-timeline4 .timeline-content{padding-left:130px}
    .main-timeline4 .timeline:nth-child(2n) .timeline-content{padding:0 130px 0 0}
    .main-timeline4 .timeline-content:before{width:68px;left:-68px}
    .main-timeline4 .timeline:nth-child(2n) .timeline-content:before{right:-68px}
    }
    @media only screen and (max-width:767px){.main-timeline4{overflow:visible}
    .main-timeline4:before{height:100%;top:0;left:0;transform:translateX(0)}
    .main-timeline4 .timeline:before,.main-timeline4 .timeline:nth-child(2n):before{top:60px;left:-9px;transform:translateX(0)}
    .main-timeline4 .timeline,.main-timeline4 .timeline:nth-child(even),.main-timeline4 .timeline:nth-child(odd){width:100%;float:none;text-align:center;padding:0;margin:0 0 10px}
    .main-timeline4 .timeline-content,.main-timeline4 .timeline:nth-child(2n) .timeline-content{padding:0}
    .main-timeline4 .timeline-content:before,.main-timeline4 .timeline:nth-child(2n) .timeline-content:before{display:none}
    .main-timeline4 .timeline:nth-child(2n) .year,.main-timeline4 .year{position:relative;transform:translateY(0)}
    .main-timeline4 .timeline:nth-child(2n) .year:before,.main-timeline4 .year:before{border:none;border-right:20px solid #f54957;border-top:10px solid transparent;border-bottom:10px solid transparent;top:50%;left:-23px;bottom:auto;right:auto;transform:rotate(0)}
    .main-timeline4 .timeline:nth-child(2n) .year:before{border-right-color:#1ebad0}
    .main-timeline4 .timeline:nth-child(3n) .year:before{border-right-color:#7cba01}
    .main-timeline4 .timeline:nth-child(4n) .year:before{border-right-color:#f8781f}
    .main-timeline4 .inner-content{padding:10px}
    }




        </style>

</head>
<body>
    <div id="app">
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3> Data Science Dashboard</h3>
                </div>

                <ul class="list-unstyled components">
                    <p style="font-size:800;">Navigation</p>
                    <li><a href="{{ route('monitoring-evaluation-dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('manage-pillars') }}">Imprest & Retirements</a></li>
                    <li><a href="{{ route('manage-kpis') }}">Payment Approval & Request</a></li>


                    <!-- <li><a href="dlab_create_project.php">Create A new project</a></li> -->
                    <li><a href="{{ route('update') }}">Payroll System</a></li>

                    <li><a href="{{ route('admin') }}">Financial Reports</a></li>

                    <!-- <li><a href="dlab_data_tests.php"> Data Mapping</a></li> -->
                    <li><a href="{{ route('manage-users') }}">Scholars and Grantees</a></li>
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>


        <main class="py-4">
            <div id="content">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Toggle Sidebar</span>
                            </button>
                        </div>
                            <ul class="nav navbar-nav justify-content-end" style="display: contents;">
                              <li><a href="#">Welcome, <strong style="color: #a7a4a2;">{{ Auth::user()->name }}</strong></a></li>
                              </ul>
                    </div>
                </nav>
            @yield('content')
        </main>
    </div>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
</div>
</div>

            <!-- jQuery CDN -->
            <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
            <!-- Bootstrap Js CDN -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <!-- jQuery Custom Scroller CDN -->
            <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/locale/en-gb.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker-standalone.min.css"></script>
            <script src="../../web/js/moment.min.js"></script>
            <script src="../../web/js/bootstrap-datetimepicker.min.js"></script>



            <script type="text/javascript">
                $(document).ready(function () {
                    $('[data-toggle=confirmation]').confirmation({
                        rootSelector: '[data-toggle=confirmation]',
                        onConfirm: function (event, element) {
                            element.closest('form').submit();
                        }
                    });
                });
            </script>

<script>
$(document).ready(function () {
$('#dtBasicExample').DataTable();
$('.dataTables_length').addClass('bs-select');
});
</script>

<script>
    (function ($) {
        $(function () {

            var addFormGroup = function (event) {
                event.preventDefault();

                var $formGroup = $(this).closest('.form-group');
                var $multipleFormGroup = $formGroup.closest('.multiple-form-group');
                var $formGroupClone = $formGroup.clone();

                $(this)
                    .toggleClass('btn-default btn-add btn-danger btn-remove')
                    .html('–');

                $formGroupClone.find('input').val('');
                $formGroupClone.insertAfter($formGroup);

                var $lastFormGroupLast = $multipleFormGroup.find('.form-group:last');
                if ($multipleFormGroup.data('max') <= countFormGroup($multipleFormGroup)) {
                    $lastFormGroupLast.find('.btn-add').attr('disabled', true);
                }
            };

            var removeFormGroup = function (event) {
                event.preventDefault();

                var $formGroup = $(this).closest('.form-group');
                var $multipleFormGroup = $formGroup.closest('.multiple-form-group');

                var $lastFormGroupLast = $multipleFormGroup.find('.form-group:last');
                if ($multipleFormGroup.data('max') >= countFormGroup($multipleFormGroup)) {
                    $lastFormGroupLast.find('.btn-add').attr('disabled', false);
                }

                $formGroup.remove();
            };

            var countFormGroup = function ($form) {
                return $form.find('.form-group').length;
            };

            $(document).on('click', '.btn-add', addFormGroup);
            $(document).on('click', '.btn-remove', removeFormGroup);

        });
    })(jQuery);
    </script>

            <script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Use Stories",
		horizontalAlign: "left"
	},
	data: [{
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - #percent%",
		toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
			{ y: 67, label: "Sector: Economic growth" },
			{ y: 28, label: "Sector: Health" },
			{ y: 10, label: "Sector: Gender" },
			{ y: 7, label: "Sector: HIV"},
			{ y: 15, label: "Sector: Education"},
			{ y: 6, label: "Sector: Governance / decision making"}
		]
	}]
});
chart.render();

var chart = new CanvasJS.Chart("chartDemographicPositive", {
	animationEnabled: true,
	title: {
		text: "Demographic that  reported positive change - 2019"
	},
	data: [{
		type: "pie",
		startAngle: 240,
		yValueFormatString: "##0.00\"%\"",
		indexLabel: "{label} {y}",
		dataPoints: [
			{y: 79.45, label: "Youth"},
			{y: 7.31, label: "Female"},

		]
	}]
});
chart.render();


//chartDcliIntervention
var chart = new CanvasJS.Chart("chartDcliIntervention", {
	animationEnabled: true,
	title: {
		text: "Demographic that  reported positive change - 2019"
	},
	data: [{
		type: "pie",
		startAngle: 240,
		yValueFormatString: "##0.00\"%\"",
		indexLabel: "{label} {y}",
		dataPoints: [
			{y: 79.45, label: "Youth", color: "#0288D1"},
			{y: 7.31, label: "Female", color: "#ffc107"},

		]
	}]
});
chart.render();

var chart = new CanvasJS.Chart("chartStakeholderAccessingDataTools", {
	animationEnabled: true,
	title: {
		text: "Demographic that  reported positive change - 2019"
	},
	data: [{
		type: "pie",
		startAngle: 240,
		yValueFormatString: "##0.00\"%\"",
		indexLabel: "{label} {y}",
		dataPoints: [
			{y: 67.45, label: "Youth", color: "Indigo"},
			{y: 24.31, label: "Female", color: "yellow" },

		]
	}]
});
chart.render();

//chartLinesCapacityBuildingActivities
var chart = new CanvasJS.Chart("chartLinesCapacityBuildingActivities", {
	animationEnabled: true,
	title:{
		text: "DCLI capacity building activities"
	},
	axisX: {
		valueFormatString: "DD MMM,YY"
	},
	axisY: {
		title: "Activities",
		includeZero: false,
		suffix: " xp"
	},
	legend:{
		cursor: "pointer",
		fontSize: 16,
		itemclick: toggleDataSeries
	},
	toolTip:{
		shared: true
	},
	data: [{
		name: "Training",
		type: "spline",
		yValueFormatString: "#0.## xp",
		showInLegend: true,
		dataPoints: [
			{ x: new Date(2017,6,24), y: 31 },
			{ x: new Date(2017,6,25), y: 31 },
			{ x: new Date(2017,6,26), y: 29 },
			{ x: new Date(2017,6,27), y: 29 },
			{ x: new Date(2017,6,28), y: 31 },
			{ x: new Date(2017,6,29), y: 30 },
			{ x: new Date(2017,6,30), y: 29 }
		]
	},
	{
		name: "Technical Infrastructure/equipment",
		type: "spline",
		yValueFormatString: "#0.## xp",
		showInLegend: true,
		dataPoints: [
			{ x: new Date(2017,6,24), y: 20 },
			{ x: new Date(2017,6,25), y: 20 },
			{ x: new Date(2017,6,26), y: 25 },
			{ x: new Date(2017,6,27), y: 25 },
			{ x: new Date(2017,6,28), y: 25 },
			{ x: new Date(2017,6,29), y: 25 },
			{ x: new Date(2017,6,30), y: 25 }
		]
	},
	{
		name: "Meantorship/Coaching",
		type: "spline",
		yValueFormatString: "#0.## xp",
		showInLegend: true,
		dataPoints: [
			{ x: new Date(2017,6,24), y: 20 },
			{ x: new Date(2017,6,25), y: 20 },
			{ x: new Date(2017,6,26), y: 25 },
			{ x: new Date(2017,6,27), y: 25 },
			{ x: new Date(2017,6,28), y: 26 },
			{ x: new Date(2017,6,29), y: 28 },
			{ x: new Date(2017,6,30), y: 30 }
		]
	},
	{
		name: "Acess to Information Resources",
		type: "spline",
		yValueFormatString: "#0.## xp",
		showInLegend: true,
		dataPoints: [
			{ x: new Date(2017,6,24), y: 22 },
			{ x: new Date(2017,6,25), y: 19 },
			{ x: new Date(2017,6,26), y: 23 },
			{ x: new Date(2017,6,27), y: 24 },
			{ x: new Date(2017,6,28), y: 24 },
			{ x: new Date(2017,6,29), y: 23 },
			{ x: new Date(2017,6,30), y: 23 }
		]
	}]
});
chart.render();

function toggleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else{
		e.dataSeries.visible = true;
	}
	chart.render();
}

//chartStakeholderAccessingDataTools
var chart = new CanvasJS.Chart("chartCapacityBuildingActivities", {
	animationEnabled: true,
	title: {
		text: "Demographic that  reported positive change - 2019"
	},
	data: [{
		type: "pie",
		startAngle: 240,
		yValueFormatString: "##0.00\"%\"",
		indexLabel: "{label} {y}",
		dataPoints: [
			{y: 67.45, label: "Training", color: "Indigo"},
			{y: 43.31, label: "Mentorship/Coaching", color: "yellow" },

			{y: 34.45, label: "Access to Information Resources", color: "orange"},
			{y: 22.31, label: "Technical Infrastructure/equipment", color: "blue" },
			{y: 17.45, label: "Policies/Standard Guidelines/Systems", color: "green"},
			{y: 6.31, label: "Leadership/Strategic Thinking/Governance", color: "pink" },
		]
	}]
});
chart.render();


//chartDcliRelatedEvents
var chart = new CanvasJS.Chart("chartDcliRelatedEvents", {
	animationEnabled: true,
	title: {
		text: "DCLI - Facilitated Events - 2019"
	},
	data: [{
		type: "pie",
		startAngle: 240,
		yValueFormatString: "##0.00\"%\"",
		indexLabel: "{label} {y}",
		dataPoints: [
			{y: 67.45, label: "Training", color: "Indigo"},
			{y: 43.31, label: "Mentorship/Coaching", color: "yellow" },

			{y: 34.45, label: "Access to Information Resources", color: "orange"},
			{y: 22.31, label: "Technical Infrastructure/equipment", color: "blue" },
			{y: 17.45, label: "Policies/Standard Guidelines/Systems", color: "green"},
			{y: 6.31, label: "Leadership/Strategic Thinking/Governance", color: "pink" },
		]
	}]
});

chart.render();

//chart lines for youth participants
var chart = new CanvasJS.Chart("chartLineYouthParticipation", {
	exportEnabled: true,
	animationEnabled: true,
	title:{
		text: "Variation of between female and Youth Participants."
	},
	axisX: {
		valueFormatString: "MMMM"
	},
	axisY: {
		title: "Percentage (%)",
		suffix: " %"
	},
	data: [{
		type: "rangeSplineArea",
		indexLabel: "{y[#index]}%",
		xValueFormatString: "MMMM YYYY",
		toolTipContent: "{x} </br> <strong>Temperature: </strong> </br> Min: {y[0]} %, Max: {y[1]} %",
		dataPoints: [
			{ x: new Date(2016, 00, 01), y: [7, 18] },
			{ x: new Date(2016, 01, 01), y: [11, 23] },
			{ x: new Date(2016, 02, 01), y: [15, 28] },
			{ x: new Date(2016, 03, 01), y: [22, 36] },
			{ x: new Date(2016, 04, 01), y: [26, 39] },
			{ x: new Date(2016, 05, 01), y: [27, 37] },
			{ x: new Date(2016, 06, 01), y: [27, 34] },
			{ x: new Date(2016, 07, 01), y: [26, 33] },
			{ x: new Date(2016, 08, 01), y: [24, 33] },
			{ x: new Date(2016, 09, 01), y: [19, 31] },
			{ x: new Date(2016, 10, 01), y: [13, 27] },
			{ x: new Date(2016, 11, 01), y: [08, 21] }
		]
	}]
});
chart.render();


//chart line php comparison
var chart = new CanvasJS.Chart("chartComparisonLines", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Exponential Growth of DCLI interventions "
	},
	axisY:{
		title: "Energy (in megawatt)",
		logarithmic: true,
		titleFontColor: "#6D78AD",
		gridColor: "#6D78AD",
		labelFormatter: addSymbols
	},
	axisY2:{
		title: "Energy (in megawatt)",
		titleFontColor: "#51CDA0",
		tickLength: 0,
		labelFormatter: addSymbols
	},
	legend: {
		cursor: "pointer",
		verticalAlign: "top",
		fontSize: 16,
		itemclick: toggleDataSeries
	}
});

chart.render();

function addSymbols(e){
	var suffixes = ["", "K", "M", "B"];

	var order = Math.max(Math.floor(Math.log(e.value) / Math.log(1000)), 0);
	if(order > suffixes.length - 1)
		order = suffixes.length - 1;

	var suffix = suffixes[order];
	return CanvasJS.formatNumber(e.value / Math.pow(1000, order)) + suffix;
}

function toggleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else{
		e.dataSeries.visible = true;
	}
	chart.render();
}


}
</script>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>


            <script type="text/javascript">
                $(document).ready(function () {


                    $('#sidebarCollapse').on('click', function () {
                        $('#sidebar, #content').toggleClass('active');
                        $('.collapse.in').toggleClass('in');
                        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                    });
                });
      </script>

      <script>
      $("#menu-toggle").click(function (e) {
                 e.preventDefault();
                 $("#wrapper").toggleClass("toggled");
             });

             function openNav() {
                 document.getElementById("mySidenav").style.width = "310px";
             }

             function closeNav() {
                 document.getElementById("mySidenav").style.width = "0";
             }

        }
      </script>




      <script>
          $(document).ready(function(){
              $('#selectedBatch').on('change', function() {
                if ( this.value == 'stage 1')
                {
                  $("#pnl_candling_report").show();
                     // $('#contact').text("Email Address");
                     // $('#selected_batch_id').text("'
                        //  alert($(this).find("option:selected").text());
                        // batch_id
                   document.getElementById("selected_batch_id").innerHTML = $(this).find("option:selected").text();
                   //document.getElementById("batch_id").innerHTML = $(this).find("option:selected").text();



                  $("#pnl_hatching_report").hide();
                  $("#pnl_sales_report").hide();
                }else if (this.value == 'stage 2') {
                    $("#pnl_hatching_report").show();

                    $("#pnl_candling_report").hide();
                    $("#pnl_sales_report").hide();
                }
                else if (this.value == 'stage 3') {
                    $("#pnl_sales_report").show();

                    $("#pnl_candling_report").hide();
                     $("#pnl_hatching_report").hide();
                }else if (this.value == 'stage 4') {
                    $("#pnl_sales_report").show();

                    $("#pnl_candling_report").hide();
                     $("#pnl_hatching_report").hide();
                }
                else
                {
                    $("#pnl_candling_report").hide();
                     $("#pnl_hatching_report").hide();
                     $("#pnl_sales_report").hide();
                }
              });
              //console.log("hellow");
          });
          </script>


    <script>
    $(document).ready(function(){
        $('#selectPillar').on('change', function() {
          if ( this.value == 'cb')
          {
            $("#pnl_cb_pillar").show();
             // document.getElementById("selected_batch_id").innerHTML = $(this).find("option:selected").text();
             $("#pnl_select_pillars").hide();



          }else if (this.value == 'ce') {
            $("#pnl_ce_pillar").show();
            $("#pnl_select_pillars").hide();

          }else if (this.value == 'ds') {
            $("#pnl_ds_pillar").show();
            $("#pnl_select_pillars").hide();

          }else if (this.value == 'ri') {
            $("#pnl_ri_pillar").show();
            $("#pnl_select_pillars").hide();

          }else if (this.value == 'is') {
            $("#pnl_is_pillar").show();
            $("#pnl_select_pillars").hide();

          }
          else{
            $("#pnl_cb_pillar").hide();
            $("#pnl_ce_pillar").hide();
            $("#pnl_ri_pillar").hide();
            $("#pnl_is_pillar").hide();

            $("#pnl_select_pillars").show();


          }
        });
        //console.log("hellow");
    });
          </script>



            <script>
                // selectCBindicator
                $(document).ready(function(){
        $('#selectCBindicator').on('change', function() {
          if ( this.value == 'indicator1')
          {
            $("#pnl_kpi_1").show();

             $("#pnl_select_pillars").hide();
             $("#pnl_cb_pillar").hide();

          }else if (this.value == 'indicator4') {
            $("#pnl_kpi_4").show();
            $("#pnl_cb_pillar").hide();
            $("#pnl_select_pillars").hide();

          }else if (this.value == 'indicator5') {
            $("#pnl_kpi_5").show();
            $("#pnl_cb_pillar").hide();
            $("#pnl_select_pillars").hide();

          }else if (this.value == 'indicator6') {
            $("#pnl_kpi_6").show();
            $("#pnl_cb_pillar").hide();
            $("#pnl_select_pillars").hide();

          }else if (this.value == 'indicator7') {
            $("#pnl_kpi_7").show();
            $("#pnl_cb_pillar").hide();
            $("#pnl_select_pillars").hide();

          }else if (this.value == 'indicator8') {
            $("#pnl_kpi_8").show();
            $("#pnl_cb_pillar").hide();
            $("#pnl_select_pillars").hide();

          }else if (this.value == 'indicator11') {
            $("#pnl_kpi_11").show();
            $("#pnl_cb_pillar").hide();
            $("#pnl_select_pillars").hide();

          }else if (this.value == 'indicator12') {
            $("#pnl_kpi_12").show();
            $("#pnl_cb_pillar").hide();
            $("#pnl_select_pillars").hide();

          }else if (this.value == 'indicator14') {
            $("#pnl_kpi_14").show();
            $("#pnl_cb_pillar").hide();
            $("#pnl_select_pillars").hide();

          }else if (this.value == 'indicator15') {
            $("#pnl_kpi_15").show();
            $("#pnl_cb_pillar").hide();
            $("#pnl_select_pillars").hide();

          }
          else{

            $("#pnl_kpi_1").hide();
            $("#pnl_kpi_2").hide();

            $("#pnl_kpi_3").hide();
            $("#pnl_kpi_4").hide();
            $("#pnl_kpi_5").hide();

            $("#pnl_kpi_6").hide();
            $("#pnl_kpi_7").hide();
            $("#pnl_kpi_8").hide();
            $("#pnl_kpi_9").hide();

            $("#pnl_kpi_10").hide();
            $("#pnl_kpi_11").hide();
            $("#pnl_kpi_12").hide();
            $("#pnl_kpi_13").hide();

            $("#pnl_kpi_14").hide();
            $("#pnl_kpi_15").hide();
            $("#pnl_cb_pillar").hide();
            $("#pnl_select_pillars").show();


          }
        });
        //console.log("dlab cb");
    });

</script>






            <script>
                // selectCEindicator
                $(document).ready(function(){
        $('#selectCEindicator').on('change', function() {
          if ( this.value == 'indicator1')
          {
            $("#pnl_kpi_1").show();

             $("#pnl_select_pillars").hide();
             $("#pnl_ce_pillar").hide();

          }else if (this.value == 'indicator2') {
            $("#pnl_kpi_2").show();
            $("#pnl_ce_pillar").hide();
            $("#pnl_select_pillars").hide();

          }else if (this.value == 'indicator3') {
            $("#pnl_kpi_3").show();
            $("#pnl_ce_pillar").hide();
            $("#pnl_select_pillars").hide();

          }else if (this.value == 'indicator4') {
            $("#pnl_kpi_4").show();
            $("#pnl_ce_pillar").hide();
            $("#pnl_select_pillars").hide();

          }else if (this.value == 'indicator6') {
            $("#pnl_kpi_6").show();
            $("#pnl_ce_pillar").hide();
            $("#pnl_select_pillars").hide();

          }else if (this.value == 'indicator7') {
            $("#pnl_kpi_7").show();
            $("#pnl_ce_pillar").hide();
            $("#pnl_select_pillars").hide();

          }else if (this.value == 'indicator8') {
            $("#pnl_kpi_8").show();
            $("#pnl_ce_pillar").hide();
            $("#pnl_select_pillars").hide();

          }else if (this.value == 'indicator9') {
            $("#pnl_kpi_9").show();
            $("#pnl_ce_pillar").hide();
            $("#pnl_select_pillars").hide();

          }else if (this.value == 'indicator11') {
            $("#pnl_kpi_11").show();
            $("#pnl_ce_pillar").hide();
            $("#pnl_select_pillars").hide();

          }else if (this.value == 'indicator15') {
            $("#pnl_kpi_15").show();
            $("#pnl_ce_pillar").hide();
            $("#pnl_select_pillars").hide();

          }
          else{

            $("#pnl_kpi_1").hide();
            $("#pnl_kpi_2").hide();

            $("#pnl_kpi_3").hide();
            $("#pnl_kpi_4").hide();
            $("#pnl_kpi_5").hide();

            $("#pnl_kpi_6").hide();
            $("#pnl_kpi_7").hide();
            $("#pnl_kpi_8").hide();
            $("#pnl_kpi_9").hide();

            $("#pnl_kpi_10").hide();
            $("#pnl_kpi_11").hide();
            $("#pnl_kpi_12").hide();
            $("#pnl_kpi_13").hide();

            $("#pnl_kpi_14").hide();
            $("#pnl_kpi_15").hide();
            $("#pnl_c3_pillar").hide();
            $("#pnl_select_pillars").show();


          }
        });
        //console.log("dlab cb");
    });

</script>





<script>
    // selectRIindicator
    $(document).ready(function(){
$('#selectRIindicator').on('change', function() {
if ( this.value == 'indicator1')
{
$("#pnl_kpi_1").show();

 $("#pnl_select_pillars").hide();
 $("#pnl_ri_pillar").hide();

}else if (this.value == 'indicator3') {
$("#pnl_kpi_3").show();
$("#pnl_ri_pillar").hide();
$("#pnl_select_pillars").hide();

}else if (this.value == 'indicator6') {
$("#pnl_kpi_6").show();
$("#pnl_ri_pillar").hide();
$("#pnl_select_pillars").hide();

}else if (this.value == 'indicator7') {
$("#pnl_kpi_7").show();
$("#pnl_ri_pillar").hide();
$("#pnl_select_pillars").hide();

}else if (this.value == 'indicator8') {
$("#pnl_kpi_8").show();
$("#pnl_ri_pillar").hide();
$("#pnl_select_pillars").hide();

}else if (this.value == 'indicator10') {
$("#pnl_kpi_10").show();
$("#pnl_ri_pillar").hide();
$("#pnl_select_pillars").hide();

}else if (this.value == 'indicator11') {
$("#pnl_kpi_11").show();
$("#pnl_ri_pillar").hide();
$("#pnl_select_pillars").hide();

}else if (this.value == 'indicator15') {
$("#pnl_kpi_15").show();
$("#pnl_ri_pillar").hide();
$("#pnl_select_pillars").hide();

}else if (this.value == 'indicator16') {
$("#pnl_kpi_16").show();
$("#pnl_ri_pillar").hide();
$("#pnl_select_pillars").hide();

}else if (this.value == 'indicator17') {
$("#pnl_kpi_17").show();
$("#pnl_ri_pillar").hide();
$("#pnl_select_pillars").hide();

}
else{

$("#pnl_kpi_1").hide();
$("#pnl_kpi_2").hide();

$("#pnl_kpi_3").hide();
$("#pnl_kpi_4").hide();
$("#pnl_kpi_5").hide();

$("#pnl_kpi_6").hide();
$("#pnl_kpi_7").hide();
$("#pnl_kpi_8").hide();
$("#pnl_kpi_9").hide();

$("#pnl_kpi_10").hide();
$("#pnl_kpi_11").hide();
$("#pnl_kpi_12").hide();
$("#pnl_kpi_13").hide();

$("#pnl_kpi_14").hide();
$("#pnl_kpi_15").hide();
$("#pnl_cb_pillar").hide();
$("#pnl_select_pillars").show();


}
});
//console.log("dlab cb");
});

</script>

        {{-- data science pillar --}}
        <script>
            // selectDSindicator
            $(document).ready(function(){
        $('#selectDSindicator').on('change', function() {
        if ( this.value == 'indicator1')
        {
        $("#pnl_kpi_1").show();

        $("#pnl_select_pillars").hide();
        $("#pnl_ds_pillar").hide();

        }else if (this.value == 'indicator4') {
        $("#pnl_kpi_4").show();
        $("#pnl_ds_pillar").hide();
        $("#pnl_select_pillars").hide();

        }else if (this.value == 'indicator5') {
        $("#pnl_kpi_5").show();
        $("#pnl_ds_pillar").hide();
        $("#pnl_select_pillars").hide();

        }else if (this.value == 'indicator6') {
        $("#pnl_kpi_6").show();
        $("#pnl_ds_pillar").hide();
        $("#pnl_select_pillars").hide();

        }else if (this.value == 'indicator7') {
        $("#pnl_kpi_7").show();
        $("#pnl_ds_pillar").hide();
        $("#pnl_select_pillars").hide();

        }else if (this.value == 'indicator8') {
        $("#pnl_kpi_8").show();
        $("#pnl_ds_pillar").hide();
        $("#pnl_select_pillars").hide();

        }else if (this.value == 'indicator10') {
        $("#pnl_kpi_10).show();
        $("#pnl_ds_pillar").hide();
        $("#pnl_select_pillars").hide();

        }else if (this.value == 'indicator11') {
        $("#pnl_kpi_11").show();
        $("#pnl_ds_pillar").hide();
        $("#pnl_select_pillars").hide();

        }else if (this.value == 'indicator13') {
        $("#pnl_kpi_13").show();
        $("#pnl_ds_pillar").hide();
        $("#pnl_select_pillars").hide();

        }else if (this.value == 'indicator15') {
        $("#pnl_kpi_15").show();
        $("#pnl_ds_pillar").hide();
        $("#pnl_select_pillars").hide();

        }
        else{

        $("#pnl_kpi_1").hide();
        $("#pnl_kpi_2").hide();

        $("#pnl_kpi_3").hide();
        $("#pnl_kpi_4").hide();
        $("#pnl_kpi_5").hide();

        $("#pnl_kpi_6").hide();
        $("#pnl_kpi_7").hide();
        $("#pnl_kpi_8").hide();
        $("#pnl_kpi_9").hide();

        $("#pnl_kpi_10").hide();
        $("#pnl_kpi_11").hide();
        $("#pnl_kpi_12").hide();
        $("#pnl_kpi_13").hide();

        $("#pnl_kpi_14").hide();
        $("#pnl_kpi_15").hide();
        $("#pnl_cb_pillar").hide();
        $("#pnl_select_pillars").show();


        }
        });
        //console.log("dlab cb");
        });

        </script>


        <script>
            // {{-- data INSTITUTIONAL STREGTHING pillar --}}

            // selectDSindicator
            $(document).ready(function(){
        $('#selectDSindicator').on('change', function() {
        if ( this.value == 'indicator1')
        {
        $("#pnl_kpi_1").show();

        $("#pnl_select_pillars").hide();
        $("#pnl_ds_pillar").hide();

        }else if (this.value == 'indicator4') {
        $("#pnl_kpi_4").show();
        $("#pnl_ds_pillar").hide();
        $("#pnl_select_pillars").hide();

        }else if (this.value == 'indicator5') {
        $("#pnl_kpi_5").show();
        $("#pnl_ds_pillar").hide();
        $("#pnl_select_pillars").hide();

        }else if (this.value == 'indicator6') {
        $("#pnl_kpi_6").show();
        $("#pnl_ds_pillar").hide();
        $("#pnl_select_pillars").hide();

        }else if (this.value == 'indicator7') {
        $("#pnl_kpi_7").show();
        $("#pnl_ds_pillar").hide();
        $("#pnl_select_pillars").hide();

        }else if (this.value == 'indicator8') {
        $("#pnl_kpi_8").show();
        $("#pnl_ds_pillar").hide();
        $("#pnl_select_pillars").hide();

        }else if (this.value == 'indicator10') {
        $("#pnl_kpi_10).show();
        $("#pnl_ds_pillar").hide();
        $("#pnl_select_pillars").hide();

        }else if (this.value == 'indicator11') {
        $("#pnl_kpi_11").show();
        $("#pnl_ds_pillar").hide();
        $("#pnl_select_pillars").hide();

        }else if (this.value == 'indicator13') {
        $("#pnl_kpi_13").show();
        $("#pnl_ds_pillar").hide();
        $("#pnl_select_pillars").hide();

        }else if (this.value == 'indicator15') {
        $("#pnl_kpi_15").show();
        $("#pnl_ds_pillar").hide();
        $("#pnl_select_pillars").hide();

        }
        else{

        $("#pnl_kpi_1").hide();
        $("#pnl_kpi_2").hide();

        $("#pnl_kpi_3").hide();
        $("#pnl_kpi_4").hide();
        $("#pnl_kpi_5").hide();

        $("#pnl_kpi_6").hide();
        $("#pnl_kpi_7").hide();
        $("#pnl_kpi_8").hide();
        $("#pnl_kpi_9").hide();

        $("#pnl_kpi_10").hide();
        $("#pnl_kpi_11").hide();
        $("#pnl_kpi_12").hide();
        $("#pnl_kpi_13").hide();

        $("#pnl_kpi_14").hide();
        $("#pnl_kpi_15").hide();
        $("#pnl_cb_pillar").hide();
        $("#pnl_select_pillars").show();


        }
        });
        //console.log("dlab cb");
        });

        </script>



              <script>
                //   <!-- after user selects activity to update -->

              $(document).ready(function(){
                  $('#selectUpdateActivity').on('change', function() {
                    if ( this.value == 1)
                    {
                      $("#pnl_kpi_1").show();
                       // document.getElementById("selected_batch_id").innerHTML = $(this).find("option:selected").text();
                       $("#pnl_select_activity").hide();
                       // $("#pnl_kpi_2").style.display = 'block';
                       // document.getElementById("pnl_kpi_2").innerHTML = $(this).find("display: block").text();

                       console.log("s1 coms up....");

                    }else if (this.value == 2) {

                        $("#pnl_kpi_2").show();
                         $("#pnl_select_activity").hide();
                         console.log("s2 coms up....");

                    }else if (this.value == 3) {
                      $("#pnl_kpi_3").show();
                       $("#pnl_select_activity").hide();
                       console.log("s3 coms up....");

                    }else if (this.value == 4) {
                      $("#pnl_kpi_4").show();
                       $("#pnl_select_activity").hide();
                       console.log("s4 coms up....");

                    }else if (this.value == 5) {
                      $("#pnl_kpi_5").show();
                       $("#pnl_select_activity").hide();
                       console.log("s5 coms up....");

                    }else if (this.value == 6) {
                      $("#pnl_kpi_6").show();
                       $("#pnl_select_activity").hide();
                       console.log("s6 coms up....");

                    }else if (this.value == 7) {
                      $("#pnl_kpi_7").show();
                       $("#pnl_select_activity").hide();
                       console.log("s7 coms up....");

                    }else if (this.value == 8) {
                      $("#pnl_kpi_8").show();
                       $("#pnl_select_activity").hide();
                       console.log("s8 coms up....");

                    }else if (this.value == 9) {
                      $("#pnl_kpi_9").show();
                       $("#pnl_select_activity").hide();
                       console.log("s9 coms up....");

                    }else if (this.value == 10) {
                      $("#pnl_kpi_10").show();
                       $("#pnl_select_activity").hide();
                       console.log("s10 coms up....");

                    }else if (this.value == 11) {
                      $("#pnl_kpi_11").show();
                       $("#pnl_select_activity").hide();
                       console.log("s11 coms up....");

                    }else if (this.value == 12) {
                      $("#pnl_kpi_12").show();
                       $("#pnl_select_activity").hide();
                       console.log("s12 coms up....");

                    }else if (this.value == 13) {
                      $("#pnl_kpi_13").show();
                       $("#pnl_select_activity").hide();
                       console.log("s13 coms up....");

                    }else if (this.value == 14) {
                      $("#pnl_kpi_14").show();
                       $("#pnl_select_activity").hide();
                       console.log("s14 coms up....");

                    }else if (this.value == 15) {
                      $("#pnl_kpi_15").show();
                       $("#pnl_select_activity").hide();
                       console.log("s15 coms up....");

                    }else if (this.value == 16) {
                      $("#pnl_kpi_16").show();
                       $("#pnl_select_activity").hide();
                       console.log("s16 coms up....");

                    }else if (this.value == 17) {
                      $("#pnl_kpi_17").show();
                       $("#pnl_select_activity").hide();
                       console.log("s17 coms up....");

                    }
                    else{
                      $("#pnl_select_activity").hide();
                      $("#pnl_select_project").show();


                    }
                  });
              });
                    </script>
</body>
</html>
