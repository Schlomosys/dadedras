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
<style type="text/css">

.features {
  width: 100%;
  height: 95%;
  background-color: #f1f1f1;
  display: flex;
  padding: 50px 20px 15px 50px;
  justify-content: center;
  overflow-y: scroll;
}
@media only screen and (max-width: 720px) { 
  .features {
    flex-direction: column;
    padding: 50px;
  }
  
  /* MOBILE HEADINGS */
  
  h1 {
    font-size: 1.9rem;
  }
  
  h2 {
    font-size: 1rem;
  }
  
  p {
    font-size: 0.8rem;
  }
  
  /* MOBILE NAVIGATION */
     
  .navbar ul {
    display: flex;
    flex-direction: column;
    position: fixed;
    justify-content: start;
    top: 55px;
    background-color: #fff;
    width: 100%;
    height: calc(100vh - 55px);
    transform: translate(-101%);
    text-align: center;
    overflow: hidden;
  }
  
  .navbar li {
    /*padding: px;*/
   
  }
  
  .navbar li:first-child {
    margin-top: 50px;
  }
  
  .navbar li a {
    font-size: 1rem;
  }
   
  .menu-toggle, .bar {
    display: block;
    cursor: pointer;
  }
  
  .mobile-nav {
  transform: translate(0%)!important;
}
  
  /* SECTIONS */
  
  .headline {
    height: 10vh;
  }
    
  .feature-container p {
    margin-bottom: 25px;
  }
  
  .feature-container {
    margin-top: 20px;
  }
  
  .feature-container:nth-child(2) {
    order: -1;
  }
  
  /* SEARCH DISABLED ON MOBILE */
  
  #search-icon {
    display: none;
  }
  
  .search-input {
  display: none;
 }



/* Grid*/
 .col {
    clear: both;
    float: none;
    margin-left: auto;
    margin-right: auto;
    width: auto !important;
  }
  
}

.feature-container {
  flex-basis: 30%;
  margin-top: 10px;
}

.feature-container p {
  color: #000;
  text-align: center;
  line-height: 1.4;
  margin-bottom: 15px;
}

.feature-container img {
  width: 100%;
  margin-bottom: 15px;
}
.card .card-statistic-3 .card-icon-large .fas, .card .card-statistic-3 .card-icon-large .far, .card .card-statistic-3 .card-icon-large .fab, .card .card-statistic-3 .card-icon-large .fal {
    font-size: 110px;
}

.card .card-statistic-3 .card-icon {
    text-align: center;
    line-height: 50px;
    margin-left: 15px;
    color: #000;
    position: absolute;
    right: -0px;
    /*right: -5px;*/
    top: 20px;
    opacity: 0.1;
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
  background-color: #82bef6;
  margin-bottom: 20px;
  -webkit-column-break-inside: avoid;
  padding: 24px;
  box-sizing: border-box;
  overflow-y: scroll;
}

/* Force varying heights to simulate dynamic content */
.carda:first-child {
  height: 485px;
}

.carda:nth-child(2) {
  height: 200px;
}

.carda:nth-child(3) {
  height: 265px;
}

.card{
  position:relative;
  margin:20px 0;
  /*width:200px;
  height:300px;*/
  
  
  background: #fff;
  transform-style:preserve-3d;
  transform:perspective(2000px);
  transition:1s;
  box-shadow:inset 100px 0 50px rgba(0,0,0,0.5);
  border:1px solid #000;



  /*  border-radius: 10px;*/
    /*border: none;*/
  
    margin-bottom: 30px;
}

.card:hover{
  z-index:1111;
  transform:perspective(2000px) rotate(-10deg);
  box-shadow:inset 20px 0 50px rgba(0,0,0,0.5);
}

.card .img-container{
  position:relative;
  width:100%;
  height:250px;
  border:1px solid #000;
  box-sizing:border-box;
  transform-origin:left;
  z-index:1;
  transition:1s;
}

