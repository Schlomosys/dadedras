@extends('layouts.appbisone')
@section('content')

<script src="{{ asset('js/typing.js') }}"></script>
<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet"/>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

<!-- Styles -->

    <!--Color Picker-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha256-aAr2Zpq8MZ+YA/D6JtRD3xtrwpEz2IqOS+pWD/7XKIw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" integrity="sha512-xmGTNt20S0t62wHLmQec2DauG9T+owP9e6VU8GigI0anN7OXLip9i7IwEhelasml2osdxX71XcYm6BQunTQeQg==" crossorigin="anonymous" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js" integrity="sha512-VvWznBcyBJK71YKEKDMpZ0pCVxjNuKwApp4zLF3ul+CiflQi6aIJR+aZCP/qWsoFBA28avL5T5HA+RE+zrGQYg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-angular.min.js" integrity="sha512-KT0oYlhnDf0XQfjuCS/QIw4sjTHdkefv8rOJY5HHdNEZ6AmOh1DW/ZdSqpipe+2AEXym5D0khNu95Mtmw9VNKg==" crossorigin="anonymous"></script>
    
   <!--SHARE-->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
   <script src="{{ asset('js/share.js') }}"></script>
   <link href="https://fr.allfont.net/allfont.css?fonts=dosis-extralight" rel="stylesheet" type="text/css" />
   <style type="text/css">
     @import url("https://fonts.googleapis.com/css?family=Dosis:300,400,700&display=swap");
     * {
       margin: 0;
       padding: 0;
       box-sizing: border-box;
       text-decoration: none;
       list-style: none;
       font-family: 'Dosis';
       font-weight: bold;
       text-decoration: none;
       /*font-family:system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Ubuntu, "Helvetica Neue", sans-serif;*/
       /*font-size: 18px;*/
      
       
       /*font-family: "Montserrat", sans-serif;*/
     }
     body{
       margin: 0;
       padding: 0;
     /*  color: #fff;*/
      
       box-sizing: border-box;
      /* background-color:#1F2739;*/
       background-color:#ffffff;
     }
    .wrapper {
   display: flex;
   width: 100%;
 }
 
 .wrapper .sidebar{
   position: relative;
 }
 
 .wrapper .sidebar .bg_shadow{
   width: 100%;
   height: 100%;
   position: fixed;
   top: 0;
   left: 0;
   background: #000;
   z-index: 998;
   opacity: 0;
   visibility: hidden;
   transition: all 0.3s ease;
 }
 
 .wrapper .sidebar__inner {
   width: 250px;
   position: fixed;
   top: 0;
   left: 0;
   height: 100%;
   background: #2a58ae;
   z-index: 999;
   transition: all 0.3s ease;
   overflow: scroll;
   -webkit-overflow-scrolling: touch;
 }
 
 .wrapper .main_container {
   margin-left: 250px;
   width: calc(100% - 250px);
   position: absolute;
    transition: all 0.3s ease;
    /*overflow: scroll;
   -webkit-overflow-scrolling: touch;*/
 }
 
 .profile_info {
   padding: 30px 50px;
   text-align: center;
 }
 /*.wrapper .sidebar__inner .flex-scroll {
       overflow-y:scroll;
       min-height:0;
       -webkit-box-flex:1;
       flex:1;
       }*/
 
 .profile_info .profile_img {
   width: 125px;
   /*margin: 0 auto 15px;*/
   margin: auto;
   justify-content:center;
   
 }
  .profile_info .profile_img img {
 
   display: block;
   margin-left: auto;
   margin-right: auto;
   width: 40%;
 }
 
  .profile_info .profile_data .name {
   font-size: 20px;
   font-weight: 500;
   color: #fff;
   
 }
 
  .profile_info .profile_data .role {
   font-weight: 300;
   color: #167EBE;
   margin-bottom: 15px;
 }
 
  .profile_info .profile_data .btn {
   padding: 10px;
   border: 1px solid #1fafec;
   border-radius: 25px;
   color: #1fafec;
   cursor: pointer;
 }
 
  .profile_info .profile_data .btn:hover {
   background: #1fafec;
   color: #fff;
 }
 
 .siderbar_menu li a {
   padding: 10px 50px;
   display: block;
   height: 90px;
   position: relative;
   margin-bottom: 1px;
   /*color: #88a3d0;*/
   color:#167EBE;
   text-align: center;
   text-transform: uppercase;
   font-family:system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Ubuntu, "Helvetica Neue", sans-serif;
   
 }
 
  .siderbar_menu li a .icon {
   font-size: 20px;
   margin-bottom: 5px;
 }
 
  .siderbar_menu li a:before {
   content: "";
   position: absolute;
   top: 0;
   left: 0;
   width: 3px;
   height: 100%;
   background: #1fafec;
   display: none;
 }
 
  .siderbar_menu li a:hover,
  .siderbar_menu li a.active {
   background: #1d4c9e;
   color: #fff;
 }
 
  .siderbar_menu li a:hover:before,
  .siderbar_menu li a.active:before {
   display: block;
 }
 
 .wrapper .main_container .top_navbar {
   width: calc(100% - 250px);
   height: 60px;
   background: #fff;
   display: flex;
   justify-content: space-between;
   padding: 15px 25px;
   position: fixed;
   top: 0;
   left: 250px;
   box-shadow: 0 2px 2px rgba(0, 0, 0, 0.125);
    transition: all 0.3s ease;
 }
 
 .wrapper .main_container .top_navbar .hamburger {
   width: 30px;
   height: 30px;
   position: relative;
   display: none;
 }
 
 .wrapper .main_container .top_navbar .hamburger .fas {
   color: #88a3d0;
   font-size: 25px;
   cursor: pointer;
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
 }
 
 .wrapper .main_container .top_navbar .menu {
   display: flex;
   align-items: center;
 }
 
 .wrapper .main_container .top_navbar .menu li a {
   margin: 0 5px;
   padding: 0 5px;
   position: relative;
   color: #1d4c9e;
   font-weight: 400;
   text-align: center;
 }
 
 .wrapper .main_container .top_navbar .menu li a:before {
   content: "";
   position: absolute;
   bottom: -20px;
   left: 0;
   width: 100%;
   height: 3px;
   background: #1fafec;
   display: none;
 }
 
 .wrapper .main_container .top_navbar .menu li a.active,
 .wrapper .main_container .top_navbar .menu li a:hover {
   color: #1fafec;
 }
 
 .wrapper .main_container .top_navbar .menu li a:hover:before,
 .wrapper .main_container .top_navbar .menu li a.active:before {
   display: block;
 }
 
 .wrapper .main_container .top_navbar .right_bar {
   display: flex;
   align-item: center;
 }
 
 .wrapper .main_container .top_navbar .right_bar li {
   margin: 0 10px;
 }
 
 .wrapper .main_container .top_navbar .right_bar .fas {
   font-size: 25px;
   cursor: pointer;
   color: #88a3d0;
 }
 
 .wrapper .main_container .top_navbar .right_bar li:hover,
 .wrapper .main_container .top_navbar .hamburger .fas:hover {
   opacity: 0.4;
 }
 
 .wrapper .main_container .container {
   padding-top: 50px;
   margin-top: 0px;
   width: 100%
   /*overflow: auto;*/
   height: calc(100vh - 50px);
 }
 
 .wrapper .main_container .container .item {
   background: #fff;
   padding: 0px;
   border-bottom: 1px solid #d9e2e7;
   font-size-adjust: 18px;
   line-height: 22px;
   margin-bottom: 15px;
 }
 
 .wrapper .sidebar__inner .close{
     position: absolute;
     top: 5px;
     right: 15px;
     font-size: 25px;
     color: #fff;
   display: none;
   cursor: pointer;
 }
 
 .wrapper .sidebar__inner .close:hover{
   opacity: 0.5;
 }
    
     table {
       border: 1px solid #ccc;
       border-collapse: collapse;
       margin: 0;
       padding: 0;
       width: 100%;
       table-layout: fixed;
     }
     
     table caption {
       font-size: 1.5em;
       margin: .5em 0 .75em;
     }
     
     table tr {
      /* background-color:  color: #185875;*/
       
       background-color: #185875;
       border: 1px solid #ddd;
       padding: .35em;
     }
     
     table th,
     table td {
       padding: .625em;
       text-align: center;
     }
     
     table th {
       font-size: .85em;
       letter-spacing: .1em;
       text-transform: uppercase;
     }
     
     @media screen and (max-width: 1700px) {
       table {
         border: 0;
       }
     
       table caption {
         font-size: 1.3em;
       }
       
       table thead {
         border: none;
         clip: rect(0 0 0 0);
         height: 1px;
         margin: -1px;
         overflow: hidden;
         padding: 0;
         position: absolute;
         width: 1px;
       }
       
       table tr {
         border-bottom: 3px solid #ddd;
         display: block;
         margin-bottom: .625em;
       }
       
       table td {
         border-bottom: 1px solid #ddd;
         display: block;
         font-size: .8em;
         text-align: right;
       }
       
       table td::before {
         /*
         * aria-label has no advantage, it won't be read inside a table
         content: attr(aria-label);
         */
         content: attr(data-label);
         float: left;
         font-weight: bold;
         text-transform: uppercase;
       }
       
       table td:last-child {
         border-bottom: 0;
       }
     }
        /*.dropdown-header {
         text-align: center;
         font-size: 1em;
         color: #ddd;
         background:#212531;
         background: linear-gradient(to right bottom, #2f3441 50%, #212531 50%);
     }
     .sidenav__list .dropdown-menu {
         position: relative;
         width: 100%;
         padding: 0;
         margin: 0;
         border-radius: 0;
         border: none;
         background-color: #222;
         box-shadow: none;
     }
     .dropdown-menu.show {
         top: 0;
     }
        */
     .card{
       position:relative;
       margin:15px 10px 10px 10px;
       width:100%;
       height:100%;
       background: #fff;
       transform-style:preserve-3d;
       transform:perspective(2000px);
       transition:1s;
       box-shadow:inset 100px 0 50px rgba(0,0,0,0.5);
       left: -5%;
       top:-8%;
       /*border-radius:5%;*/
     
     }
     
     .card:hover{
       z-index:1;
      /* transform:perspective(2000px) rotate(-10deg);
       box-shadow:inset 20px 0 50px rgba(0,0,0,0.5);*/
     }
     
     .card .img-container{
       position:relative;
       width:100%;
       height:100%;
       border:1px solid #000;
       box-sizing:border-box;
       transform-origin:left;
       z-index:1;
       transition:1s;
       /*border-radius:5%;*/
     }
     
     .card .img-container img{
       position:absolute;
       left:0;
       top:0;
       height:100%;
       width:100%;
       object-fit:cover;
       /*border-radius:5%;*/
     }
     
     .card:hover .img-container{
       /*transform:rotateY(-135deg);*/
     }
     
     .card .card-details{
       position:absolute;
       left:0;
       top:0;
       box-sizing:border-box;
       padding:20px;
       color:#000;
     }
     
      .card .card-details h2{
       margin:0;
       padding:0.5em 0;
       text-transform:uppercase;
       font-size:2em;
       color:#ed363a;
     }
     
     .card .card-details p{
       margin:0;
       padding:0;
       line-height:25px;
       font-size:1.1em;
     }
         .label-info{
                 background-color: #17a2b8;
     
             }
             .label {
                 display: inline-block;
                 padding: .25em .4em;
                 font-size: 75%;
                 font-weight: 700;
                 line-height: 1;
                 text-align: center;
                 white-space: nowrap;
                 vertical-align: baseline;
                 border-radius: .25rem;
                 transition: color .15s ease-in-out,background-color .15s ease-in-out,
                 border-color .15s ease-in-out,box-shadow .15s ease-in-out;
             }
     
         /**CSS*/
      
     
     /* Assign grid instructions to our parent grid container, mobile-first (hide the sidenav) */
     .grid-container {
       display: grid;
       grid-template-columns: 1fr;
       grid-template-rows: 50px 1fr 50px;
       grid-template-areas:
         'header'
         'main'
         'footer';
       height: 100vh;
     }
     
     .menu-icon {
       position: fixed; /* Needs to stay visible for all mobile scrolling */
       display: flex;
       top: 5px;
       left: 10px;
       align-items: center;
       justify-content: center;
       background-color: #000007;
       border-radius: 50%;
       z-index: 1;
       cursor: pointer;
       padding: 12px;
     }
     
     /* Give every child element its grid name */
     .header {
       grid-area: header;
       display: flex;
       align-items: center;
       justify-content: space-between;
       padding: 0 16px;
       /*background-color: #202020;*/
       background-color: #FFFFFF;
     }
     
     /* Make room for the menu icon on mobile */
     .header__search {
       margin-left: 42px;
     }
     
     .sidenav {
       grid-area: sidenav;
       display: flex;
       flex-direction: column;
       height: 100%;
       width: 240px;
       position: fixed;
       overflow-y: auto;
       transform: translateX(-245px);
       transition: all .6s ease-in-out;
       box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.16), 0 0 0 1px rgba(0, 0, 0, 0.08);
       z-index: 2; /* Needs to sit above the hamburger menu icon */
       background-color:#e9e7e7;
     }
     
     .sidenav.active {
       transform: translateX(0);
     }
     
     .sidenav__close-icon {
       position: absolute;
       visibility: visible;
       top: 8px;
       right: 12px;
       cursor: pointer;
       font-size: 20px;
       color: rgb(7, 1, 1);
     }
     
     .sidenav__list {
       padding: 0;
       margin-top: 85px;
       list-style-type: none;
     }
     
     .sidenav__list-item {
       padding: 20px 20px 20px 20px;
       color: #ddd;
     }
     .active{
     
       background-color: #e9e7e7;
     }
     
     .sidenav__list-item:hover {
       background-color: rgba(250, 91, 91, 0.2);
       cursor: pointer;
     }
     
     .main {
       grid-area: main;
       background-color:#F9F9F9
     }
     
     .main-header {
       display: flex;
       justify-content: space-between;
       margin: 20px;
       padding: 20px;
      /* height: 150px;*/
       height: 50px;
      
       background-color: #e3e4e6;
       color: slategray;
     }
     
     .main-overview {
       display: grid;
       grid-template-columns: repeat(auto-fit, minmax(265px, 1fr));
       grid-auto-rows: 94px;
       grid-gap: 20px;
       margin: 20px;
     }
     
     .overviewcard {
       display: flex;
       align-items: center;
       justify-content: space-between;
       padding: 20px;
       background-color: #d3d3;
     }
     
     .main-cards {
       column-count: 1;
       column-gap: 20px;
       margin: 20px;
     }
     
     .carda {
       display: flex;
       flex-direction: column;
       align-items: center;
       width: 100%;
       background-color:#F9F9F9;
       margin-bottom: 20px;
       -webkit-column-break-inside: avoid;
       padding: 24px;
       box-sizing: border-box;
       overflow-y: scroll;
     }
     
     /* Force varying heights to simulate dynamic content */
     .carda:first-child {
       height: 1000px;
     }
     
     .carda:nth-child(2) {
       height: 200px;
     }
     
     .carda:nth-child(3) {
       height: 265px;
     }
     
     .footer {
       grid-area: footer;
       display: flex;
       align-items: center;
       justify-content: space-between;
       padding: 0 16px;
       background-color: #648ca6;
     }
     
     /* Non-mobile styles, 750px breakpoint */
     @media only screen and (min-width: 46.875em) {
       /* Show the sidenav */
       .grid-container {
         grid-template-columns: 240px 1fr;
         grid-template-areas:
           "sidenav header"
           "sidenav main"
           "sidenav footer";
       }
     
       .header__search {
         margin-left: 0;
       }
     
       .sidenav {
         position: relative;
         transform: translateX(0);
       }
     
       .sidenav__close-icon {
         visibility: hidden;
       }
     }
     
     /* Medium screens breakpoint (1050px) */
     @media only screen and (min-width: 65.625em) {
       /* Break out main cards into two columns */
       .main-cards {
         column-count: 1;
         /*column-count: 2;*/
       }
     }
     
         /*
         CSS
         **/
     
         /**
         ACCOUNT CSS
         */
       
     
     
     /*body {
       background: #bbc7df;
       font-family:system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Ubuntu, "Helvetica Neue", sans-serif;
       line-height:1.5;
       
     }*/
     
     .wrapper {
       display: flex;
       width: 100%;
     }
     
     .wrapper .sidebar{
       position: relative;
     }
     
     .wrapper .sidebar .bg_shadow{
       width: 100%;
       height: 100%;
       position: fixed;
       top: 0;
       left: 0;
       background: #000;
       z-index: 998;
       opacity: 0;
       visibility: hidden;
       transition: all 0.3s ease;
     }
     
     .wrapper .sidebar__inner {
       width: 250px;
       position: fixed;
       top: 0;
       left: 0;
       height: 100%;
       background: #2a58ae;
       z-index: 999;
       transition: all 0.3s ease;
       overflow: scroll;
       -webkit-overflow-scrolling: touch;
     }
     
     .wrapper .main_container {
       margin-left: 250px;
       width: calc(100% - 250px);
       position: absolute;
        transition: all 0.3s ease;
        /*overflow: scroll;
       -webkit-overflow-scrolling: touch;*/
     }
     
  .profile_info {
       padding: 30px 50px;
       text-align: center;
     }
     /*.wrapper .sidebar__inner .flex-scroll {
           overflow-y:scroll;
           min-height:0;
           -webkit-box-flex:1;
           flex:1;
           }*/
     
   .profile_info .profile_img {
       width: 125px;
       /*margin: 0 auto 15px;*/
       margin: auto;
       justify-content:center;
       
     }
     
     .profile_info .profile_img img {
     
       display: block;
       margin-left: auto;
       margin-right: auto;
       width: 40%;
     }
     
  .profile_info .profile_data .name {
       font-size: 20px;
       font-weight: 500;
       color:#045480;font-weight:bold;
     }
     
    .profile_info .profile_data .role {
       font-weight: 300;
       color: #0c3b8d;
       margin-bottom: 15px;
     }
     
  .profile_info .profile_data .btn {
       padding: 10px;
       border: 1px solid #1fafec;
       border-radius: 25px;
       color: #1fafec;
       cursor: pointer;
     }
     
  .profile_info .profile_data .btn:hover {
       background: #1fafec;
       color: #fff;
     }
     
    .siderbar_menu li a {
       padding: 10px 50px;
       display: block;
       height: 90px;
       position: relative;
       margin-bottom: 1px;
       color: #167EBE;
       text-align: center;
       text-transform: uppercase;
       font-family:system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Ubuntu, "Helvetica Neue", sans-serif;
     }
     
  .siderbar_menu li a .icon {
       font-size: 20px;
       margin-bottom: 5px;
     }
     
    .siderbar_menu li a:before {
       content: "";
       position: absolute;
       top: 0;
       left: 0;
       width: 3px;
       height: 100%;
       background: #1fafec;
       display: none;
     }
   .siderbar_menu li a:hover,
 .siderbar_menu li a.active {
       background: #1d4c9e;
       color: #fff;
     }
     
   .siderbar_menu li a:hover:before,
    .siderbar_menu li a.active:before {
       display: block;
     }
     
     .wrapper .main_container .top_navbar {
       width: calc(100% - 250px);
       height: 60px;
       background: #fff;
       display: flex;
       justify-content: space-between;
       padding: 15px 25px;
       position: fixed;
       top: 0;
       left: 250px;
       box-shadow: 0 2px 2px rgba(0, 0, 0, 0.125);
        transition: all 0.3s ease;
     }
     
     .wrapper .main_container .top_navbar .hamburger {
       width: 30px;
       height: 30px;
       position: relative;
       display: none;
     }
     
     .wrapper .main_container .top_navbar .hamburger .fas {
       color: #88a3d0;
       font-size: 25px;
       cursor: pointer;
       position: absolute;
       top: 50%;
       left: 50%;
       transform: translate(-50%, -50%);
     }
     
     .wrapper .main_container .top_navbar .menu {
       display: flex;
       align-items: center;
     }
     
     .wrapper .main_container .top_navbar .menu li a {
       margin: 0 5px;
       padding: 0 5px;
       position: relative;
       color: #1d4c9e;
       font-weight: 400;
       text-align: center;
     }
     
     .wrapper .main_container .top_navbar .menu li a:before {
       content: "";
       position: absolute;
       bottom: -20px;
       left: 0;
       width: 100%;
       height: 3px;
       background: #1fafec;
       display: none;
     }
     
     .wrapper .main_container .top_navbar .menu li a.active,
     .wrapper .main_container .top_navbar .menu li a:hover {
       color: #1fafec;
     }
     
     .wrapper .main_container .top_navbar .menu li a:hover:before,
     .wrapper .main_container .top_navbar .menu li a.active:before {
       display: block;
     }
     
     .wrapper .main_container .top_navbar .right_bar {
       display: flex;
       align-item: center;
     }
     
     .wrapper .main_container .top_navbar .right_bar li {
       margin: 0 10px;
     }
     
     .wrapper .main_container .top_navbar .right_bar .fas {
       font-size: 25px;
       cursor: pointer;
       color: #88a3d0;
     }
     
     .wrapper .main_container .top_navbar .right_bar li:hover,
     .wrapper .main_container .top_navbar .hamburger .fas:hover {
       opacity: 0.4;
     }
     
     .wrapper .main_container .container {
       padding: 0px;
       margin-top: 0px;
       overflow: auto;
       height: calc(100vh - 50px);
     }
     
     .wrapper .main_container .container .item {
       background: #fff;
       padding: 0px;
       border-bottom: 1px solid #d9e2e7;
       font-size-adjust: 18px;
       line-height: 22px;
       margin-bottom: 15px;
     }
     
     .wrapper .sidebar__inner .close{
         position: absolute;
         top: 5px;
         right: 15px;
         font-size: 25px;
         color: #fff;
       display: none;
       cursor: pointer;
     }
     
     .wrapper .sidebar__inner .close:hover{
       opacity: 0.5;
     }
       .ufirstname{
         white-space: nowrap; 
         width: 20%; 
         overflow: hidden;
         text-overflow: ellipsis; 
         
         
       }
       .uemail{
         white-space: nowrap; 
         width: 20%; 
         overflow: hidden;
         text-overflow: ellipsis; 
         padding-right:40%; 
         color:gray; 
        
       }
       .upseudo{
         white-space: nowrap; 
         width: 20%; 
         overflow: hidden;
         text-overflow: ellipsis; 
       }
       .udatecreate{
         white-space: nowrap; 
         width: 20%; 
         overflow: hidden;
         text-overflow: ellipsis; 
         color:gray;
         &::before{content:"·"; margin:0 5px;}
     
       }
       .entete{
         padding-right:0%; 
       }
     
     @media screen and (max-width: 800px){
       .wrapper .sidebar__inner{
         left: -100%;
       }
       .wrapper .main_container,
       .wrapper .main_container .top_navbar{
         margin-left: 0;
         width: 100%;
       }
       .wrapper .main_container .top_navbar{
         left: 0;
       }
       .wrapper.active .sidebar__inner{
         left: 0;
       }
       .wrapper .sidebar__inner .close,
       .wrapper .main_container .top_navbar .hamburger{
         display: block;
       }
       .wrapper.active .sidebar .bg_shadow{
         visibility: visible;
         opacity: 0.7;
       }
       .ufirstname{
         white-space: nowrap; 
         width: 20%; 
         overflow: hidden;
         text-overflow: ellipsis; 
       }
       .uemail{
         white-space: nowrap; 
         width: 20%; 
         overflow: hidden;
         text-overflow: ellipsis; 
         padding-right:40%; 
       }
       .upseudo{
         white-space: nowrap; 
         width: 20%; 
         overflow: hidden;
         text-overflow: ellipsis; 
       }
       .udatecreate{
         white-space: nowrap; 
         width: 20%; 
         overflow: hidden;
         text-overflow: ellipsis; 
     
       }
       .entete{
         padding-right:0%; 
       }
     }
     
     @media screen and (max-width: 530px){
       .wrapper .main_container .top_navbar .menu{
         display: none;
       }
       .wrapper .main_container .top_navbar{
         margin-left: 0;
         width: 100%;
       }
       .ufirstname{
         white-space: nowrap; 
         width: 20%; 
         overflow: hidden;
         text-overflow: ellipsis; 
       }
       .uemail{
         white-space: nowrap; 
         width: 20%; 
         overflow: hidden;
         text-overflow: ellipsis; 
         padding-right:32%; 
       }
       .upseudo{
         white-space: nowrap; 
         width: 20%; 
         overflow: hidden;
         text-overflow: ellipsis; 
       }
       .udatecreate{
         white-space: nowrap; 
         width: 20%; 
         overflow: hidden;
         text-overflow: ellipsis; 
     
       }
       .entete{
         padding-right:0%; 
       }
     }
     /*
     CODE DE POST CSS
     **/
     .dropbtn {
       background-color: #04AA6D;
       color: white;
       padding: 16px;
       font-size: 16px;
       border: none;
     }
     
     .dropdown {
       position: relative;
       display: inline-block;
     }
     
     .dropdown-content {
       display: none;
       position: absolute;
       background-color: #f1f1f1;
       min-width: 160px;
       box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
       z-index: 1;
     }
     
     .dropdown-content a {
       color: black;
       padding: 12px 16px;
       text-decoration: none;
       display: block;
     }
     
     .dropdown-content a:hover {background-color: #ddd;}
     
     .dropdown:hover .dropdown-content {display: block;}
     
     .at {
       color: red;
     }
     
     .hash {
       color: blue;
     }
     
     
     .jqueryHashtags .highlighter {
       white-space: pre-wrap;
       color: transparent;
       overflow: hidden;
       position: absolute;
       padding-left: 7px;
       padding-top: 5px;
       font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
       font-size: 14px;
       line-height: 20px;
     }
     
     .jqueryHashtags .theSelector {
       background-color: transparent;
       position: relative;
       direction: ltr;
       font-size: 14px;
       font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
       resize: none !important;
       -webkit-transition: height 0.2s;
       border: 1px solid #cccccc;
       -webkit-border-radius: 4px;
       -moz-border-radius: 4px;
       border-radius: 4px;
       padding: 4px 6px;
       vertical-align: middle;
       min-height: 48px !important;
       line-height: 20px;
     }
     
     .jqueryHashtags .hashtag {
       background: -webkit-linear-gradient(#dce6f8, #bdcff1);
       border-radius: 2px;
       box-shadow: 0 0 0 1px #a3bcea;
       font-size: 14px;
       white-space: pre-wrap;
       word-break: break-word;
       line-height: 20px;
     }
     
     
     
     /*
     CODE DE POST CSS
     **/
     /* Grid*/
     .col {
         clear: both;
         float: none;
         margin-left: auto;
         margin-right: auto;
         width: auto !important;
       }
       
     }
     .container {
       display: flex;
       flex-wrap: wrap;
       justify-content: space-between;
       
     }
     
     .item {
       flex: 0 32%;
       height: 100px;
       margin-bottom: 2%; /* (100-32*3)/2 */
     }
       
         
         
         /*
         CSS GRID
         **/
         .container {
       max-width: 1335px;
       margin: 0 auto;
     }
     
     .grid-row {
       display: flex;
       flex-flow: row wrap;
       justify-content: flex-start;
     }
     
     .grid-item {
         z-index: 1;
       height: 300px;
       flex-basis: 20%;
       -ms-flex: auto;
       width: 250px;
       position: relative;
       padding: 10px;
       box-sizing: border-box;
       border-radius: 25px;
      margin-top:25px;
       margin-bottom: 70px;
     }
     
     
     .grid-row a {
       text-decoration: none;
     }
     
     .wrapping-link {
       position: absolute;
       top: 0;
       left: 0;
       bottom: 0;
       right: 0;
       z-index: 2;
       color: currentColor;
     }
     
     .grid-item-wrapper {
      /* border-radius: 25px;*/
       -webkit-box-sizing: initial;
       -moz-box-sizing: initial;
       box-sizing: initial;
       background: #aaa;
       margin: 0;
       height: 100%;
       width: 100%;
       overflow: hidden;
      /* -webkit-transition: padding 0.15s cubic-bezier(0.4,0,0.2,1), margin 0.15s cubic-bezier(0.4,0,0.2,1), box-shadow 0.15s cubic-bezier(0.4,0,0.2,1);
       transition: padding 0.15s cubic-bezier(0.4,0,0.2,1), margin 0.15s cubic-bezier(0.4,0,0.2,1), box-shadow 0.15s cubic-bezier(0.4,0,0.2,1);*/
       position: relative;
     }
     
     .grid-item-container {
       height: 100%;
       width: 100%;
       /*position: relative;*/
     }
     .photocouv{
     
     
     }
     .grid-image-top {
      /* height: 45%;
       width: 120%;*/
       height: 100%;
       width: 100%;
       background-size: cover;
       position: relative;
       background-position: 50% 50%;
      /* left: -10.5%;
       top: -4.5%;*/
       left:-15%;
       top: -10.5%;
       /*display: none;*/
     }
     
     .grid-image-top .centered {
       text-align: center;
       transform: translate(-50%, -50%);
       background-size: contain;
       background-repeat: no-repeat;
       position: absolute;
       top: 58%;
       left: 65.5%;
       right: 65%;
       width: 60%;
       height: 60%;
       background-position: center;
     }
     
     .rex-ray-image {
      /* background-image: url(https://thecodeteam.com/wp-content/uploads/2017/08/Rex-Ray-icon-209x300.png);*/
     }
     
     
     .sputnik-image {
       background-image: url(https://thecodeteam.com/wp-content/uploads/2017/08/sputnik-1-300x257.png);
     }
     
     .edgex-image {
       background-image: url(https://thecodeteam.com/wp-content/uploads/2017/08/edge-x-300x287.png);
     }
     
     .openswitch-image {
       background-image: url(https://thecodeteam.com/wp-content/uploads/2017/08/open-switch-300x207.png);
     }
     
     .scaleio-image {
       background-image: url(https://thecodeteam.com/wp-content/uploads/2017/08/K8s_ScaleIO_Color-white-thumb-221x300.png);
     }
     
     .csi-image {
       background-image: url(https://thecodeteam.com/wp-content/uploads/2017/08/csi-1-300x99.png);
     }
     
     .kubernetes-image {
       background-image: url(https://thecodeteam.com/wp-content/uploads/2017/08/kubernetes-300x293.png);
     }
     
     .grpc-image {
       background-image: url(https://thecodeteam.com/wp-content/uploads/2017/08/grpc-300x105.png);
     }
     
     .envoy-image {
       background-image: url(https://thecodeteam.com/wp-content/uploads/2017/08/envoy_logo-5028052-300x91.png);
     }
     
     .istio-image {
       background-image: url(https://thecodeteam.com/wp-content/uploads/2017/08/istio-203x300.png);
     }
     
     .grid-item-content {
       padding: 0 0px 0px 0px;
     }
     
     .item-title {
       font-size: 24px;
       line-height: 26px;
       font-weight: 700;
       margin-bottom: 18px;
       display: block;
     }
     
     .item-category {
       text-transform: uppercase;
       display: block;
       margin-bottom: 20px;
       font-size: 14px;
     }
     
     .item-excerpt {
       margin-bottom: 20px;
       display: block;
       font-size: 14px;
     }
     
     .more-info {
       position: absolute;
       bottom: 0;
       margin-bottom: 25px;
       padding-left: 0;
       transition-duration: .5s;
       font-size: 12px;
       display: flex;
     }
     
     .more-info i {
       padding-left: 5px;
       transition-duration: .5s;
     }
     
     .grid-item:hover .more-info i {
       padding-left: 20px;
       transition-duration: .5s;
     }
     
     .more-info i::before {
       font-size: 16px;
     }
     
     .grid-item:hover .grid-item-wrapper {
       /*padding: 2% 2%;
       margin: -2% -2%;*/
      /* z-index:1111;
       transform:perspective(2000px) rotate(-10deg);
       box-shadow:inset 20px 0 50px rgba(0,0,0,0.5);*/
     }
     @media(max-width: 1333px) {
       .grid-item {
         height: 350px;
         flex-basis: 33.33%;
       }
     }
     
     @media(max-width: 1073px) {
        .grid-item {
         height: 350px;
         flex-basis: 45.33%;
       }
     }
     
     @media(max-width: 815px) {
       .grid-item {
         height: 400px;
         flex-basis: 50%;
       }
     }
     
     @media(max-width: 555px) {
       .grid-item {
         height: 500px;
         flex-basis: 100%;
       }
     }
     
         
         
     </style>
<!--CODEE__-->
<script src="https://kit.fontawesome.com/5846046699.js" crossorigin="anonymous"></script>

<div class="wrapper">
    <div class="sidebar">
      <div class="bg_shadow"></div>
        <div class="sidebar__inner ">
        <div class="close">
          <i class="fas fa-times"></i>
        </div>
        <div class="profile_info">
            <div class="profile_img">
              @if (auth()->user()->profile_image)
              <a href="#" > <img class="rounded-circle z-depth-2" alt="100x100" src="{{ asset(auth()->user()->profile_image) }}" data-holder-rendered="true" style="height:65px; width:65px;  object-fit: cover; " id="pic"></a>
             <!-- <a href="#" class="img logo rounded-circle mb-5"><img src="{{ asset(auth()->user()->image) }}" alt="Photo de profil"  ></a>-->
              <!--<a href="#" class="img logo rounded-circle mb-5"><img src="{{ asset("/uploads/images/photoNaN.png") }}" alt="Photo de profil"  ></a>-->
              @else
              <a href="#" > <img class="rounded-circle z-depth-2" alt="100x100" src="{{ asset("/uploads/images/photoNaN.png") }}" data-holder-rendered="true" style="height:65px; width:65px; " id="pic"></a>
              @endif    
             
            </div>
            <div class="profile_data">
                <p class="name">{{ auth()->user()->firstname }}   </p>  
                <p class="name">{{ auth()->user()->lastname}}</p>
                <div data-toggle="modal" data-target="#modal" class="title m-b-md"><div class="btn">Update Profile</div></div>
                
            </div>
        </div>
        <div class="flex-scroll scroll-styled pad2">
        <ul class="siderbar_menu">
            <li><a href="{{route('user.account',$user->pseudo)}}">
              <div class="icon"><i class="fas fa-home"></i></div>
              <div class="title">ACCUEIL</div>
              </a></li>  
          <li><a href="{{route('user.postLists',$user->pseudo)}}" class="active">
              <div class="icon"><i class="fas fa-file-alt"></i></div>
              <div class="title">FORUM</div>
              </a></li>  
          <li><a href="#">
              <div class="icon"><i class="fas fa-heart"></i></div>
              <div class="title">FAVORIS</div>
              </a></li>  
          <li><a href="{{route('file.index',$user->pseudo)}}">
                <div class="icon"><i class="fas fa-clock"></i></div>
                <div class="title">HISTORIQUE</div>
                </a></li>      
         <li><a href="#">
              <div class="icon"><i class="fas fa-cog"></i></div>
              <div class="title">PARAMÈTRES</div>
              </a></li>  
          <li><a href="#">
              <div class="icon"><i class="fas fa-question-circle"></i></div>
              <div class="title">AIDE</div>
              </a></li>
        </ul>
      </div>
      </div>
    </div>
    <div class="main_container">
      <div class="top_navbar">
          <div class="hamburger">
              <div class="hamburger__inner">
                  <i class="fas fa-bars"></i>  
              </div>  
          </div>
          
         <ul class="menu">
            <!--<li><a href="#"><i class="fa fa-search"></i></a></li>-->
            <!--<li><a href="#" class="active">Blogs</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">About</a></li>-->
         </ul>
         <ul class="right_bar">
            <li>
                <a class="nav-link" href="#"><i >{{ date('Y-m-d ') }} </i></a>
            </li>
            <!--<li>
              <a class="nav-link" href="#"><i class="fas fa-cog" ></i></a>
            </li>  
            <li>
              <a class="nav-link" href="#"><i class="fas fa-question-circle" ></i></a>
            </li>-->
           <!-- <li><i class="fas fa-search"></i></li>-->
            <li><a class="nav-link" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            
            </li> 
         </ul>
      </div>
      
      <div class="container" style=" ">

        <div class="item">
          <!--<h1 style=" text-align: center;  background: #222;
          color: #aaa; font-size:30px">Bienvenue sur  &lt;MC Stage&gt; C'est
          <span
             class="txt-rotate"
             data-period="2000"
             data-rotate='[ "simple", "customizé", "stylé", "cool", "fun!" ]'></span>
        </h1>-->
           <div >
                  <div class="col-xl-12 order-xl-1">
                      <div class="card bg-secondary shadow">
                        <div class="card-header bg-white border-0">
                          <div class="row align-items-center">
                             <div class="col-8">
                                <!--<h3 class="mb-0" style="color:rgb(99, 140, 124)">Modifier mon profil</h3>-->
                           </div>
                           <div class="col-4 text-right">
                                <!-- <a href="{{-- route('profile.editProfileExpFormation',$profile->id) --}}" class="btn btn-sm btn-primary" style=" font-style:normal; font-weight:bold;font-family:Garamond, Trebuchet MS, Tahoma;">Ajouter une expérience pro/formation </a>-->
                          </div>
                       </div>
              </div>
          <div class="card-body" style="background:rgb(240, 245, 242); " >
                     @if ($errors->any())
                            <div class="alert alert-danger">
                                  <strong>oops!</strong> Vos entrées sont invalides.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                   <li>{{ $error }}</li>
                               @endforeach
                            </ul>

                        </div>
                    @endif
                     @if(Session::has('success'))
                       <div class="alert alert-success">
                          {{ Session::get('success') }}
                        @php
                          Session::forget('success');
                        @endphp
                 </div>
                    @endif
                      @if (\Session::has('success'))
                        <div class="alert alert-success">
                   <ul>
                      <li>{!! \Session::get('success') !!}</li>
                    </ul>
                   </div>
                  @endif
        
               </div>
            </div>
           </div>
           </div>
           <div class="content">
            <div data-toggle="modal" data-target="#modale" class="title m-b-md">
              <div class="col-xs-12 col-sm-12 col-md-12 ">
                <button type="" class="btn btn-secondary">Add a Post</button>
                </div>
            </div>
           </div>
            <div class="container-fluid mt--7">
                <div class="row">
                 <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                   <div class="card card-profile shadow">
                     <div class="row justify-content-center">
                       <div class="col-lg-3 order-lg-2">
                         <!--<div class="card-profile-image">
                           <a href="#">
                             <img src="https://demos.creative-tim.com/argon-dashboard/assets/img/theme/team-4.jpg" class="rounded-circle">
                           </a>
                         </div>-->
                         <div style=" text-align: center;font-family:Impact, Charcoal, sans-serif;">Suggestions</div>
                       </div>
                     </div>
                     <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                       <div class="d-flex justify-content-between">
                        <!-- <a href="#" class="btn btn-sm btn-info mr-4">Connect</a>
                         <a href="#" class="btn btn-sm btn-default float-right">Message</a>-->
                       </div>
                     </div>
                     <div class="card-body pt-0 pt-md-4">
                       <div class="row">
                         <div class="col">
                           <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                            <!-- <div>
                               <span class="heading"></span>
                               <span class="description">Friends</span>
                             </div>
                             <div>
                               <span class="heading">10</span>
                               <span class="description">Photos</span>
                             </div>
                             <div>
                               <span class="heading">89</span>
                               <span class="description">Comments</span>
                             </div>-->
                           </div>
                         </div>
                       </div>
                       <div class="text-center">
                       
                       </div>
                     </div>
                   </div>
                 </div>
                 
                <div class="col-xl-8 order-xl-1">
                  <!--LIST POST-->
              
                  @foreach($posts as $post)
                  <a href="{{ route('post.show',$post->slug) }}">
                    <div class="card border-secondary mb-5" style="">
                    <a href="{{ route('post.show',$post->slug) }}"> <div class="card-header bg-transparent border-success">
                      
                <div class="row"  style="display: flex;flex-direction: row;justify-content:flex-start; ">
                  <div class="entete" style="padding-left:0px;display: flex;flex-direction: row;justify-content:start; ">
                    @if (auth()->user()->image)
                    <div  style=""><a href="#" ><img class="rounded-circle z-depth-2"  src="{{ asset(auth()->user()->image) }}"  style="height:45px; width:45px; object-fit: cover; "alt="Photo de profil" id="pic" ></a></div>
                    @else
                      <div  style=""><a href="#" > <img class="rounded-circle z-depth-2" alt="100x100" src="{{ asset("/uploads/images/photoNaN.png") }}" data-holder-rendered="true" style="height:45px; width:45px; " id="pic"></a></div>
                     
                    @endif
                   
                  
                  
                  </div>
                  <div class="ufirstname" style="padding-left:10px; padding-right:10px; font-weight:bold ">
                    {{ $post->user->firstname }} 
                    {{-- $post->user->firstname --}}
                </div>
                <!--<div class="upseudo" style="padding-right:10px; ">
                  {{ $post->user->pseudo }} 
                  {{-- $post->user->firstname --}}
              </div>-->

                <div class="uemail" style=" ">.
                     {{ $post->user->email }} 
                     {{-- $post->user->firstname --}}
                 </div>
                  
             
                  <!--<div class="">{{ ucfirst (utf8_encode ($post->created_at->formatLocalized('%A %d %B %Y'))) }} </div>-->
                  <div class="udatecreate" style="padding-right:10px;padding-left:10px;">- {{$post->created_at->diffForHumans() }} </div>
                  <div class="dropdown" style="margin-left:10px; ">
                    <div style="padding-left:15px; font-size:16; font-weight:bold;"><i class="fas fa-ellipsis-h"></i></div>
                    <div class="dropdown-content">
                      <a href="{{ route('user.deletepost',$post->id) }}"><div><i class="fas fa-trash-alt"></i></div></a>
                      
                    </div>
                  </div>
              </div></a>
              
              </div>
              <a href="{{ route('post.show',$post->slug)}}">
              <div class="card-body ">
                  <!--<div class="row"  style=" display: flex;flex-direction: row;justify-content:start; ">
                  
                    {{-- $post->tags->name --}}
                    @foreach($post->tags as $tag)
                      <a href=""> <div class="" style="margin: 0px 0px 0px 10px; color: rgb(88, 77, 240);">#{{ $tag->name }}</div></a>
                    @endforeach
             
                  
                  </div>-->
             
                <h5 class="card-title" style=" color: rgb(88, 77, 240);">{{ $post->title }}</h5>
                <p class="card-text" style=" color: rgb(0, 0, 0);" >{{ $post->body }}</p>

                <hr class="my-3">

                <div class="" style="font-size:11px; color:gray;">{{ ucfirst (utf8_encode ($post->created_at->formatLocalized('%A %d %B %Y'))) }} </div>
              </div></a>
              <!--<a href="{{-- route('post.show',$post->slug) --}}">-->
               <div class="card-footer bg-transparent border-success">
                <div id="conteneur" style=" display: flex;flex-direction: row;justify-content: space-between; ">
                  <div class="element 1">
                    <div class="likes">
                     <div class="panel panel-info" data-id="{{ $post->id }}">
                    
                       <div class="panel-body">
                           <div class="">
                               <div class="liko" style="">
                                  <!-- <i id="likeo{{$post->id}}" class="glyphicon glyphicon-thumbs-up {{ auth()->user()->hasLiked($post) ? 'like-post' : '' }}"></i>--> <!--<div id="like{{$post->id}}-bs3" class="badge badge-primary tl-follower">{{ $post->likers()->get()->count() }}</div>-->
                                   <span id="likeo{{$post->id}}" class="favori">
                                     @if (auth()->user()->hasLiked($post) )
                                     <i class="fa fa-heart fa-lg " style="color:red; "></i>
                                     @else
                                     <i class="fa fa-heart fa-spin fa-lg" style="color:black;"></i>
                                     @endif  
                                    <!--<i class='fa fa-heart'></i>-->
                                    
                                   </span> <span class="tl-follower" style="padding-left:15px; font-size:16; font-weight:bold;">{{ $post->likers()->get()->count() }}</span>
                              
                               </div>
                             </div>
                             
                       </div>
                   </div> 
                       
                    
                  </div>
                  </div>
                  <div class="element 2">
                    <div class="projects">
                      <div><i class='fa fa-comment fa-lg'></i><span class="" style="padding-left:15px; font-size:16; font-weight:bold;">{{ count($post->comments) }}</span></div>
                      <!--<div></div>-->
                    </div>  
                  
                  </div>
                  <div class="element 3">
                    <div class="share" data-id="{{ $post->slug }}" >
                      <div  data-toggle="modal" data-target="#modalshare" class="partage"><i class='fa fa-share fa-lg'></i><span class="" style="padding-left:15px; font-size:16; font-weight:bold;">{{$post->seo_title }}</span></div>
                        
                    </div>
                    
                    <!--<div class="dropdown">
                     <div style="padding-left:15px; font-size:16; font-weight:bold;"><i class='fa fa-share fa-lg'></i> 50</div>
                     <div class="dropdown-content">
                       <div>{!!Share::currentPage()->facebook()!!}</div>
                       <div>{!!Share::currentPage()->twitter()!!}</div>
                       <div>{!!Share::currentPage()->reddit()!!}</div>
                       <div>{!!Share::currentPage()->linkedin()!!}</div>
                       <div>{!!Share::currentPage()->whatsapp()!!}</div>
                       
                     </div>
                   </div>-->
                    
                    
                  
                  </div>
              </div>
              
           
             
             
             
             
              </div>
             </div></a>
            
            @endforeach
             
             
                 
               </div>
               
               
             
             
             
             
             </div>
             
             
             </div>


        </div>
        
      
      </div>
      
    </div>
</div>


<!--CODEE__-->
 <!-- Modal HTML Markup -->
 <div id="modal" class="modal fade">
  <div class="modal-dialog" role="document">
  <div class="modal-content">
  <div class="modal-header">
    <h1 class="modal-title"> Update profile</h1>
  </div>
  <div class="modal-body">
  <div class="col-xl-12 order-xl-1">
    <div class="card bg-secondary shadow">
      <div class="card-header bg-white border-0">
        <div class="row align-items-center">
          <div class="col-12">
            <!--<h3 class="mb-0" style="color:rgb(99, 140, 124)">Modifier mon profil</h3>-->
          </div>
          <div class="col-4 text-right">
           <!-- <a href="{{-- route('profile.editProfileExpFormation',$profile->id) --}}" class="btn btn-sm btn-primary" style=" font-style:normal; font-weight:bold;font-family:Garamond, Trebuchet MS, Tahoma;">Ajouter une expérience pro/formation </a>-->
          </div>
        </div>
      </div>
      <div class="card-body" style="background:rgb(240, 245, 242); " >
        @if ($errors->any())
              <div class="alert alert-danger">
                <strong>oops!</strong> Vos entrées sont invalides.<br><br>
                  <ul>
                      @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                      @endforeach
                  </ul>
  
              </div>
        @endif
        @if(Session::has('success'))
             <div class="alert alert-success">
              {{ Session::get('success') }}
             @php
               Session::forget('success');
              @endphp
        </div>
        @endif
        @if (\Session::has('success'))
        <div class="alert alert-success">
          <ul>
          <li>{!! \Session::get('success') !!}</li>
          </ul>
           </div>
         @endif
         <form action="{{ route('user.updateprofile',$user->pseudo) }}" method="POST" role="form" enctype="multipart/form-data">
          @csrf
          <div class="form-group row">
              <label for="firstname" class="col-md-4 col-form-label text-md-right">Firstname</label>
              <div class="col-md-6">
                  <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname', auth()->user()->firstname) }}">
              </div>
          </div>
          <div class="form-group row">
              <label for="lastname" class="col-md-4 col-form-label text-md-right">Lastname</label>
              <div class="col-md-6">
                  <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname', auth()->user()->lastname) }}">
              </div>
          </div>

          <div class="form-group row">
              <label for="pays" class="col-md-4 col-form-label text-md-right">Pays</label>
              <div class="col-md-6">
                  <input id="pays" type="text" class="form-control" name="pays" value="{{ old('pays', auth()->user()->pays) }}">
              </div>
          </div>
          <div class="form-group row">
              <label for="numTel" class="col-md-4 col-form-label text-md-right">Numero Tel</label>
              <div class="col-md-6">
                  <input id="numTel" type="text" class="form-control" name="numTel" value="{{ old('numTel', auth()->user()->numTel) }}">
              </div>
          </div>

          <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
              <div class="col-md-6">
                  <input id="email" type="text" class="form-control" name="email" value="{{ old('email', auth()->user()->email) }}" disabled>
              </div>
          </div>
          <div class="form-group row">
              <label for="profile_image" class="col-md-4 col-form-label text-md-right">Profile Image</label>
              <div class="col-md-6">
                  <input id="profile_image" type="file" class="form-control" name="profile_image">
                  @if (auth()->user()->image)
                      <code>{{ auth()->user()->image }}</code>
                  @endif
              </div>
          </div>
          <div class="form-group row mb-0 mt-5">
              <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary">Update User</button>
              </div>
          </div>
      </form>
      </div>
    </div>
  </div>
    
  </div>
  </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
  </div>

    <!-- Modal HTML Markup -->
<div id="modale" class="modal fade">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
      <h1 class="modal-title"> Add a Post</h1>
    </div>
    <div class="modal-body">
    <div class="col-xl-12 order-xl-1">
      <div class="card bg-secondary shadow">
        <div class="card-header bg-white border-0">
          <div class="row align-items-center">
            <div class="col-12">
              <!--<h3 class="mb-0" style="color:rgb(99, 140, 124)">Modifier mon profil</h3>-->
            </div>
            <div class="col-4 text-right">
             <!-- <a href="{{-- route('profile.editProfileExpFormation',$profile->id) --}}" class="btn btn-sm btn-primary" style=" font-style:normal; font-weight:bold;font-family:Garamond, Trebuchet MS, Tahoma;">Ajouter une expérience pro/formation </a>-->
            </div>
          </div>
        </div>
        <div class="card-body" style="background:rgb(240, 245, 242); " >
          @if ($errors->any())
                <div class="alert alert-danger">
                  <strong>oops!</strong> Vos entrées sont invalides.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                        @endforeach
                    </ul>
    
                </div>
          @endif
          @if(Session::has('success'))
               <div class="alert alert-success">
                {{ Session::get('success') }}
               @php
                 Session::forget('success');
                @endphp
          </div>
          @endif
          @if (\Session::has('success'))
          <div class="alert alert-success">
            <ul>
            <li>{!! \Session::get('success') !!}</li>
            </ul>
             </div>
           @endif
          <form action="{{ route('user.savePost',$user->pseudo) }}" method="POST"  enctype="multipart/form-data">
            <h6 class="" style="text-align: center;font-family:Impact, Charcoal, sans-serif;"></h6>
            @csrf
            @if ($message = Session::get('success'))
              <div class="alert alert-success">
                  <strong>{{ $message }}</strong>
              </div>
            @endif
            
            @method('PUT')
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group focused">
                    <label class="form-control-label" for="title" style="opacity: 0.4;">Title: <span class="text-danger" style="opacity: 0.4;">*</span></label>
                    <input type="text" id="title"  name="title" class="form-control form-control-alternative" placeholder="Les fleurs du mal (Gustave Flaubert)" value="">
                  </div>
                </div>
                
              </div>
            <!-- <div class="row">
                <div class="col-lg-6">
                  <div class="form-group focused">
                    <label class="form-control-label" for="input-first-name">Type de poste <span class="text-danger">*</span></label>
                    <input type="text" id="input-first-name" name="typePoste" class="form-control form-control-alternative" placeholder="CDI" >
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group focused">
                    <label class="form-control-label" for="input-last-name">Reference <span class="text-danger">*</span></label>
                    <input type="text" id="input-last-name" name="reference" class="form-control form-control-alternative" placeholder="A-25445457" >
                  </div>
                </div>
              </div>-->
              <!--
              
              </div>-->
         
       
                
              
           
            </div>
            <div class="pl-lg-4">
              
              
             
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group green-border-focused">
                    <label class="form-control-label" for="body" style="opacity: 0.4;">Body <span class="text-danger" style="opacity: 0.4;">*</span></label>
                    
                    <textarea class="form-control" id="body" name="body" rows="3"></textarea>
                  </div>
                </div>
              </div>
              
            </div>
            
            <hr class="my-4">
    
            <!-- Submit -->
            <div class="" class="col-xs-12 col-sm-6 col-md-3 ml-auto" style="text-align: right;">
            <!--<div class="col-xs-12 col-sm-12 col-md-12 ">-->
              <button type="submit" class="btn btn-success">Publish</button>
              </div>
          </form>
        </div>
      </div>
    </div>
      
    </div>
    </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    </div>



<!--CODEE__-->
 <!-- Modal HTML Markup -->
 <div id="modalshare" class="modal fade">
  <div class="modal-dialog" role="document">
  <div class="modal-content">
  <div class="modal-header">
    <h1 class="modal-title"> Share</h1>
  </div>
  <div class="modal-body">
  <div class="col-xl-12 order-xl-1">
    <div class="card bg-secondary shadow">
      <div class="card-header bg-white border-0">
        <div class="row align-items-center">
          <div class="col-12">
            <!--<h3 class="mb-0" style="color:rgb(99, 140, 124)">Modifier mon profil</h3>-->
          </div>
          <div class="col-4 text-right">
           <!-- <a href="{{-- route('profile.editProfileExpFormation',$profile->id) --}}" class="btn btn-sm btn-primary" style=" font-style:normal; font-weight:bold;font-family:Garamond, Trebuchet MS, Tahoma;">Ajouter une expérience pro/formation </a>-->
          </div>
        </div>
      </div>
      <div class="card-body" style="background:rgb(240, 245, 242); " >
       <div class="sharelink">
           <div  id="links" class="links">
            <div>{!!Share::currentPage()->facebook()!!}</div>
            <div>{!!Share::currentPage()->twitter()!!}</div>
            <div>{!!Share::currentPage()->reddit()!!}</div>
            <div>{!!Share::currentPage()->linkedin()!!}</div>
            <div>{!!Share::currentPage()->whatsapp()!!}</div>

           </div>

       </div>
         
        
      </div>
    </div>
  </div>
    
  </div>
  </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
  </div>
















<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">

$(".hamburger .fas").click(function(){
    $(".wrapper").addClass("active")
})

$(".wrapper .sidebar .close").click(function(){
    $(".wrapper").removeClass("active")
})




</script>

<!--PARTIE AJAX-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
 $(document).ready(function() {     

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('.liko').click(function(){    
    var id = $(this).parents(".panel").data('id');
    var d = $('#'+this.id+'-bs3').html();
    var cObjId = this.id;
    var cObj = $(this);
    var c = $(this).parent("div").find(".tl-follower").text();
    var ex=cObj.parents(".panel").find(".tl-follower").text();
   

    $.ajax({
       type:'POST',
       url:"{{  route('like') }}",
       data:{id:id},
       success:function(data){
       console.log(ex);
          if(data.success==false){
            //$('#'+cObjId+'-bs3').text(parseInt(c)-1);
            //var numb=idbis-1;
            //idbis=idbis+1;
            cObj.parents(".panel").find(".tl-follower").html(parseInt((ex)+1) );
            cObj.parents(".panel").find(".favori").html(`<i class="fa fa-heart fa-lg " style="color:red;"></i>` );
            //idbis=idbis+1;
            //$(cObj).removeClass("like-post");
          }else if(data.success==true){
            //idbis=idbis+1;
            cObj.parents(".panel").find(".tl-follower").html(parseInt((ex)-1) );
            cObj.parents(".panel").find(".favori").html(`<i class="fa fa-heart fa-spin fa-lg" style="color:black;"></i>` );
            //idbis=idbis-1;
            //$('#'+cObjId+'-bs3').text(parseInt(c)+1);
           // $(cObj).addClass("like-post");
          }
       }
    });

});      

$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});                                        
}); 
 
 /* $(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#saveLikeDislike').click(function() {*/
       /* var _post=$(this).data('post');
        var _type=$(this).data('type');
        var user_id = $(this).data('id');
        var vm=$(this);   
        var ca = $(this).parent("div").find(".dislike-count").text();
        var cb = $(this).parent("div").find(".like-count").text();*/
       /* var _post=$(this).data('post');
        var _type=$(this).data('type');
        var vm=$(this);

        $.ajax({
            type: 'POST',
            url: "{{route('post.likeDislike') }}",
            dataType:'json',
            data: {post:_post, type:_type,},*/ /*{ user_id: user_id 
                     post_id= _post},*/
        /*beforeSend:function(){
                    vm.addClass('disabled');
                   },      
        success: function(data) {
                console.log(data.success);
                if(data.bool==true){
                vm.removeClass('disabled').addClass('active');
                vm.removeAttr('id');
                var _prevCount=$("."+_type+"-count").text();
                _prevCount++;
                $("."+_type+"-count").text(_prevCount);
            }*/
           /* if (data.success==true) {
              vm.removeClass('disabled').addClass('active');
                vm.removeAttr('id');
              //vm.find("strong").text("Follow");
              vm.parent("div").find(".dislike-count").text(parseInt(c)-1);
                } else {
                  vm.removeClass('disabled').addClass('active');
                vm.removeAttr('id');
                 // vm.find("strong").text("UnFollow");
                  vm.parent("div").find(".like-count").text(parseInt(c) +1);
                }
      
            }
        });
    });*/


</script>
<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
 $(document).ready(function () {
 

$('.card-text').each(function(e) {
  //Get full string as words
  var words = $(this).text().split(" ");
  for (var i = 0; i < words.length; i++) {
    if (words[i].charAt(0) == "#") {
      words[i] = "<a href=''>"+"<span class=hash >" + words[i] + "</span>"+"</a>";
    }

    if (words[i].charAt(0) == "@") {
      words[i] = "<span class=at >" + words[i] + "</span>";
    }
  }

  $(this).html(words.join(" "));

});

 });
    //test
   





</script>
<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
 $(document).ready(function () {
  //for (let index = 0; index < posts.length; index++) {
//$('.card-text').each(function(i, obj) {
 /* const posts=document.getElementsByClassName(".card-text");
  for (let index = 0; index < posts.length; index++) {
     let myhtml = $('.card-text').html();
  //var myhtml = document.getElementsByClassName("card-text");
const mytypes = myhtml.match(/(@|#)+[^\s<\.]+/g);
//x.innerHTML = `<a href="example.org" style="color:red;">${x.textContent}</a>`

const myReplace = (mytype) => {
  const isat = mytype.includes('@');
  const replacestring = `<span class="${isat ? 'at' : 'hash'}">${mytype}</span>`;
  myhtml = myhtml.replace(mytype, replacestring);
};

mytypes.forEach(el => myReplace(el));
//$('.card-text').html(myhtml);

);*/
    //test
   



//});
 // }
   //$("textarea").hashtags();
   $("textarea").wrap('<div class="jqueryHashtags"><div class="highlighter"></div></div>').unwrap().before('<div class="highlighter"></div>').wrap('<div class="typehead"></div></div>');
   $("textarea").addClass("theSelector");
	//	autosize($(this));
    $("textarea").on("keyup", function() {
			var str = $("textarea").val();
			$("textarea").parent().parent().find(".highlighter").css("width",$("textarea").css("width"));
			str = str.replace(/\n/g, '<br>');
			if(!str.match(/(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?#([a-zA-Z0-9]+)/g) && !str.match(/(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?@([a-zA-Z0-9]+)/g) && !str.match(/(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?#([\u0600-\u06FF]+)/g) && !str.match(/(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?@([\u0600-\u06FF]+)/g)) {
                if(!str.match(/#(([_a-zA-Z0-9]+)|([\u0600-\u06FF]+)|([ㄱ-ㅎㅏ-ㅣ가-힣]+)|([ぁ-んァ-ン]+)|([一-龯]+))#/g)) { //arabic support, CJK support
					str = str.replace(/#(([_a-zA-Z0-9]+)|([\u0600-\u06FF]+)|([ㄱ-ㅎㅏ-ㅣ가-힣]+)|([ぁ-んァ-ン]+)|([一-龯]+))/g,'<span class="hashtag">#$1</span>');
				}else{
					str = str.replace(/#(([_a-zA-Z0-9]+)|([\u0600-\u06FF]+)|([ㄱ-ㅎㅏ-ㅣ가-힣]+)|([ぁ-んァ-ン]+)|([一-龯]+))#(([_a-zA-Z0-9]+)|([\u0600-\u06FF]+)|([ㄱ-ㅎㅏ-ㅣ가-힣]+)|([ぁ-んァ-ン]+)|([一-龯]+))/g,'<span class="hashtag">#$1</span>');
				}
				if(!str.match(/@(([a-zA-Z0-9]+)|([\u0600-\u06FF]+)|([ㄱ-ㅎㅏ-ㅣ가-힣]+)|([ぁ-んァ-ン]+)|([一-龯]+))@/g)) {
					str = str.replace(/@(([a-zA-Z0-9]+)|([\u0600-\u06FF]+)|([ㄱ-ㅎㅏ-ㅣ가-힣]+)|([ぁ-んァ-ン]+)|([一-龯]+))/g,'<span class="hashtag">@$1</span>');
				}else{
					str = str.replace(/@(([a-zA-Z0-9]+)|([\u0600-\u06FF]+)|([ㄱ-ㅎㅏ-ㅣ가-힣]+)|([ぁ-んァ-ン]+)|([一-龯]+))@(([a-zA-Z0-9]+)|([\u0600-\u06FF]+)|([ㄱ-ㅎㅏ-ㅣ가-힣]+)|([ぁ-んァ-ン]+)|([一-龯]+))/g,'<span class="hashtag">@$1</span>');
				}
			}
			$("textarea").parent().parent().find(".highlighter").html(str);
		});
		$("textarea").parent().prev().on('click', function() {
			$("textarea").parent().find(".theSelector").focus();
		});
   
		
    
    //$("textarea").hashtags();

   // $(".card-text").hashtags();
    
}
);

 /*(function($) {
	$.fn.hashtags = function() {
		$(this).wrap('<div class="jqueryHashtags"><div class="highlighter"></div></div>').unwrap().before('<div class="highlighter"></div>').wrap('<div class="typehead"></div></div>');
		$(this).addClass("theSelector");
	//	autosize($(this));
		$(this).on("keyup", function() {
			var str = $(this).val();
			$(this).parent().parent().find(".highlighter").css("width",$(this).css("width"));
			str = str.replace(/\n/g, '<br>');
			if(!str.match(/(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?#([a-zA-Z0-9]+)/g) && !str.match(/(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?@([a-zA-Z0-9]+)/g) && !str.match(/(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?#([\u0600-\u06FF]+)/g) && !str.match(/(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?@([\u0600-\u06FF]+)/g)) {
                if(!str.match(/#(([_a-zA-Z0-9]+)|([\u0600-\u06FF]+)|([ㄱ-ㅎㅏ-ㅣ가-힣]+)|([ぁ-んァ-ン]+)|([一-龯]+))#/g)) { //arabic support, CJK support
					str = str.replace(/#(([_a-zA-Z0-9]+)|([\u0600-\u06FF]+)|([ㄱ-ㅎㅏ-ㅣ가-힣]+)|([ぁ-んァ-ン]+)|([一-龯]+))/g,'<span class="hashtag">#$1</span>');
				}else{
					str = str.replace(/#(([_a-zA-Z0-9]+)|([\u0600-\u06FF]+)|([ㄱ-ㅎㅏ-ㅣ가-힣]+)|([ぁ-んァ-ン]+)|([一-龯]+))#(([_a-zA-Z0-9]+)|([\u0600-\u06FF]+)|([ㄱ-ㅎㅏ-ㅣ가-힣]+)|([ぁ-んァ-ン]+)|([一-龯]+))/g,'<span class="hashtag">#$1</span>');
				}
				if(!str.match(/@(([a-zA-Z0-9]+)|([\u0600-\u06FF]+)|([ㄱ-ㅎㅏ-ㅣ가-힣]+)|([ぁ-んァ-ン]+)|([一-龯]+))@/g)) {
					str = str.replace(/@(([a-zA-Z0-9]+)|([\u0600-\u06FF]+)|([ㄱ-ㅎㅏ-ㅣ가-힣]+)|([ぁ-んァ-ン]+)|([一-龯]+))/g,'<span class="hashtag">@$1</span>');
				}else{
					str = str.replace(/@(([a-zA-Z0-9]+)|([\u0600-\u06FF]+)|([ㄱ-ㅎㅏ-ㅣ가-힣]+)|([ぁ-んァ-ン]+)|([一-龯]+))@(([a-zA-Z0-9]+)|([\u0600-\u06FF]+)|([ㄱ-ㅎㅏ-ㅣ가-힣]+)|([ぁ-んァ-ン]+)|([一-龯]+))/g,'<span class="hashtag">@$1</span>');
				}
			}
			$(this).parent().parent().find(".highlighter").html(str);
		});
		$(this).parent().prev().on('click', function() {
			$(this).parent().find(".theSelector").focus();
		});

  	};
})(jQuery);*/

</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
 $(document).ready(function() {     



$('.partage').click(function(){    
    var key = $(this).parents(".share").data('id');
    console.log(key);
    document.getElementById("#links").innerHTML = "<div></div>";
    //var slinks=document.getElementsByClassName(".links");
    //slinks.html = '<i class="fa fa-heart fa-spin fa-lg" style="color:black;"></i>';
    //slinks.toString().replace('<i class="fa fa-heart fa-spin fa-lg" style="color:black;"></i>');
   // slinks.parents(".sharelink").find(".links").html(`<i class="fa fa-heart fa-spin fa-lg" style="color:black;"></i>` );
    //var d = $('#'+this.id+'-bs3').html();
    //var cObjId = this.id;
    //var cObj = $(this);
                                          
}); 
 

 })

</script>
@endsection