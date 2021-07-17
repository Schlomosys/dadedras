<!doctype html>
<html lang="fr">
<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!--<script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/downloader.js') }}"></script>
    <script src="{{ asset('js/typing.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>-->
    <script src="{{ asset('js/typing.js') }}"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    <!--<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css">-->
    <!--Color Picker-->

   
    
    <!--Color Picker-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha256-aAr2Zpq8MZ+YA/D6JtRD3xtrwpEz2IqOS+pWD/7XKIw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" integrity="sha512-xmGTNt20S0t62wHLmQec2DauG9T+owP9e6VU8GigI0anN7OXLip9i7IwEhelasml2osdxX71XcYm6BQunTQeQg==" crossorigin="anonymous" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js" integrity="sha512-VvWznBcyBJK71YKEKDMpZ0pCVxjNuKwApp4zLF3ul+CiflQi6aIJR+aZCP/qWsoFBA28avL5T5HA+RE+zrGQYg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-angular.min.js" integrity="sha512-KT0oYlhnDf0XQfjuCS/QIw4sjTHdkefv8rOJY5HHdNEZ6AmOh1DW/ZdSqpipe+2AEXym5D0khNu95Mtmw9VNKg==" crossorigin="anonymous"></script>
    
   
    
    
    <style type="text/css">

      
        .label-info{
            background-color: #17a525;

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


    /*         CUSTOM- TITRE *************************************************************/   

        .clear { clear: both; }
        #page-wrap { width: auto; margin: 40px auto 60px; }
        #pic { float: right; margin: -30px 0 0 0; }
        h1 { margin: 0 0 16px 0; padding: 0 0 16px 0; font-size: 20px; font-weight: bold; letter-spacing: -2px; border-bottom: 1px solid #999; }
        h2 { font-size: 20px; margin: 0 0 6px 0; position: relative; }
        h2 span { position: absolute; bottom: 0; right: 0; font-style: italic; font-family: Georgia, Serif; font-size: 16px; color: #999; font-weight: normal; }
        p { margin: 0 0 16px 0; }
        a { color: #999; text-decoration: none; border-bottom: 1px dotted #999; }
        a:hover { border-bottom-style: solid; color: black; }
        ul { margin: 0 0 32px 17px; }
        #objective { width: auto; float: left; }
        #objective p { font-family: Georgia, Serif; font-style: italic; color: #666; }
        dt { font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: auto; float: left; height: 100px; border-right: 1px solid #999;  }
        dd { width: auto; float: right; }
        dd.clear { float: none; margin: 0; height: 15px; } 

   @media only screen and (min-device-width: 481px) and (max-device-width: 1024px)  {
    .clear { clear: both; }
        #page-wrap { width: auto; margin: 40px auto 60px;  word-wrap: break-word; /* old name */
  overflow-wrap: break-word;}
        #contact-info{  padding-top: 100px;
     }
        #pic {    padding-top:1px ; ;
     }
        h1 { width: auto;margin: 0 0 16px 0;  padding: 0 0 16px 0; font-size:20px; font-weight: bold; letter-spacing: -2px; border-bottom: 1px solid #999;  }
        h2 { font-size: 18px; margin: 0 0 6px 0; position: relative;  word-wrap: break-word; }
        h2 span { position: absolute; bottom: 0; right: 0; font-style: italic; font-family: Georgia, Serif; font-size: 16px; color: #999; font-weight: normal;  word-wrap: break-word; }
        p { margin: 0 0 16px 0;   word-wrap: break-word;}
        a { color: #999; text-decoration: none; border-bottom: 1px dotted #999; }
        a:hover { border-bottom-style: solid; color: black; }
        ul { margin: 0 0 32px 17px; }
        #objective { width: auto; float: left; word-wrap: break-word;}
        #objective p { font-family: Georgia, Serif; font-style: italic; color: #666; word-break: break-all;
                     word-break: break-word;
                     word-break: keep-all;
                     word-wrap: break-word;
                     overflow-wrap: break-word;}
        dt { font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 100px; border-right: 1px solid #999; word-wrap: break-word; }
        dd { width: auto; float: right; word-wrap: break-word;}
        dd.clear { float: none; margin: 0; height: 15px; word-wrap: break-word; } 
    }

   @media screen and (max-width: 600px) {
    .clear { clear: both; }
        #page-wrap { width: auto; margin: 40px auto 60px;  word-wrap: break-word; /* old name */
  overflow-wrap: break-word;}
        #contact-info{  padding-top: 150px;
     }
        #pic {     padding-top:1px ;
     }
        h1 { width: auto;margin: 0 0 16px 0;  padding: 0 0 16px 0; font-size:20px; font-weight: bold; letter-spacing: -2px; border-bottom: 1px solid #999;  }
        h2 { font-size: 18px; margin: 0 0 6px 0; position: relative;  word-wrap: break-word; }
        h2 span { position: absolute; bottom: 0; right: 0; font-style: italic; font-family: Georgia, Serif; font-size: 16px; color: #999; font-weight: normal;  word-wrap: break-word; }
        p { margin: 0 0 16px 0;   word-wrap: break-word;}
        a { color: #999; text-decoration: none; border-bottom: 1px dotted #999; }
        a:hover { border-bottom-style: solid; color: black; }
        ul { margin: 0 0 32px 17px; }
        #objective { width: auto; float: left; word-wrap: break-word;}
        #objective p { font-family: Georgia, Serif; font-style: italic; color: #666; word-break: break-all;
                     word-break: break-word;
                     word-break: keep-all;
                     word-wrap: break-word;
                     overflow-wrap: break-word;}
        dt { font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 100px; border-right: 1px solid #999; word-wrap: break-word; }
        dd { width: auto; float: right; word-wrap: break-word;}
        dd.clear { float: none; margin: 0; height: 15px; word-wrap: break-word; } 
    }    

     /*         CUSTOM- TITRE*************************************************************/  
     
     
     
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

.at {
  color: red;
}

.hash {
  color: blue;
}

/**

POST LIST*/


    </style>
</head>
<body>

  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
      
      <div class="p-4 pt-5">
        @if (auth()->user()->image)
        <a href="#" > <img class="rounded-circle z-depth-2" alt="100x100" src="{{ asset(auth()->user()->image) }}" data-holder-rendered="true" style="height:150px; width:150px; " id="pic"></a>
       <!-- <a href="#" class="img logo rounded-circle mb-5"><img src="{{ asset(auth()->user()->image) }}" alt="Photo de profil"  ></a>-->
        <!--<a href="#" class="img logo rounded-circle mb-5"><img src="{{ asset("/uploads/images/photoNaN.png") }}" alt="Photo de profil"  ></a>-->
        @else
        <a href="#" > <img class="rounded-circle z-depth-2" alt="100x100" src="{{ asset("/uploads/images/photoNaN.png") }}" data-holder-rendered="true" style="height:150px; width:150px; " id="pic"></a>
        @endif  

       <!-- <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/photoNaN.png);"></a>-->
        <ul class="list-unstyled components mb-5" style="padding-top:50%;">
         
          <li class="active">
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
            <a href="#">Mes Annonces</a>
        </li>
          <li>
              <a href="#">Candidatures</a>
          </li>
          
         
          <li>
            <a href="#">Formations</a>
          </li>
          <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Paramètres</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
              <li>
                  <a href="{{-- route('profile.recUpdateprofile',$profile->id) --}}">Modifier profil</a>
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

      </div>
    </nav>

      <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

          <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
          </button>
          <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa fa-bars"></i>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="#">{{ date('Y-m-d ') }}, </a>
              </li>
              <!--<li class="nav-item">
                  <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Portfolio</a>
              </li>-->
              <li class="nav-item">
                 
                  <a class="nav-link" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    Déconnection
         </a>


         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <main class="py-4">
        @yield('content')
      </main>
      @yield('content')
      <!--<h1>DEXTREM QR-CODE</h1>-->
   <!-- TABSS-->   
   <h1 style=" text-align: center;  background: #222;
    color: #aaa; font-size:30px">Bienvenue sur  &lt;MC Stage&gt; C'est
    <span
       class="txt-rotate"
       data-period="2000"
       data-rotate='[ "simple", "customizé", "stylé", "cool", "fun!" ]'></span>
  </h1>
  <div class="row">
      
      
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
 <!-- <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <div class="nav-link active" id="home-tab" data-toggle="tab"  role="tab" aria-controls="home" aria-selected="true" style="font-family:Impact, Charcoal, sans-serif;">Profil</div>
    </li>
    <li class="nav-item">
      <div  id="profile-tab" data-toggle="tab"  role="tab" aria-controls="profile" aria-selected="false" style="font-family:Impact, Charcoal, sans-serif; color:white;">Offres de Stage</div>
    </li>
  
  </ul>-->
   <!-- TABSS-->
    <!-- Contenu des TABS-->    
  <!--<div class="tab-content" id="myTabContent">-->
      <!--Premiere PAge-->
    <!--<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" >-->
    
    <!-- <h3 style=" text-align: center;font-family:Impact, Charcoal, sans-serif;">Votre profil de recherche </h3>-->
    
    




  <div class="content">
      <div data-toggle="modal" data-target="#modal" class="title m-b-md">
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
             <div style=" text-align: center;font-family:Impact, Charcoal, sans-serif;">MC-Stage PUB</div>
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
             <!--<h3>
               Jessica Jones<span class="font-weight-light">, 27</span>
             </h3>
             <div class="h5 font-weight-300">
               <i class="ni location_pin mr-2"></i>Bucharest, Romania
             </div>
             <div class="h5 mt-4">
               <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
             </div>
             <div>
               <i class="ni education_hat mr-2"></i>University of Computer Science
             </div>
             <hr class="my-4">
             <p>Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music.</p>
             <a href="#">Show more</a>-->
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
    <div class="row"  style=" display: flex;flex-direction: row;justify-content:space-between; ">
      <div class="">
        @if (auth()->user()->image)
        <div class="shadow"  style="position: absolute;left: 16px;top: 16px;"><img src="{{ asset(auth()->user()->image) }}"  style="height:75px; width:75px; "alt="Photo de profil" id="pic" ></div>
        @else
          <div  style="position: absolute;left: 16px;padding-top: 20px;"><a href="#" > <img class="rounded-circle z-depth-2" alt="100x100" src="{{ asset("/uploads/images/photoNaN.png") }}" data-holder-rendered="true" style="height:45px; width:45px; " id="pic"></a></div>
         
        @endif </div>
      <div class="">
           {{ $post->user->email }} 
           {{-- $post->user->firstname --}}
       </div>

      <div class="">{{ ucfirst (utf8_encode ($post->created_at->formatLocalized('%A %d %B %Y'))) }} </div>
  </div></a>
  
  </div>
  <a href="{{ route('post.show',$post->slug) }}"><div class="card-body ">
    <div class="row"  style=" display: flex;flex-direction: row;justify-content:start; ">
      
        {{-- $post->tags->name --}}
        @foreach($post->tags as $tag)
          <a href=""> <div class="" style="margin: 0px 0px 0px 10px; color: rgb(88, 77, 240);">#{{ $tag->name }}</div></a>
        @endforeach

      
      </div>
 
    <h5 class="card-title" style=" color: rgb(88, 77, 240);">{{ $post->title }}</h5>
    <p class="card-text" style=" color: rgb(0, 0, 0);" >{{ $post->body }}</p>
  </div></a>
  <a href="{{ route('post.show',$post->slug) }}"><div class="card-footer bg-transparent border-success">
    <div id="conteneur" style=" display: flex;flex-direction: row;justify-content: space-between; ">
      <div class="element 1">
        <div class="likes">
        <div><i class='fa fa-heart'></i></div>
        <div>1.5K</div>
      </div> </div>
      <div class="element 2">
        <div class="projects">
          <div><i class='fa fa-comment'></i></div>
          <div>154</div>
        </div>  
      
      </div>
      <div class="element 3">
        <div class="share">
          <div><i class='fa fa-share'></i></div>
          <div>154</div>
        </div>  
        
      
      </div>
  </div></a>




  </div>
</div></a>

@endforeach
     
   </div>
 </div>


</div>



  <!-- Modal HTML Markup -->
<div id="modal" class="modal fade">
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



{{-- @foreach($posts as $post)
<div class="card" style="background-color:rgb(252, 252, 243); width:auto;">
  <!--<div class="card-header">
     <div id="heda">
         <ul id="monu">
             <li><a href=""><span>Post</span></a></li>
         </ul>
     </div>
 </div>-->
 
 <div class="card-body">
  
  <div class="row">
     <div id="page-wrap" style="padding-top:5px">
      <div class="container">
        <div class="col">
          <div class="row-sm">
         @if (auth()->user()->image)
         <div class="shadow"><img src="{{ asset(auth()->user()->image) }}"  style="height:150px; width:100px; "alt="Photo de profil" id="pic" ></div>
         @else
             <a href="#" > <img class="rounded-circle z-depth-2" alt="100x100" src="{{ asset("/uploads/images/photoNaN.png") }}" data-holder-rendered="true" style="height:150px; width:150px; " id="pic"></a>
          
         @endif
          </div>
          <div class="row-sm" style="">
             
     
              <div id="contact-info" class="vcard" style="">
         
        
      
          <h1 >{{ $post->user->lastname }} </h1>
          <h1>{{ $post->user->firstname }}</h1>
          <h2> </h2>
          <h2> {{ $post->title }}</h2>
           <div >
              {{ $post->body }}
           </div>
        <ul>
        </ul>
      
          <p>
              
              
          </p>
         
          <h2> 
           
        </h2>
         </div>

          </div>
          
        </div>
      </div>
      <div class="border border-light p-3 mb-4">

        <div class="text-center">
          <a href="{{ route('profile.updateprofile',$profile->id) }}">  <button type="button" class="btn btn-primary">Editer votre profil</button></a>
        </div>
      
      </div>
      <div class="likes">
        <p><i class='fa fa-heart'></i></p>
        <p>1.5K</p>
      </div>
      <div class="projects">
        <p><i class='fa fa-comment'></i></p>
        <p>154</p>
      </div>

<div>

</div>

      <div style='padding: 5px; background-color:red; color: red;margin-top: 10px; margin-bottom: 4px; height:3px, width:1000px;'>.</div>
                 
         <div id="objective">
             <p style="color:beige;">
                 

                 Un bonheur que rien n'a entamé succombe à la moindre atteinte ; mais quand 
                 on doit se battre contre les difficultés incessantes, 
                 on s'aguerrit dans l'épreuve, on résiste à n'importe quels maux, et même si l'on trébuche, 
                 on lutte encore à genoux.
             </p>
         </div>
          
   
  </div>  

</div>
</div>
</div>
@endforeach --}}
      
     

</div>
  
</div>
 
</body>
</html>

<!--PARTIE AJAX-->

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>

</script>
<script type="text/javascript">
  (function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();


  $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

})(jQuery);

 // $('#darkcolor').colorpicker();
 // $('#lightcolor').colorpicker();
</script>

<!--<script src="{{ asset('js/easy.qrcode.js') }}"></script>--
<script>
//CORP DES FONCTION a EXECUTER SUR js/easy.qrcode.js'



</script>-->

<script>

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
   
		
    
    $("textarea").hashtags();
   // $(".card-text").hashtags();
    
}
);

 (function($) {
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
})(jQuery);

</script>