.card .img-container img{
  position:absolute;
  left:0;
  top:0;
  height:250px;
  width:100%;
  object-fit:cover;
  border:1px solid #000;
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
@import url("https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap");

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


body {
  background: #bbc7df;
  font-family:system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Ubuntu, "Helvetica Neue", sans-serif;
  line-height:1.5;
  
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
            <li><a href="#" class="active">
              <div class="icon"><i class="fas fa-home"></i></div>
              <div class="title">ACCUEIL</div>
              </a></li>  
          <li><a href="{{route('user.postLists',$user->id)}}" >
              <div class="icon"><i class="fas fa-file-alt"></i></div>
              <div class="title">FORUM</div>
              </a></li>  
          <li><a href="#">
              <div class="icon"><i class="fas fa-heart"></i></div>
              <div class="title">FAVORIS</div>
              </a></li>  
          <li><a href="{{route('file.index',$user->id)}}">
                <div class="icon"><i class="fas fa-clock"></i></div>
                <div class="title">HISTORIQUE</div>
                </a></li>      
         <li><a href="{{route('listDocs',$user->id)}}">
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
            <img class="photocouv" alt="100x100" src="{{ asset("/uploads/images/dadlogo.png") }}" data-holder-rendered="true" style="padding-right:50px;">
            <!--<li><a href="#"><i class="fa fa-search"></i></a></li>-->
            <!--<li><a href="#" class="active">Blogs</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">About</a></li>-->
          
         </ul>
         <ul class="right_bar">
            
            
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
        <div class="d-flex justify-content-center" >
            <div class="">
                <form action="{{ url('/home') }}" method="GET" role="search">
        
                    <div class="input-group">
                      <a href="{{ url('/home') }}" class=" mt-1">
                        
                        <div class="col-auto">
                          <button class="btn btn-outline-light text-dark border-0 rounded-pill ml-n5" type="button" title="Refresh page">
                              <i class="fas fa-sync-alt"></i>
                          </button>
                      </div>
                    </a>
                        
                        <input type="text" class="form-control border-secondary rounded-pill pr-5" name="term" placeholder="Rechercher un document" id="term">
                        <div class="col-auto">
                          <button class="btn btn-outline-light text-dark border-0 rounded-pill ml-n5" type="button">
                              <i class="fa fa-search"></i>
                          </button>
                      </div>
                    </div>
                </form>
            </div>
        </div>
        

        <section class="features">
            
            @foreach ($docdads as $key => $doc)  

<div class="feature-container">
 <div class="col">
  <div class="card">
    <div class="img-container">
      @if ($doc->photocouv!=null)
      <img class="photocouv" alt="100x100" src="{{ asset($doc->image) }}" data-holder-rendered="true" style="" ></a>
      @else
      <img class="photocouv" alt="100x100" src="{{ asset("/uploads/images/documentpage.png") }}" data-holder-rendered="true" style=""></a>
      @endif
    </div>
    <div class="card-details">
      <h4 style="color:rgb(72, 28, 192);">DEDRAS</h4>
      <p> {{ $doc->title }} </p>
    </div>
  </div>
 
 </div>
 {{--<div class="tweet-info-counts" >

  <div class="comments">
    <i class="fas fa-eye"></i>
    <!--<svg class="feather feather-message-circle sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>-->
    <div class="comment-count" style="padding-left:10px">33</div>
  </div>
  
  <div class="retweets">
    <i class="fas fa-share"></i>
   <!-- <svg class="feather feather-repeat sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="17 1 21 5 17 9"></polyline><path d="M3 11V9a4 4 0 0 1 4-4h14"></path><polyline points="7 23 3 19 7 15"></polyline><path d="M21 13v2a4 4 0 0 1-4 4H3"></path></svg>-->
    <div class="retweet-count" style="padding-left:10px">397</div>
  </div>
  
  <div class="likes">
    <i class="fas fa-download"></i>
    <!--<svg class="feather feather-heart sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>-->
    <div class="likes-count" style="padding-left:10px">
      2.6k
    </div>
  </div>
  
 <!-- <div class="message">
    <svg class="feather feather-send sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
  </div>-->
</div>---}}
<a href="{{route('read',$doc->id)}}"> <div class="" style="height:50px; width:90%; padding-left:5%;">
  
  <h4> {{ $doc->title }} </h4>
</div></a>
<div class="d-flex justify-content-between" style="height:50px; width:90%; padding-left:5%; ">
  <div class="p-2"><a href="{{route('read',$doc->id)}}" style="color:black;"><div class="comments">
    <i class="fas fa-eye"></i>
    <!--<svg class="feather feather-message-circle sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>-->
    
  </div></a></div>
  <!--<div class="p-2"><div class="btn btn-danger">Details</div></div>-->
  
  <div class="p-2"><a href="{{route('downl',$doc->id)}}" style="color:black;"><div class="likes">
    <i class="fas fa-download"></i>
    <!--<svg class="feather feather-heart sc-dnqmqq jxshSx" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>-->
    
  </div></a></div>

</div>
</div>

@endforeach
</section>

      
      </div>
      <div class="d-flex justify-content-center">
        {!! $docdads->links() !!}
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
         <form action="{{ route('user.updateprofile',$user->id) }}" method="POST" role="form" enctype="multipart/form-data">
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
          <form action="{{ route('user.savePost',$user->id) }}" method="POST"  enctype="multipart/form-data">
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