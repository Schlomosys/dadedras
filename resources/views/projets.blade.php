@extends('layouts.appbis')

@section('content')
<link href="https://fr.allfont.net/allfont.css?fonts=dosis-extralight" rel="stylesheet" type="text/css" />
<style type="text/css">


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
  height: 50vh;
  min-height: 350px;
  background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.7)), url('{{ asset("/uploads/images/dedrasicon.png") }}');
  background-size: cover;
  /*background-size:contain;*/
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.features {
  width: auto;
  height: auto;
  background-color: #f1f1f1;
  display: flex;
  padding: 20px 20px 15px;
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
    padding: 20px;
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
  
}

.item {
  flex: 0 32%;
  height: 100px;
  margin-bottom: 2%; /* (100-32*3)/2 */
}
  
    
    
    /*
    CSS GRID
    **/
    .card {
    background-color: #fff;
    border-radius: 10px;
    border: none;
    position: relative;
    margin-bottom: 30px;
    box-shadow: 0 0.46875rem 2.1875rem rgba(90,97,105,0.1), 0 0.9375rem 1.40625rem rgba(90,97,105,0.1), 0 0.25rem 0.53125rem rgba(90,97,105,0.12), 0 0.125rem 0.1875rem rgba(90,97,105,0.1);
}
.l-bg-cherry {
    background: linear-gradient(to right, #493240, #f09) !important;
    color: #fff;
}

.l-bg-blue-dark {
    background: linear-gradient(to right, #373b44, #4286f4) !important;
    color: #fff;
}

.l-bg-green-dark {
    background: linear-gradient(to right, #0a504a, #38ef7d) !important;
    color: #fff;
}

.l-bg-orange-dark {
    background: linear-gradient(to right, #a86008, #ffba56) !important;
    color: #fff;
}

.l-bg-blue {
    background: linear-gradient(to right, #0f0474, #0c44ad) !important;
    color: #fff;
}
.l-bg-orange{
    background: linear-gradient(to right, #a8910a, #eeeb3e) !important;
    color: #fff;
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

.l-bg-cyan {
    background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
    color: #fff;
}

.l-bg-green {
    background: linear-gradient(135deg, #23bdb8 0%, #43e794 100%) !important;
    color: #fff;
}

.l-bg-orange {
    background: linear-gradient(to right, #f9900e, #ffba56) !important;
    color: #fff;
}

.l-bg-cyan {
    background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
    color: #fff;
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
         <li class="nav-item" ><a href="{{ url('/home') }}">HOME</a></li>
         <li class="nav-item" ><a href="{{ url('/projets') }}" style="background-color: rgb(247, 245, 148)">PROJETS</a></li>
         <li class="nav-item"><a href="{{ url('/apropos') }}">A PROPOS</a></li>
         <li class="nav-item"><a href="{{ url('/contact') }}">CONTACT</a></li>
        
         <!--<i class="fas fa-search" id="search-icon"></i>
         <input class="search-input" type="text" placeholder="Search..">-->
      @auth
         <div class="transition"><a href="{{ url('/home') }}" class="" style="font-family: 'Dosis'; color:red;      ">MON COMPTE</a></div>
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
     </nav>--}}
     </div>
     <section class="headline">
       <h1 style=" font-family: 'Dosis';
       font-weight: bold; font-size:40px;text-align:left; padding:5%; ">Projets du Dedras</h1>
       <h1 style=" font-family: 'Dosis';
       font-weight: 200; font-size:30px;text-align:left; padding:5%;">Dedras a développé  pulsieurs projets sur la base des programmes suivants bien établis</h1>
     </section>
     <section class="features">
        <div class="feature-container">
            <div class="col">
                <div class="card l-bg-cherry">
                    <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
                        <div class="mb-4">
                            <h5 class="card-title mb-0">Humanitaire</h5>
                        </div>
                       
                        <div >
                            <div class="btn btn-outline-primary"> Découvrir</div>
                        </div>
                    </div>
                </div>
            </div>
           </div>
           <div class="feature-container">
            <div class="col">
                <div class="card l-bg-blue-dark">
                    <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                        <div class="mb-4">
                            <h5 class="card-title mb-0">Hygiène</h5>
                        </div>
                        <!--<div class="row align-items-center mb-2 d-flex">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                    15.07k
                                </h2>
                            </div>
                            <div class="col-4 text-right">
                                <span>9.23% <i class="fa fa-arrow-up"></i></span>
                            </div>
                        </div>-->
                        <div >
                            <div class="btn btn-outline-primary"> Découvrir</div>
                        </div>
                    </div>
                </div>
            </div>
           </div>
           <div class="feature-container">
            <div class="col">
                <div class="card l-bg-green-dark">
                    <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"><i class="fas fa-ticket-alt"></i></div>
                        <div class="mb-4">
                            <h5 class="card-title mb-0">Nutrittion</h5>
                        </div>
                        <!--<div class="row align-items-center mb-2 d-flex">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                    578
                                </h2>
                            </div>
                            <div class="col-4 text-right">
                                <span>10% <i class="fa fa-arrow-up"></i></span>
                            </div>
                        </div>-->
                        <div >
                            <div class="btn btn-outline-primary"> Découvrir</div>
                        </div>
                    </div>
                </div>
            </div>
           </div>
     </section>    
     <section class="features">
    
       <div class="feature-container">
        <div class="col">
            <div class="card l-bg-orange-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-dollar-sign"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Agriculture</h5>
                    </div>
                    <!--<div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                $11.61k
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span>2.5% <i class="fa fa-arrow-up"></i></span>
                        </div>
                    </div>-->
                    <div >
                        <div class="btn btn-outline-primary"> Découvrir</div>
                    </div>
                </div>
            </div>
        </div>
       </div>
       <div class="feature-container">
        <div class="col">
            <div class="card l-bg-blue">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Education</h5>
                    </div>
                   
                    <div >
                        <div class="btn btn-outline-primary"> Découvrir</div>
                    </div>
                </div>
            </div>
        </div>
       </div>
       <div class="feature-container">
        <div class="col">
            <div class="card l-bg-blue">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Education</h5>
                    </div>
                   
                    <div >
                        <div class="btn btn-outline-primary"> Découvrir</div>
                    </div>
                </div>
            </div>
        </div>
       </div>
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
      
      {{--<div class="container">
        <div class="col-md- ">
            <div class="row ">
                <div class="col-xl-3 col-lg-6">
                    <div class="card l-bg-cherry">
                        <div class="card-statistic-3 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
                            <div class="mb-4">
                                <h5 class="card-title mb-0">Humanitaire</h5>
                            </div>
                           
                            <div >
                                <div class="btn btn-outline-primary"> Découvrir</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card l-bg-blue-dark">
                        <div class="card-statistic-3 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                            <div class="mb-4">
                                <h5 class="card-title mb-0">Hygiène</h5>
                            </div>
                            <!--<div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        15.07k
                                    </h2>
                                </div>
                                <div class="col-4 text-right">
                                    <span>9.23% <i class="fa fa-arrow-up"></i></span>
                                </div>
                            </div>-->
                            <div >
                                <div class="btn btn-outline-primary"> Découvrir</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card l-bg-green-dark">
                        <div class="card-statistic-3 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-ticket-alt"></i></div>
                            <div class="mb-4">
                                <h5 class="card-title mb-0">Nutrittion</h5>
                            </div>
                            <!--<div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        578
                                    </h2>
                                </div>
                                <div class="col-4 text-right">
                                    <span>10% <i class="fa fa-arrow-up"></i></span>
                                </div>
                            </div>-->
                            <div >
                                <div class="btn btn-outline-primary"> Découvrir</div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6">
                    <div class="card l-bg-orange-dark">
                        <div class="card-statistic-3 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-dollar-sign"></i></div>
                            <div class="mb-4">
                                <h5 class="card-title mb-0">Agriculture</h5>
                            </div>
                            <!--<div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        $11.61k
                                    </h2>
                                </div>
                                <div class="col-4 text-right">
                                    <span>2.5% <i class="fa fa-arrow-up"></i></span>
                                </div>
                            </div>-->
                            <div >
                                <div class="btn btn-outline-primary"> Découvrir</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card l-bg-blue">
                        <div class="card-statistic-3 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
                            <div class="mb-4">
                                <h5 class="card-title mb-0">Education</h5>
                            </div>
                           
                            <div >
                                <div class="btn btn-outline-primary"> Découvrir</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card l-bg-orange">
                        <div class="card-statistic-3 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
                            <div class="mb-4">
                                <h5 class="card-title mb-0">Formation</h5>
                            </div>
                           
                            <div >
                                <div class="btn btn-outline-primary"> Découvrir</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
      </div>--}}
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
