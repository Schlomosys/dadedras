@extends('layouts.appbis')

@section('content')
<link href="https://fr.allfont.net/allfont.css?fonts=dosis-extralight" rel="stylesheet" type="text/css" />
<style type="text/css">
#gtitre{
      font-family: 'Dosis';
      font-weight: bold; 
      text-align:left;
       padding-left:5%; 
       
       color:#dde9f0 ;


}
#ptitre{
      font-family: 'Dosis';
      font-weight: bold; 
      text-align:left; padding-left:5%; color:#dde9f0 ;
}
.trtitre{
  
  font-family: 'Dosis';
  font-weight:bold;text-align:left; color:#045480; padding-left:5%; padding-top:8px;
}

.tweet-info-counts {
  display: flex;
  margin-left: 60px;
  margin-top: 10px;
}
.tweet-info-counts div {
  display: flex;
  margin-right: 20px;
}
.tweet-info-counts div svg {
  color:#657786;
  margin-right: 0px;
}
@media screen and (max-width:1080px){
  .trtitre{
 font-size: 18px;
font-family: 'Dosis';
font-weight:bold;text-align:left; color:#045480; padding-left:5%; padding-top:8px;
}
  #gtitre{
    font-size:25px;
    font-family: 'Dosis';
      font-weight: bold; text-align:left; padding-left:5%; color:#045480 ;

  }
  #ptitre{
    font-size:20px;
    font-family: 'Dosis';
      font-weight: bold; text-align:left; padding-left:5%; color:#045480 ;
  }
  .tweet-info-counts {
  display: flex;
  margin-left: 50px;
}
.tweet-info-counts div {
  margin-right: 10px;
}
}

@media screen and (max-width:430px){
  .trtitre{
 font-size: 16px;
font-family: 'Dosis';
font-weight:bold;text-align:left; color:#045480; padding-left:5%; padding-top:8px;
}
  #gtitre{
    font-size:20px;
    font-family: 'Dosis';
      font-weight: bold; text-align:left; padding-left:5%; color:#045480 ;

  }
  #ptitre{
    font-size:16px;
    font-family: 'Dosis';
      font-weight: bold; text-align:left; padding-left:5%; color:#045480 ;
  }
  .tweet-info-counts {
  display: flex;
  margin-left: 50px;
}
.tweet-info-counts div {
  margin-right: 10px;
}
}
/*.post-footer-option li{
    float:left;
    margin-right:50px;
    padding-bottom:15px;
}

.post-footer-option li a{
    color:#AFB4BD;
    font-weight:500;
    font-size:1.3rem;
}



.anchor-username h4{
    font-weight:bold;    
}

.anchor-time{
    color:#ADB2BB;
    font-size:1.2rem;
}

.post-footer-comment-wrapper{
    background-color:#F6F7F8;
}*/
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


    /*@import url("https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap");*/
  @import url("https://fonts.googleapis.com/css?family=Dosis:300,400,700&display=swap");
    


    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Dosis ExtraLight';
  
}


/* HEADINGS */

h1, p {
  color: #fff;
  text-align: center;
  line-height: 1.4;
}

h1 {
  font-size: 2.2rem;
}

h2 {
  color: #000;
  font-size: 1.3rem;
  text-align: center;
  line-height: 1.4;
  margin-bottom: 10px;
}

/* BASIC SETUP */

.page-wrapper {
  width: 100%;
  height: auto;

}

.nav-wrapper {
  width: 100%;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
  background-color: #fff;
}

.grad-bar {
  width: 100%;
  height: 5px;
  background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
  background-size: 400% 400%;
  	-webkit-animation: gradbar 15s ease infinite;
	-moz-animation: gradbar 15s ease infinite;
	animation: gradbar 15s ease infinite;
}

/* NAVIGATION */

.navbar {
  z-index: 2;
  display: grid;
  grid-template-columns: 1fr 3fr;
  align-items: center;
  height: 50px;
  overflow: hidden;
}

.navbar img {
  height: 16px;
  width: auto;
  justify-self: start;
  margin-left: 20px;
}

.navbar ul {
  list-style: none;
  display: grid;
  grid-template-columns: repeat(6,1fr);
  justify-self: end;
  
}

