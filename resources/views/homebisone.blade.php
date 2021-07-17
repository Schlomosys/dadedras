@extends('layouts.appbis')

@section('content')
<style type="text/css">
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
    
    


    @import url("https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap");


    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  
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
    background-color: #f7f1f3;
  width: 100%;
  height: auto;
  overflow-y: scroll;

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
  height: 50vh;
  min-height: 350px;
  background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.7)), url('https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/jPLiQ-9/mountains-background-for-titles-intro-projects-and-etc_ew22rur3l__F0000.png');
  background-size: cover;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.features {
  width: 100%;
  height: auto;
  background-color: #f1f1f1;
  display: flex;
  padding: 50px 20px;
  justify-content: space-around;
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
    padding: 15px;
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
    height: 20vh;
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
  
         
  max-width: 1335px;
  margin: 0 auto;
  
}

.item {
  flex: 0 32%;
  height: 100px;
  margin-bottom: 2%; /* (100-32*3)/2 */
}
  
    
    
    /*
    CSS GRID
    **/
    /*.container {
        
  max-width: 1335px;
  margin: 0 auto;
}*/

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
      margin-bottom: 100px;
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
 /* position: relative;*/
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
  background-image: url('{{ asset("/uploads/images/documentpage.png") }}');
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
  /*padding: 0 20px 20px 20px;*/
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
    </divfo
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
    <div class="d-flex justify-content-center">
      <div class=""> 
          <form action="{{ url('/homebisone') }}" method="GET" role="search">

            <div class="input-group">
             
                
                <input type="text" class="form-control border-secondary rounded-pill pr-5" name="term" placeholder="Rechercher un document" id="term">
                <div class="col-auto">
                  <button class="btn btn-outline-light text-dark border-0 rounded-pill ml-n5" type="button">
                      <i class="fa fa-search"></i>
                  </button>
              </div>

              <a href="{{ url('/homebisone') }}" class=" ">
                <span class="input-group-btn">
                  <button class="btn btn-danger" type="button" title="Refresh page">
                      <span class="fas fa-sync-alt"></span>
                  </button>
              </span></a>
            </div>
        </form>
      </div>
  </div> 
    
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
     </nav>--}}
     </div>
     
  <div class="col">
    <h5 class="trtitre">Les documents suivants sont à la disponibilié des visiteurs vous pouvez donc les consulter sans avoir un compte.</h5>
   
  </div>
  <div class="d-flex justify-content-center">
    <label class="badge badge-success" style="font-size:24px;">INDEX</label>
</div>
    <div class="d-flex justify-content-center">
      {!! $docdads->links() !!}
  </div>
     <!--<section class="headline">
       <h1>Responsive Navigation</h1>
       <p>Using CSS grid and flexbox to easily build navbars!</p>
     </section>-->
     <!--<section class="features">-->
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
        <div class="carda">
          <div class="row">
            <div class="col-lg-12 margin-tb">
            <div class="">
            
            </div>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
            <p>{{ $message }}</p>
            </div>
            @endif
            <div class="container">
              <div class="grid-row">
                  @foreach ($docdads as $key => $doc)  
                <div class="grid-item">
                  <a class="wrapping-link" href="{{route('read',$doc->id)}}"></a>
                  <div class="grid-item-wrapper">
                    @if ($doc->photocouv!=null)
                    <img class="photocouv" alt="100x100" src="{{ asset($doc->image) }}" data-holder-rendered="true" style="height:100%; width:100%;" ></a>
                    @else
                    <img class="photocouv" alt="100x100" src="{{ asset("/uploads/images/documentpage.png") }}" data-holder-rendered="true" style="height:100%; width:100%;"></a>
                    @endif
                  </div>
                  <a href="{{route('read',$doc->id)}}" style=" height:50px; width:90%; padding-left:5%;" > <div class="" >
                
                      <h4 style="font-family: 'Dosis';
                      font-weight: bold;"> {{ $doc->title }} </h4>
                    </div></a>
                  
                </div>
                 @endforeach
             
                
              </div>
            </div> 
      </div>
        
        </div>
   
        <!--<div class="carda"></div>
        <div class="carda">Card</div>-->
      </div>
      
      <!--<div class="container">
        <div class="grid-row">
            @foreach ($docdads as $key => $doc)  
          <div class="grid-item">
            <a class="wrapping-link" href="{{route('read',$doc->id)}}"></a>
            <div class="grid-item-wrapper">
              @if ($doc->photocouv!=null)
              <img class="photocouv" alt="100x100" src="{{ asset($doc->image) }}" data-holder-rendered="true" style="height:100%; width:100%;" ></a>
              @else
              <img class="photocouv" alt="100x100" src="{{ asset("/uploads/images/documentpage.png") }}" data-holder-rendered="true" style="height:100%; width:100%;"></a>
              @endif
            </div>
            <a href="{{route('read',$doc->id)}}" style=" height:50px; width:90%; padding-left:5%;" > <div class="" >
          
                <h4 style="font-family: 'Dosis';
                font-weight: bold;"> {{ $doc->title }} </h4>
              </div></a>
          </div>
           @endforeach
          <div class="grid-item">
            <a class="wrapping-link" href="https://www.dell.com/learn/us/en/555/campaigns/xps-linux-laptop_us" target="_blank"></a>	   
            <div class="grid-item-wrapper">
              <div class="grid-item-container">
                <div class="grid-image-top sputnik">
                  <span class="centered project-image-bg sputnik-image"></span>
                </div>
                
              </div>
            </div>
          </div>
          
        </div>
      </div>-->
     <!--</section>-->
    
   </div>

  <!--</div>-->

  
<!--</section>-->
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
