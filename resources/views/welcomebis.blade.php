<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

<style type="text/css">
/* /!\ You need to add vendor prefixes in order to render the CSS properly (or simply use https://leaverou.github.io/prefixfree/) /!\ */
body{
  background:#111111;
  margin:0;
  padding:0;
  width:100%;
  height:100%;
}

#tridiv {
  perspective: 800px;
  /*perspective: 400px;*/
  position: absolute;
  overflow: hidden;
  width: 100%;
  height: 100%;
  background: transparent;
  font-size: 100%;
}
.scene, .shape, .face, .face-wrapper, .cr {
  position: absolute;
  transform-style: preserve-3d;
}
.scene {
  width: 80em;
  height: 80em;
  /*width: 100px;
  height: 100px;*/
  top: 50%;
  left: 50%;
  margin: -40em 0 0 -40em;
    -webkit-animation: rotate 5s infinite; /* Safari 4+ */
  -moz-animation:    rotate 5s infinite; /* Fx 5+ */
  -o-animation:      rotate 5s infinite; /* Opera 12+ */
  animation:        rotate 5s infinite; /* IE 10+ */
}
.shape {
  top: 50%;
  left: 50%;
  width: 0;
  height: 0;
  transform-origin: 50%;
  background:rgba(234, 228, 235, 0.973);
}
.face, .face-wrapper {
  overflow: hidden;
  transform-origin: 0 0;
  backface-visibility: hidden;
  /* hidden by default, prevent blinking and other weird rendering glitchs */
  
}
.face {
  box-shadow: inset -2px -2px 2px 3px rgba(234, 228, 235, 0.973);
}
.face {
  background-size: 100% 100%!important;
  background-position: center;
  background-color:rgba(234, 228, 235, 0.973);
}
.face-wrapper .face {
  left: 100%;
  width: 100%;
  height: 100%
}
.photon-shader {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%
}
.side {
  left: 50%;
}
.cr, .cr .side {
  height: 100%;
}
[class*="cuboid"] .ft, [class*="cuboid"] .bk {
  width: 100%;
  height: 100%;
}
[class*="cuboid"] .bk {
  left: 100%;
}
[class*="cuboid"] .rt {
  transform: rotateY(-90deg) translateX(-50%);
}
[class*="cuboid"] .lt {
  transform: rotateY(90deg) translateX(-50%);
}
[class*="cuboid"] .tp {
  transform: rotateX(90deg) translateY(-50%);
}
[class*="cuboid"] .bm {
  transform: rotateX(-90deg) translateY(-50%);
}
[class*="cuboid"] .lt {
  left: 100%;
}
[class*="cuboid"] .bm {
  top: 100%;
}
/* .cub-1 styles */
.cub-1 {
  transform:translate3D(0em, 0em, 0em) rotateX(0deg) rotateY(360deg) rotateZ(0deg);
  opacity:1;
  /*width:19.18em;
  height:5em;*/
  width:19em;
  height:8em;
  margin:-2.5em 0 0 -9.59em;
  background-color:#dedef0;
}
.cub-1 .ft {
  transform:translateZ(2.5em);
}
.cub-1 .bk {
  transform:translateZ(-2.5em) rotateY(180deg);
}
.cub-1 .rt, .cub-1 .lt {
  /*width:5em;
  height:5em;*/
  width:5em;
  height:8em;
}
.cub-1 .tp, .cub-1 .bm {
  /*width:19.18em;
  height:5em;*/
  width:19em;
  height:8em;
  
}
.cub-1 .face {
  background-color:#FFFFFF;
}
.cub-1 .ft {
  background:url(http://projects.bearddesign.co/burrp/front-main.svg);
}
.cub-1 .bk {
  background:url(http://projects.bearddesign.co/burrp/back.svg);
}
.cub-1 .tp {
  background:url(http://projects.bearddesign.co/burrp/top.svg);
}
.cub-1 .bm {
  background:url(http://projects.bearddesign.co/burrp/front-main.svg);
}
.cub-1 .lt {
  background:url(http://projects.bearddesign.co/burrp/side-drink.svg);
}
.cub-1 .rt {
  background:url(http://projects.bearddesign.co/burrp/side-food.svg);
}

@-webkit-keyframes rotate {
  0%   { 
    -webkit-transform:rotateX(0deg) rotateY(0deg); }
  15%   { 
    -webkit-transform:rotateX(0deg) rotateY(0deg); }
  25% {
    -webkit-transform:rotateX(0deg) rotateY(-300deg) rotateZ(0deg);
  }
   30% {
    -webkit-transform:rotateX(0deg) rotateY(-270deg) rotateZ(0deg);
  }
   45% {
    -webkit-transform:rotateX(0deg) rotateY(-270deg) rotateZ(0deg);
  }
  60% {
    -webkit-transform:rotateX(300deg) rotateY(-200deg) rotateZ(0deg);
  }
  65% {
    -webkit-transform:rotateX(270deg) rotateY(-180deg) rotateZ(0deg);
  }  
  90%   { 
    -webkit-transform:rotateX(10deg) rotateY(10deg) rotateZ(0deg); }
  
  100%   { 
    -webkit-transform:rotateX(0deg) rotateY(0deg) rotateZ(0deg); }
}
@keyframes rotate {
  0%   { 
    -webkit-transform:rotateX(0deg) rotateY(0deg) rotateZ(0deg); }
  15%   { 
    -webkit-transform:rotateX(0deg) rotateY(0deg) rotateZ(0deg); }
  25% {
    -webkit-transform:rotateX(0deg) rotateY(-300deg) rotateZ(0deg);
  }
   30% {
    -webkit-transform:rotateX(0deg) rotateY(-270deg) rotateZ(0deg);
  }
   45% {
    -webkit-transform:rotateX(0deg) rotateY(-270deg) rotateZ(0deg);
  }
  60% {
    -webkit-transform:rotateX(300deg) rotateY(-200deg) rotateZ(0deg);
  }
  65% {
    -webkit-transform:rotateX(270deg) rotateY(-180deg) rotateZ(0deg);
  }  
  90%   { 
    -webkit-transform:rotateX(10deg) rotateY(10deg) rotateZ(0deg)}
  
  100%   { 
    -webkit-transform:rotateX(0deg) rotateY(0deg); }
}

/* KEYFRAMES */

@keyframes spin {
  from {
    transform: rotate(0);
  }
  to{
    transform: rotate(359deg);
  }
}

@keyframes spin3D {
  from {
    transform: rotate3d(.5,.5,.5, 360deg);
  }
  to{
    transform: rotate3d(0deg);
  }
}

@keyframes configure-clockwise {
  0% {
    transform: rotate(0);
  }
  25% {
    transform: rotate(90deg);
  }
  50% {
    transform: rotate(180deg);
  }
  75% {
    transform: rotate(270deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@keyframes configure-xclockwise {
  0% {
    transform: rotate(45deg);
  }
  25% {
    transform: rotate(-45deg);
  }
  50% {
    transform: rotate(-135deg);
  }
  75% {
    transform: rotate(-225deg);
  }
  100% {
    transform: rotate(-315deg);
  }
}

@keyframes pulse {
  from {
    opacity: 1;
    transform: scale(1);
  }
  to {
    opacity: .25;
    transform: scale(.75);
  }
}

/* GRID STYLING */

* {
  box-sizing: border-box;
}

/*body {
  min-height: 100vh;
  background-color: #1d2630;
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  align-items: flex-start;
}*/

.spinner-box {
  width: 300px;
  height: 300px;
  /*display: flex;*/
  justify-content: center;
  align-items: center;
  background-color: transparent;
}

/* SPINNING CIRCLE */

.leo-border-1 {
  position: absolute;
  width: 150px;
  height: 150px;
  padding: 3px;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  background: rgb(63,249,220);
  background: linear-gradient(0deg, rgba(63,249,220,0.1) 33%, rgba(63,249,220,1) 100%);
  animation: spin3D 1.8s linear 0s infinite;
}

.leo-core-1 {
  width: 100%;
  height: 100%;
  background-color: #37474faa;
  border-radius: 50%;
}

.leo-border-2 {
  position: absolute;
  width: 150px;
  height: 150px;
  padding: 3px;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  background: rgb(251, 91, 83);
  background: linear-gradient(0deg, rgba(251, 91, 83, 0.1) 33%, rgba(251, 91, 83, 1) 100%);
  animation: spin3D 2.2s linear 0s infinite;
}

.leo-core-2 {
  width: 100%;
  height: 100%;
  background-color: #1d2630aa;
  border-radius: 50%;
}

/* ALTERNATING ORBITS */

.circle-border {
  width: 150px;
  height: 150px;
  padding: 3px;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  background: rgb(63,249,220);
  background: linear-gradient(0deg, rgba(63,249,220,0.1) 33%, rgba(63,249,220,1) 100%);
  animation: spin .8s linear 0s infinite;
}

.circle-core {
  width: 100%;
  height: 100%;
  background-color: #1d2630;
  border-radius: 50%;
}

/* X-ROTATING BOXES */

.configure-border-1 {
  width: 115px;
  height: 115px;
  padding: 3px;
  position: absolute;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #fb5b53;
  animation: configure-clockwise 3s ease-in-out 0s infinite alternate;
}

.configure-border-2 {
  width: 115px;
  height: 115px;
  padding: 3px;
  left: -115px;
  display: flex;
  justify-content: center;
  align-items: center;
  background: rgb(63,249,220);
  transform: rotate(45deg);
  animation: configure-xclockwise 3s ease-in-out 0s infinite alternate;
}

.configure-core {
  width: 100%;
  height: 100%;
  background-color: #1d2630;
}

/* PULSE BUBBLES */

.pulse-container {
  width: 120px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.pulse-bubble {
  width: 20px;
  height: 20px;
  border-radius: 50%;
  background-color: #3ff9dc;
}

.pulse-bubble-1 {
    animation: pulse .4s ease 0s infinite alternate;
}
.pulse-bubble-2 {
    animation: pulse .4s ease .2s infinite alternate;
}
.pulse-bubble-3 {
    animation: pulse .4s ease .4s infinite alternate;
}

/* SOLAR SYSTEM */

.solar-system {
  width: 250px;
  height: 250px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.orbit {
	position: relative;
	display: flex;
	justify-content: center;
	align-items: center;
	border: 1px solid #fafbfC;
	border-radius: 50%;
} 

.earth-orbit {
	width: 165px;
	height: 165px;
  -webkit-animation: spin 12s linear 0s infinite;
}

.venus-orbit {
	width: 120px;
	height: 120px;
  -webkit-animation: spin 7.4s linear 0s infinite;
}

.mercury-orbit {
	width: 90px;
	height: 90px;
  -webkit-animation: spin 3s linear 0s infinite;
}

.planet {
	position: absolute;
	top: -5px;
  width: 10px;
  height: 10px;
	border-radius: 50%;
  background-color: #3ff9dc;
}

.sun {
	width: 35px;
	height: 35px;
	border-radius: 50%;
	background-color: #ffab91;
}

.leo {
	position: absolute;
	display: flex;
	justify-content: center;
	align-items: center;
	border-radius: 50%;
}

.blue-orbit {
	width: 165px;
	height: 165px;
  border: 1px solid #91daffa5;
  -webkit-animation: spin3D 3s linear .2s infinite;
}

.green-orbit {
	width: 120px;
	height: 120px;
  border: 1px solid #91ffbfa5;
  -webkit-animation: spin3D 2s linear 0s infinite;
}

.red-orbit {
	width: 90px;
	height: 90px;
  border: 1px solid #ffca91a5;
  -webkit-animation: spin3D 1s linear 0s infinite;
}

.white-orbit {
	width: 60px;
	height: 60px;
  border: 2px solid #ffffff;
  -webkit-animation: spin3D 10s linear 0s infinite;
}

.w1 {
  transform: rotate3D(1, 1, 1, 90deg);
}

.w2 {
  transform: rotate3D(1, 2, .5, 90deg);
}

.w3 {
  transform: rotate3D(.5, 1, 2, 90deg);
}

.three-quarter-spinner {
  width: 50px;
  height: 50px;
  border: 3px solid #fb5b53;
  border-top: 3px solid transparent;
  border-radius: 50%;
  animation: spin .5s linear 0s infinite;
}
@media(min-width: 1333px) {
  .spin {
    padding-left:46.5%; padding-top:35%;
  }
}
@media(max-width: 1332px) {
   .spin {
    padding-left:44.5%; padding-top:47%;
  }
}
@media(max-width: 1073px) {
   .spin {
    padding-left:42.5%; padding-top:60%;
  }
}

@media(max-width: 815px) {
  .spin {
    padding-left:40.5%; padding-top:75%;
  }
}

@media(max-width: 555px) {
  .spin{
    padding-left:36.5%; padding-top:100%;
  }
}
@media(max-width: 474px) {
  .spin{
    padding-left:36.5%; padding-top:45%;
  }
}


  </style>
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript">
        
        $(window).on('load', function(){
            setTimeout(function(){
                window.location.href="home"
            },4000 )
         })   
        
        </script>
    </head>
    <body class="antialiased">
        <div class="col">
        <div id="tridiv">
            <div class="scene">
              <div class="shape cuboid-1 cub-1">
                <div class="face ft">
                  <div class="photon-shader" style="background-color: rgba(255, 255, 255, 0.0705882);"> <img class="rounded-circle z-depth-2" alt="100x100" src="{{ asset("/uploads/images/dedraslogo1.png") }}" data-holder-rendered="true" style="height:100%; width:100%; object-fit: cover; " id="pic"></div>
                </div>
                <div class="face bk">
                  <div class="photon-shader" style="background-color: rgba(255, 255, 255, 0.0705882);"></div>
                </div>
                <div class="face rt">
                  <div class="photon-shader" style="background-color: rgba(255, 255, 255, 0.0705882);"></div>
                </div>
                <div class="face lt">
                  <div class="photon-shader" style="background-color: rgba(255, 255, 255, 0.0705882);"></div>
                </div>
                <div class="face bm">
                  <div class="photon-shader" style="background-color: rgba(255, 255, 255, 0.0705882);"></div>
                </div>
                <div class="face tp">
                  <div class="photon-shader" style="background-color: rgba(255, 255, 255, 0.0705882);"></div>
                </div>
              </div>
            </div>
           
          </div>
          <div class="spinner-box spin"  >
            <div class="pulse-container" style="background-color: red;">  
              <div class="pulse-bubble pulse-bubble-1"></div>
              <div class="pulse-bubble pulse-bubble-2"></div>
              <div class="pulse-bubble pulse-bubble-3"></div>
            </div>
          </div>

        </div>
        
    </body>
</html>