.nav-item a {
  color: #045480;
  /*font-size: 0.9rem;*/
  font-size:16px;
  /*font-weight: 400;*/
  font-family: 'Dosis';
  font-weight: bold;
  text-decoration: none;
 /* transition: color 0.3s ease-out;*/
}

.nav-item a:hover {
  color: #f8e806;
}

/* SECTIONS */

.headline {
  width: 100%;
  height: 20vh;
  min-height: 200px;
  background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.7)), url('{{ asset("/uploads/images/dedrasicon.png") }}');
 
  /*background-size:contain;*/
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.features {
  width: 100%;
  height: 500px;
  background-color: #f1f1f1;
  display: flex;
  padding: 20px 20px 15px 50px;
  justify-content: center;
  overflow-y: scroll;
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

/* SEARCH FUNCTION */

#search-icon {
  font-size: 0.9rem;
  margin-top: 3px;
  margin-left: 15px;
  transition: color 0.3s ease-out;
}

#search-icon:hover {
  color: #3498db;
  cursor: pointer;
}

.search {
  transform: translate(-35%);
  -webkit-transform: translate(-35%);
  transition: transform 0.7s ease-in-out;
  color: #3498db;
}

.no-search {
  transform: translate(0);
  transition: transform 0.7s ease-in-out;
}

.search-input {
  position: absolute;
  top: -4px;
  right: -125px;
  opacity: 0;
  z-index: -1;
  transition: opacity 0.6s ease;
}

.search-active {
  opacity: 1;
  z-index: 0;
}

input {
  border: 0;
  border-left: 1px solid #ccc;
  border-radius: 0; /* FOR SAFARI */
  outline: 0;
  padding: 5px;
}

/* MOBILE MENU & ANIMATION */

.menu-toggle .bar{
  width: 25px;
  height: 3px;
  background-color: #3f3f3f;
  margin: 5px auto;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.menu-toggle {
  justify-self: end;
  margin-right: 25px;
  display: none;
}

.menu-toggle:hover{
  cursor: pointer;
}

#mobile-menu.is-active .bar:nth-child(2){
  opacity: 0;
}

#mobile-menu.is-active .bar:nth-child(1){
  -webkit-transform: translateY(8px) rotate(45deg);
  -ms-transform: translateY(8px) rotate(45deg);
  -o-transform: translateY(8px) rotate(45deg);
  transform: translateY(8px) rotate(45deg);
}

#mobile-menu.is-active .bar:nth-child(3){
  -webkit-transform: translateY(-8px) rotate(-45deg);
  -ms-transform: translateY(-8px) rotate(-45deg);
  -o-transform: translateY(-8px) rotate(-45deg);
  transform: translateY(-8px) rotate(-45deg);
}

/* KEYFRAME ANIMATIONS */

