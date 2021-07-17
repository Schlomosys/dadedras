<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
   <script src="https://kit.fontawesome.com/5846046699.js" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
   <style type="text/css">
   
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
      background-color:  color: #185875;
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
    
    @media screen and (max-width: 600px) {
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
      transform:perspective(2000px) rotate(-10deg);
      box-shadow:inset 20px 0 50px rgba(0,0,0,0.5);
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
      transform:rotateY(-135deg);
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
        @import url("https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap");
    
        /**CSS*/
        body{
      margin: 0;
      padding: 0;
      color: #fff;
      font-family: 'Open Sans', Helvetica, sans-serif;
      box-sizing: border-box;
      background-color:#1F2739;
    }
    
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
      background-color: #DADAE3;
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
      background-color: #202020;
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
      background-color:#212121;
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
      color: #ddd;
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
    
      background-color: #04AA6D
    }
    
    .sidenav__list-item:hover {
      background-color: rgba(250, 91, 91, 0.2);
      cursor: pointer;
    }
    
    .main {
      grid-area: main;
      background-color:#0C0C0C
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
      background-color:#1F2739;
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
        * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      text-decoration: none;
      list-style: none;
      font-family:system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Ubuntu, "Helvetica Neue", sans-serif;
      /*font-size: 18px;*/
     
      
      /*font-family: "Montserrat", sans-serif;*/
    }
    
    
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
    
    .wrapper .sidebar__inner .profile_info {
      padding: 30px 50px;
      text-align: center;
    }
    /*.wrapper .sidebar__inner .flex-scroll {
          overflow-y:scroll;
          min-height:0;
          -webkit-box-flex:1;
          flex:1;
          }*/
    
    .wrapper .sidebar__inner .profile_info .profile_img {
      width: 125px;
      /*margin: 0 auto 15px;*/
      margin: auto;
      justify-content:center;
      
    }
    
    .wrapper .sidebar__inner .profile_info .profile_img img {
    
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 40%;
    }
    
    .wrapper .sidebar__inner .profile_info .profile_data .name {
      font-size: 20px;
      font-weight: 500;
      color: #fff;
    }
    
    .wrapper .sidebar__inner .profile_info .profile_data .role {
      font-weight: 300;
      color: #88a3d0;
      margin-bottom: 15px;
    }
    
    .wrapper .sidebar__inner .profile_info .profile_data .btn {
      padding: 10px;
      border: 1px solid #1fafec;
      border-radius: 25px;
      color: #1fafec;
      cursor: pointer;
    }
    
    .wrapper .sidebar__inner .profile_info .profile_data .btn:hover {
      background: #1fafec;
      color: #fff;
    }
    
    .wrapper .sidebar__inner .siderbar_menu li a {
      padding: 10px 50px;
      display: block;
      height: 90px;
      position: relative;
      margin-bottom: 1px;
      color: #88a3d0;
      text-align: center;
      text-transform: uppercase;
    }
    
    .wrapper .sidebar__inner .siderbar_menu li a .icon {
      font-size: 20px;
      margin-bottom: 5px;
    }
    
    .wrapper .sidebar__inner .siderbar_menu li a:before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 3px;
      height: 100%;
      background: #1fafec;
      display: none;
    }
    
    .wrapper .sidebar__inner .siderbar_menu li a:hover,
    .wrapper .sidebar__inner .siderbar_menu li a.active {
      background: #1d4c9e;
      color: #fff;
    }
    
    .wrapper .sidebar__inner .siderbar_menu li a:hover:before,
    .wrapper .sidebar__inner .siderbar_menu li a.active:before {
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
      height: 200px;
      flex-basis: 20%;
      -ms-flex: auto;
      width: 200px;
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
        flex-basis: 33.33%;
      }
    }
    
    @media(max-width: 1073px) {
       .grid-item {
        flex-basis: 33.33%;
      }
    }
    
    @media(max-width: 815px) {
      .grid-item {
        flex-basis: 50%;
      }
    }
    
    @media(max-width: 555px) {
      .grid-item {
        flex-basis: 100%;
      }
    }
    
        
        
    </style>
</head>
<body>
    