@-webkit-keyframes gradbar {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

@-moz-keyframes gradbar {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

@keyframes gradbar {
	0% {
		background-position: 0% 50%
	}
	50% {
		background-position: 100% 50%
	}
	100% {
		background-position: 0% 50%
	}
}

/* Media Queries */

  /* Mobile Devices - Phones/Tablets */

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
    top: 70px;
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
    margin-top: 70px;
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
  height: 250px;
  flex-basis: 20%;
  -ms-flex: auto;
  width: 250px;
  position: relative;
  padding: 10px;
  box-sizing: border-box;
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
  -webkit-box-sizing: initial;
  -moz-box-sizing: initial;
  box-sizing: initial;
  background: #aaa;
  margin: 0;
  height: 100%;
  width: 100%;
  overflow: hidden;
  -webkit-transition: padding 0.15s cubic-bezier(0.4,0,0.2,1), margin 0.15s cubic-bezier(0.4,0,0.2,1), box-shadow 0.15s cubic-bezier(0.4,0,0.2,1);
  transition: padding 0.15s cubic-bezier(0.4,0,0.2,1), margin 0.15s cubic-bezier(0.4,0,0.2,1), box-shadow 0.15s cubic-bezier(0.4,0,0.2,1);
  position: relative;
}

.grid-item-container {
  height: 100%;
  width: 100%;
  position: relative;
}

.grid-image-top {
  height: 45%;
  width: 120%;
  background-size: cover;
  position: relative;
  background-position: 50% 50%;
  left: -10.5%;
  top: -4.5%;
  display: none;
}

.grid-image-top .centered {
  text-align: center;
  transform: translate(-50%, -50%);
  background-size: contain;
  background-repeat: no-repeat;
  position: absolute;
  top: 54.5%;
  left: 50%;
  width: 60%;
  height: 60%;
  background-position: center;
}

.rex-ray-image {
  background-image: url(https://thecodeteam.com/wp-content/uploads/2017/08/Rex-Ray-icon-209x300.png);
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
  padding: 0 20px 20px 20px;
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
  padding: 2% 2%;
  margin: -2% -2%;
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

    
    /*
    CSS
    **/
    
</style>
    <!--CODEE__-->
    
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>-->
<section ><!--<!__<onload="myFunction()" style="margin:0;">-->
  <!--<div id="loader"></div>-->
  <!--<div style="display:none;" id="myDiv" class="animate-bottom">-->
    <nav class="navbar">
      
       <img class="photocouv" alt="100x100" src="{{ asset("/uploads/images/dadlogo.png") }}" data-holder-rendered="true" style="height:50px; width:125px;">
       
       <div class="menu-toggle" id="mobile-menu">
         <span class="bar"></span>
         <span class="bar"></span>
         <span class="bar"></span>
       </div>
       <ul class="nav no-search">
         <li class="nav-item" ><a href="{{ url('/home') }}" style="background-color: rgb(247, 245, 148)">HOME</a></li>
         <li class="nav-item" ><a href="{{ url('/projets') }}">PROJETS</a></li>
         <li class="nav-item"><a href="{{ url('/apropos') }}">A PROPOS</a></li>
         <li class="nav-item"><a href="{{ url('/contact') }}">CONTACT</a></li>
        
         <!--<i class="fas fa-search" id="search-icon"></i>
         <input class="search-input" type="text" placeholder="Search..">-->
      @auth
         <div class="transition"><a href="{{ route('user.account', Auth::user()->id) }}" class="" style="font-family: 'Dosis'; color:red;      ">MON COMPTE</a></div>
     @else
     <a  href="{{ route('login') }}" class="btn btn-success" style="color:yellow; font-weight:bold;"> CONNEXION</a>

         @if (Route::has('register'))
             <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline" style="font-family: 'Dosis ExtraLight';">CREER UN COMPTE</a>
         @endif
     @endauth
         
       
       </ul>
      
     </nav>
<div class="page-wrapper ">
    <div class="nav-wrapper">
     <div class="grad-bar"></div>
     {{--<nav class="navbar">
       <img src="https://upload.wikimedia.org/wikipedia/en/thumb/c/c8/Bluestar_%28bus_company%29_logo.svg/1280px-Bluestar_%28bus_company%29_logo.svg.png" alt="Company Logo">
       <div class="menu-toggle" id="mobile-menu">
         <span class="bar"></span>
         <span class="bar"></span>
         <span class="bar"></span>
       </div>
       <ul class="nav no-search">
         <li class="nav-item"><a href="#">Home</a></li>
         <li class="nav-item"><a href="#">About</a></li>
         <li class="nav-item"><a href="#">Work</a></li>
         <li class="nav-item"><a href="#">Careers</a></li>
         <li class="nav-item"><a href="#">Contact Us</a></li>
         <i class="fas fa-search" id="search-icon"></i>
         <input class="search-input" type="text" placeholder="Search..">
       </ul>
     </nav> color:#045480 ;--}}
     </div>
     <div class="d-flex justify-content-center">
      <div class=""> 
          <form action="{{ url('/home') }}" method="GET" role="search">

            <div class="input-group">
             
                
                <input type="text" class="form-control border-secondary rounded-pill pr-5" name="term" placeholder="Rechercher un document" id="term">
                <div class="col-auto">
                  <button class="btn btn-outline-light text-dark border-0 rounded-pill ml-n5" type="button">
                      <i class="fa fa-search"></i>
                  </button>
              </div>

              <a href="{{ url('/home') }}" class=" ">
                <span class="input-group-btn">
                  <button class="btn btn-danger" type="button" title="Refresh page">
                      <span class="fas fa-sync-alt"></span>
                  </button>
              </span></a>
            </div>
        </form>
      </div>
  </div> 
  
     <section class="headline">
      <h1  id="gtitre"> Bienvenue sur DAD-DEDRAS- Digital Access to Documents of DEDRAS </h1>
      <h2 id="ptitre"> la bibliothèque numérique de DEDRAS-ONG</h2>
      <!--<h5 style=" font-family: 'Dosis';
      font-weight: 200;text-align:left; color:white; padding-left:5%; padding-top:8px;">DAD-Dedras est la bibliothèque développé pour vous permettre d'avoir accès à certains documents. </h5>-->
     
  </section>
  <div class="col">
    <h5 class="trtitre">Les documents suivants sont à la disponibilié des visiteurs vous pouvez donc les consulter sans avoir un compte.</h5>
    <h5 class="trtitre"> Consulter l'index ici: <a href="{{ url('/homebisone') }}"><span class="btn btn-warning"> INDEX</span></a></h5>

  </div>
  
  <div class="d-flex justify-content-center">
    <label class="badge badge-danger" style="font-size:15px;">Nouveautés</label>
</div>
    <div class="d-flex justify-content-center">
      {!! $docdads->links() !!}
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
        <a href="{{route('read',$doc->id)}}" > <div class="" style=" height:50px; width:90%; padding-left:5%;">
          
          <h4 style="font-family: 'Dosis';
          font-weight: bold;"> {{ $doc->title }} </h4>
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
       
      {{--<div class="feature-container">
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
              <h5 class="card-title">Primary card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
       </div>
       <div class="feature-container">
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
              <h5 class="card-title">Primary card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
       </div>
       <div class="feature-container">
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
              <h5 class="card-title">Primary card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
       </div>--}}
       {{--<div class="container" >
        <div class="item"><div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
              <h5 class="card-title">Primary card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        
        </div>
        <div class="item">
            <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h5 class="card-title">Secondary card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>


        </div>
        <div class="item">
            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h5 class="card-title">Success card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>


        </div>
       
      </div>--}}

      
      
      <div class="main-cards">
       {{--  <div class="carda">
          
  
  
        <div class="container">
          <div class="grid-row">
            @if(isset($details))
          <p> The Search results for your query <b> {{ $query }} </b> are :</p>
      <h2>Sample User details</h2>
      @foreach ($details as $key => $doc)  
            
            <div class="grid-item">
             <!-- <a class="wrapping-link" href="">
                
              </a>-->
              <div class="grid-item-wrapper">
                <div class="card">
                  <div class="img-container">
                    <!--<img src="http://santoshg.com/codepen/iron_man.jpg" alt=""/>-->
                    @if ($doc->photocouv!=null)
                         <img class="photocouv" alt="100x100" src="{{ asset($doc->image) }}" data-holder-rendered="true" style="" ></a>
                    @else
                         <img class="photocouv" alt="100x100" src="{{ asset("/uploads/images/documentpage.png") }}" data-holder-rendered="true" style=""></a>
                    @endif
                  </div>
                  <div class="card-details">
                    <h4 style="color:red;">DEDRAS</h4>
                    <p> {{ $doc->title }} </p>
                  </div>
                </div>
               
              </div>
              <div style=" margin-top: 15px; height:45px;"><span style="color:black; font-size:17px; font-weight:bold; ">{{ $doc->title }}</span></div>
              <div style="margin-top: 15px;"><a class="btn btn-light" href="{{ route('admin.docshow',$doc->id) }}">Voir details</a></div>
             
            </div>
           
            @endforeach
      
      @endif
            @foreach ($docdads as $key => $doc)  
            
            <div class="grid-item">
             <!-- <a class="wrapping-link" href="">
                
              </a>-->
              <div class="grid-item-wrapper">
                <div class="card">
                  <div class="img-container">
                    <!--<img src="http://santoshg.com/codepen/iron_man.jpg" alt=""/>-->
                    @if ($doc->photocouv!=null)
                         <img class="photocouv" alt="100x100" src="{{ asset($doc->image) }}" data-holder-rendered="true" style="" ></a>
                    @else
                         <img class="photocouv" alt="100x100" src="{{ asset("/uploads/images/documentpage.png") }}" data-holder-rendered="true" style=""></a>
                    @endif
                  </div>
                  <div class="card-details">
                    <h4 style="color:red;">DEDRAS</h4>
                    <p> {{ $doc->title }} </p>
                  </div>
                </div>
               
              </div>
              <div style=" margin-top: 15px; height:45px;"><span style="color:black; font-size:17px; font-weight:bold; ">{{ $doc->title }}</span></div>
              <div style="margin-top: 15px;"><a class="btn btn-light" href="{{ route('admin.docshow',$doc->id) }}">Voir details</a></div>
              {{--<div class="grid-item-wrapper">
               {{-- @if ($doc->photocouv!=null)
        <a href="#" > <img class="photocouv" alt="100x100" src="{{ asset($doc->image) }}" data-holder-rendered="true" style="height:100px; width:100px;  object-fit: cover; " id="pic"></a>
       <!-- <a href="#" class="img logo rounded-circle mb-5"><img src="{{ asset(auth()->user()->image) }}" alt="Photo de profil"  ></a>-->
        <!--<a href="#" class="img logo rounded-circle mb-5"><img src="{{ asset("/uploads/images/photoNaN.png") }}" alt="Photo de profil"  ></a>-->
        @else
        <a href="#" > <img class="photocouv" alt="100x100" src="{{ asset("/uploads/images/photoNaN.png") }}" data-holder-rendered="true" style="height:100px; width:100px; " id="pic"></a>
        @endif
               <div class="grid-item-container">
                  <div class="grid-image-top rex-ray" style="width:100%; height:100%;">
                    <span class="centered project-image-bg rex-ray-image" style="width:100%; height:100%;">
                       {{-- @if ($doc->photocouv!=null)
        <a href="#" > <img class="" alt="100x100" src="{{ asset($doc->image) }}" data-holder-rendered="true" style="height:100px; width:100px;  object-fit: cover; " id="pic"></a>
       <!-- <a href="#" class="img logo rounded-circle mb-5"><img src="{{ asset(auth()->user()->image) }}" alt="Photo de profil"  ></a>-->
        <!--<a href="#" class="img logo rounded-circle mb-5"><img src="{{ asset("/uploads/images/photoNaN.png") }}" alt="Photo de profil"  ></a>-->
        @else
        <a href="#" > <img class="" alt="100x100" src="{{ asset("/uploads/images/photoNaN.png") }}" data-holder-rendered="true" style="height:100%; width:100%; object-fit: cover; " id="pic"></a>
        @endif
        <div class="card" style=" height:92%; width:90%; object-fit: cover; padding-top:0px;">
          <div class="img-container">
            <img src="http://santoshg.com/codepen/iron_man.jpg" alt=""/>
          </div>
          <div class="card-details">
            <h2>Iron Man</h2>
            <p>Iron Man is a fictional superhero appearing in American comic books published by Marvel Comics. The character was co-created by writer and editor Stan Lee, developed by scripter Larry Lieber, and designed by artists Don Heck and Jack Kirby. </p>
          </div>
        </div>
  
                    </span>
                  </div>
                 <!--<div class="card" style="width: 100%; height:99%">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="card-link">Card link</a>
                      <a href="#" class="card-link">Another link</a>
                    </div>
                  </div>-->
                  
                </div>
              </div>--}}
           {{--  </div>
           
            @endforeach
           
            
   
          </div>
        </div>
       
        
        </div>--}}
        
    
  
        <!--<div class="carda"></div>
        <div class="carda">Card</div>-->
      </div>
     </section>
   </div>

  <!--</div>-->

  
</section>
<script>
  var myVar;
  
  function myFunction() {
    myVar = setTimeout(showPage
    
    , 3000);
  }
  
  function showPage() {
    $("loader").hide();
    $("myDiv").style.display = "block";
  }
  </script>



   <script type="text/javascript">

    </script>

   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">

$("#search-icon").click(function() {
  $(".nav").toggleClass("search");
  $(".nav").toggleClass("no-search");
  $(".search-input").toggleClass("search-active");
});

$('.menu-toggle').click(function(){
   $(".nav").toggleClass("mobile-nav");
   $(this).toggleClass("is-active");
});



</script>
@endsection