<div class="grid-container">
    <div class="menu-icon">
     <i class="fas fa-bars header__menu"></i>
   </div>
    
   <header class="header">
     <div class="header__search">
      <div class="mx-auto pull-right">
        <img class="photocouv" alt="100x100" src="{{ asset("/uploads/images/dadlogo.png") }}" data-holder-rendered="true" style="height:50px; width:125px;">
    </div>
     </div>
     <div class="header__avatar">
       @if (auth()->user()->profile_image)
      <a href="#" > <img class="rounded-circle z-depth-2" alt="100x100" src="{{ asset(auth()->user()->profile_image) }}" data-holder-rendered="true" style="height:35px; width:35px;  object-fit: cover; " id="pic"></a>
     <!-- <a href="#" class="img logo rounded-circle mb-5"><img src="{{ asset(auth()->user()->image) }}" alt="Photo de profil"  ></a>-->
      <!--<a href="#" class="img logo rounded-circle mb-5"><img src="{{ asset("/uploads/images/photoNaN.png") }}" alt="Photo de profil"  ></a>-->
      @else
      <a href="#" > <img class="rounded-circle z-depth-2" alt="100x100" src="{{ asset("/uploads/images/photoNaN.png") }}" data-holder-rendered="true" style="height:35px; width:35px; " id="pic"></a>
      @endif  
    </div>
   </header>
   
 
   <aside class="sidenav">
     
     <div class="sidenav__close-icon">
       <i class="fas fa-times sidenav__brand-close"></i>
     </div>

     <ul class="sidenav__list">
      <!-- <li class="sidenav__list-item"><div data-toggle="modal" data-target="#modal" class="title m-b-md"><div class="btn btn-danger">  Ajouter un document</div></div></li>-->
     <li  class="sidenav__list-item"> <a href="{{ route('listDocs') }}"  style="color:white; font-weight:bold"><div>DASHBOARD</div></a></li>
    <li class='sidenav__list-item sub-menu '>
       
     <!-- <a href='#'><div class="row"><div class="" style="margin-right:10px;"> AJOUTER UN DOCUMENT</div><div class='fa fa-caret-down right'></div></div></a>-->
     <a href="" class="dropdown-toggle"  data-toggle="dropdown" style="color:white; font-weight:bold"> AJOUTER UN DOCUMENT </a>
      <ul>
				<li style="margin:10px;"> <div  id="mymod"  data-toggle="modal" data-target="#modale" class=" row"><i class="fa fa-folder" aria-hidden="true"></i><div class="" style="color:white; margin-left:8px;">STOCKAGE INTERNE</div><div></li>
				<li style="margin:10px;"><div id="gmodal" data-toggle="modal" data-target="#modalgoogle" class=" row"><i class="fab fa-google-drive"></i><div class=""style="color:white; margin-left:8px"> GOOGLE DRIVE</div><div></li>
			</ul>
		</li>
        <li class="sidenav__list-item" style="color:white; font-weight:bold"> <a href="{{ route('admin.userslist') }}"  style="color:white; font-weight:bold">GESTION DES UTILISATEURS</a></li>
        <li class="sidenav__list-item active" style="color:white; font-weight:bold"> <a href="{{ route('admin.rolist') }}"  style="color:white; font-weight:bold">GESTION DES ROLES</a></li>
        <li class="sidenav__list-item" style="color:white; font-weight:bold"> <a href="{{ route('indexCat') }}"  style="color:white; font-weight:bold">GESTION DES CATEGORIES</a></li>
        <li class="sidenav__list-item" style="color:white; font-weight:bold"> <a href="{{ route('indexVis') }}"  style="color:white; font-weight:bold">GESTION DES ACCREDITATIONS</a></li>
        <li class="sidenav__list-item" style="color:white; font-weight:bold"> PARAMETRES</li>
       
       
       
     </ul>
     
     
     
    {{-- <div class="p-4 pt-5">
      @if (auth()->user()->image)
      <a href="#" > <img class="rounded-circle z-depth-2" alt="100x100" src="{{ asset(auth()->user()->image) }}" data-holder-rendered="true" style="height:150px; width:150px; " id="pic"></a>
     <!-- <a href="#" class="img logo rounded-circle mb-5"><img src="{{ asset(auth()->user()->image) }}" alt="Photo de profil"  ></a>-->
      <!--<a href="#" class="img logo rounded-circle mb-5"><img src="{{ asset("/uploads/images/photoNaN.png") }}" alt="Photo de profil"  ></a>-->
      @else
      <a href="#" > <img class="rounded-circle z-depth-2" alt="100x100" src="{{ asset("/uploads/images/photoNaN.png") }}" data-holder-rendered="true" style="height:150px; width:150px; " id="pic"></a>
      @endif  

     <!-- <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/photoNaN.png);"></a>-->
      <ul class="list-unstyled components mb-5" style="padding-top:50%;">
       
        <li class="">
          <a href="#">Profil</a>
         <!-- <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
          <ul class="collapse list-unstyled" id="homeSubmenu">
            <li>
                <a href="#">Home 1</a>
            </li>
            <li>
                <a href="#">Home 2</a>
            </li>
            <li>
                <a href="#">Home 3</a>
            </li>
          </ul>-->
        </li>
        <li>
          <a href="#">Annonce de recherche</a>
      </li>
        <li>
            <a href="#">Offres</a>
        </li>
        
        <li class="active">
          <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle active">Mon CV</a>
          <ul class="collapse list-unstyled" id="pageSubmenu">
            <li>
                <a href="#">CV Numérique</a>
            </li>
            <li class="active">
                <a href="#">CV téléchargé</a>
            </li>
            
          </ul>
        </li>
        <li>
          <a href="#">Formations</a>
        </li>
        <li>
          <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Paramètres</a>
          <ul class="collapse list-unstyled" id="pageSubmenu">
            <li>
                <a href="">Modifier profil</a>
            </li>
            <li>
                <a href="#">Mise à jour mot de passe</a>
            </li>
            <li>
              <a href="#">Suppression du compte</a>
          </li>
            
          </ul>
        </li>
        <li> <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
           {{ __('Déconnection') }}
       </a>


       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
           @csrf
       </form>
        </li>
      </ul>

      <div class="footer">
      </div>

    </div>--}}
   </aside>
 
   <main class="main">
     <div class="main-header">
       <div class="main-header__heading" style="font-weight:bold; font-size:20px; text-transform:uppercase;">Bonjour, Admin {{ auth()->user()->lastname }}</div>
       <div class="main-header__updates"><a class="nav-link" href="#"><i >{{ date('Y-m-d ') }} </i></a></div>
     </div>
     <div style="background-color:white;">
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
     <h3 style=" display: flex; align-items: center; justify-content: center; "> ROLES MANAGEMENT  </h3>
     <h3 style=" display: flex; align-items: center; justify-content: center; "> </h3>
     <div class="main-cards">
      <div class="carda">
        <div class="row">
            <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            
            </div>
            <div class="pull-right">
            @can('role-create')
            <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
            @endcan
            </div>
            </div>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
            <p>{{ $message }}</p>
            </div>
            @endif
           
            <table>
              <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th width="280px">Action</th>
                </tr>
              </thead>
              <tbody>
               
                @foreach ($roles as $key => $role)
                <tr>
                  
                  <td data-label="#">{{ $role->id }}</td>
                <td data-label="Name">{{ $role->name }}</td>
                
                <td data-label="Action">

                  <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
            @can('role-edit')
            <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
            @endcan
            @can('role-delete')
            {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
            @endcan
                </td>
                
                </tr>
                @endforeach
              
              </tbody>
            </table>  
   
     
      
      </div>
  

     {{--<div class="card">
        <div class="card border-success mb-3" style="max-width: 100%;">
          <div class="card-header bg-transparent border-success"></div>
          <div class="card-body text-success">
            <div class="table-responsive">
            <!--<h5 class="card-title">Success card title</h5>-->
            <table class="table table-bordered">
              <tr>
              <th>No</th>
              <th>Couverture</th>
              <th>Titre</th>
              <th>Nom</th>
              <th>Auteur</th>
              <th>Type</th>
            
             
              <!--<th>Roles</th>-->
              <th width="280px">Action</th>
              </tr>
              @foreach ($docdads as $key => $doc)  
              <tr>
              <td>{{ $doc->id}}</td>
              <td>{{ $doc->image}}</td>
              <td>{{ $doc->titre}}</td>
              <td>{{ $doc->nom}}</td>
              <td>{{ $doc->auteur}}</td>
              <td>{{ $doc->type}}</td>
              
             <!-- <td>{{ $doc->description }}</td>
              <td>{{ $doc->creation_date}}</td>
              <td>{{ $doc->created_at}}</td>
              <td>{{ $doc->updated_at}}</td>-->
             <!-- <td></td>-->
             <!-- <td></td>-->
              
               {{--<td>
                   @if(!empty($user->getRoleNames()))
              @foreach($user->getRoleNames() as $v) 
                
              <label class="badge badge-success">{{ $v }}</label>
              @endforeach
              @endif
              </td>--}}
             {{-- <td>
              <a class="btn btn-info" href="">Read</a>
              {{-- <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a> --}}
             {{--  <a class="btn btn-primary" href="">
              <i class="fas fa-trash-alt"></i></a>
            
              </td>
              </tr>
              @endforeach
              </table>
            </div>
            
          </div>
          <div class="card-footer bg-transparent border-success">Footer</div>
        </div>




      </div>--}}
      <!--<div class="carda"></div>
      <div class="carda">Card</div>-->
    </div>
     
     <div class="main-overview">
       <div class="overviewcard">
         <div class="overviewcard__icon">Overview</div>
         <div class="overviewcard__info">Card</div>
       </div>
       <div class="overviewcard">
         <div class="overviewcard__icon">Overview</div>
         <div class="overviewcard__info">Card</div>
       </div>
       <div class="overviewcard">
         <div class="overviewcard__icon">Overview</div>
         <div class="overviewcard__info">Card</div>
       </div>
       <div class="overviewcard">
         <div class="overviewcard__icon">Overview</div>
         <div class="overviewcard__info">Card</div>
       </div>
     </div>
 
    
   </main>
 
   <footer class="footer">
     <div class="footer__copyright">&copy; 2018 MTH</div>
     <div class="footer__signature">Made with love by pure genius</div>
   </footer>
 </div>

<!--MODALS   __ __--------------------------__________ MODALS-->

<!--CODEE__-->
 <!-- Modal HTML Markup -->
 <div id="modal" class="modal fade">
  <div class="modal-dialog" role="document">
  <div class="modal-content">

  <div class="modal-header">
    <h3 class="modal-title" style="color:black; ">Choisissez une méthode d'ajout</h3>
    <button type="button" class="close" data-dismiss="modal">
      <span>&times;</span>
    </button> 
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
           <!--BOUTONS CHOIX-->
           <div class="col">
            <div  id="mymod"  data-toggle="modal" data-target="#modale" class="title m-b-md"><div class="btn btn-danger">Depuis votre disque</div><div>
            <div id="gmodal" data-toggle="modal" data-target="#modalgoogle" class="title m-b-md"><div class="btn btn-danger">Depuis votre Google Drive</div><div>
          </div>

      </div>
    </div>
  </div>
    
  </div>
</div>
</div>
</div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
</div>


  </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
  </div>



    <!-- Modal HTML Markup -->
<div id="modale" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title" style="color:black;">Ajouter un document depuis votre téléphone/ ordinateur</h4>
      <button type="button" class="close" data-dismiss="modal">
        <span>&times;</span>
      </button> 
    </div>
    <div class="modal-body form-horizontal">
    <div class="col-xl-12 order-xl-1">
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
          <form action="{{route('storeDoc')}}" method="POST"  enctype="multipart/form-data" class="form-horizontal">
            <h6 class="" style="text-align: center;font-family:Impact, Charcoal, sans-serif;"></h6>
            @csrf
            @if ($message = Session::get('success'))
              <div class="alert alert-success">
                  <strong>{{ $message }}</strong>
              </div>
            @endif
            
            @method('PUT')
            <div class="">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group focused">
                    <label class="form-control-label" for="title" style="color:black;">Titre: <span class="text-danger" style="opacity: 0.4;">*</span></label>
                    <input type="text" id="title"  name="title" class="form-control form-control-alternative" placeholder="Rapport 2020 Projet Education" value="">
                  </div>
                </div>
                <div class="col-lg-6">
                 
                </div>
                
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group focused">
                    <label class="form-control-label" for="auteur" style="color:black;">Auteur: <span class="text-danger" style="opacity: 0.4;">*</span></label>
                    <input type="text" id="auteur"  name="auteur" class="form-control form-control-alternative"  placeholder="ex. DP Projet EDUCATION" value="">
                  </div>
                </div>
               <div class="col-lg-6">
                <label class="label"style="color:black;">Catégorie: <span class="text-danger" style="opacity: 0.4;">*</span></label>
                <div class="select">
                    <select name="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                  
                </div>
                
              </div>
             <!-- <div class="form-group">
                <label for="name" class="col-sm-2 control-label"  style="color:black;">Nom</label>
                <div class="col-sm-10">
                  <input id="name" class="form-control" type="text" placeholder="Enter Your Full Name" />
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="City">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="State">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Zip">
                </div>
              </div>
              <div class="form-row">
                <label for="auteur" class=""style="color:black">Auteur</label>
                <div class="col">
                  <input id="auteur" type="text" class="form-control" name="auteur" value="" placeholder="ex. DP Projet EDUCATION">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
              </div>-->
              <!--<div class="row">
                <label for="auteur" class="" style="color:black">Auteur</label>
                <div class="col-md-6">
                    <input id="auteur" type="text" class="form-control" name="auteur" value="" placeholder="ex. DP Projet EDUCATION">
                </div>
            </div>-->
            <div class="row">
              <div class="col-lg-6">
                <label class="form-control-label" style="color:black;">Fichier: <span class="text-danger">*</span></label>
                <br>
                <input id="fichier" type="file" class="form-control" name="fichier">
            
                   <!--<code></code>-->
           
                <br>
                @if ($errors->has('fichier'))
                    <span class="text-danger">{{ $errors->first('fichier') }}</span>
                @endif 
              </div>
              <div class="col-lg-6">
                <label class="label" style="color:black;">Niveau d'accréditation: <span class="text-danger" style="opacity: 0.4;">*</span></label>
                <div class="select">
                    <select name="visibility_id">
                        @foreach($visibilities as $visibility)
                            <option value="{{ $visibility->id }}">{{ $visibility->name }}</option>
                        @endforeach
                    </select>
                </div>
                  
                </div>
            </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group green-border-focused">
                    <label class="form-control-label" for="body" style="color:black;">Description<span class="text-danger" style="opacity: 0.4;">*</span></label>
                    
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                <label style="color:black;">Tags : <span class="text-danger">*</span></label>
                            <br>
                            <input type="text" data-role="tagsinput" name="tags" class="form-control tags" style="color:black;">
                            <br>
                            @if ($errors->has('tags'))
                                <span class="text-danger">{{ $errors->first('tags') }}</span>
                            @endif
                </div>            
              </div>
              
            
            
            <hr class="my-4">
            
       
                
              
           
            </div>
           
            
      
    
            <!-- Submit -->
            <div class="" class="col-xs-12 col-sm-6 col-md-3 ml-auto" style="text-align: right;">
            <!--<div class="col-xs-12 col-sm-12 col-md-12 ">-->
              <button type="submit" class="btn btn-success">Enregistrer</button>
              </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
     </div>
      
    <!--</div>
      
    </div>
    </div--><!-- /.modal-content -->
    <!-- </div>-- /.modal-dialog -->
    </div>
  </div>
</div>



<!--CODEE__-->
<div id="modalgoogle" class="modal">
  <div class="modal-dialog" role="document">
  <div class="modal-content">
  <div class="modal-header">
    <h4 class="modal-title">Ajouter depuis Google Drive</h4>
    <button type="button" class="close" data-dismiss="modal">
      <span>&times;</span>
    </button> 
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
      <div class="card-body" style="background:rgb(206, 165, 51); " >
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
         <form action="" method="POST" role="form" enctype="multipart/form-data">
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
  <div class="modal-footer">
    <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
  </div>
  </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
  </div>


<!--MODALS  __ __--------------------------__________MODALS-->

   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
const menuIconEl = $('.menu-icon');
const sidenavEl = $('.sidenav');
const sidenavCloseEl = $('.sidenav__close-icon');

// Add and remove provided class names
function toggleClassName(el, className) {
  if (el.hasClass(className)) {
    el.removeClass(className);
  } else {
    el.addClass(className);
  }
}

// Open the side nav on click
menuIconEl.on('click', function() {
  toggleClassName(sidenavEl, 'active');
});

// Close the side nav on click
sidenavCloseEl.on('click', function() {
  toggleClassName(sidenavEl, 'active');
});

$('.sub-menu ul').hide();
$(".sub-menu a").click(function () {
	$(this).parent(".sub-menu").children("ul").slideToggle("100");
	$(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
});
</script>


</body>
</html>
