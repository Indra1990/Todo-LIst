<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" type="text/css" href="node_modules/materialize-css/dist/css/materialize.min.css"  />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>

    <!-- Dropdown Structure -->

<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!"><i class="material-icons">block</i>Logout</a></li>
</ul>

<nav>
  <div class="nav-wrapper">
    <div class="container">
    <a href="#!" class="brand-logo">Logo</a>
    <ul class="right hide-on-med-and-down">
      <li><a href="sass.html">Sass</a></li>
      <li><a href="badges.html">Components</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Hi Joe<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
  </div>
</nav>

 <!-- Dropdown Structure -->
 <ul id='dropdown1' class='dropdown-content'>
   <li><a href="#!">one</a></li>
   <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
   <li class="divider"></li>
   <li><a href="#!">three</a></li>
   <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
   <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
 </ul>
 <!--slider-->
 <div class="slider">
   <ul class="slides">
     <li>
       <img src="image/LB.jpg"> <!-- random image -->
       <div class="caption center-align">
         <h3>This is our big Tagline!</h3>
         <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
       </div>
     </li>
     <li>
       <img src="https://lorempixel.com/580/250/nature/2"> <!-- random image -->
       <div class="caption left-align">
         <h3>Left Aligned Caption</h3>
         <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
       </div>
     </li>
     <li>
       <img src="https://lorempixel.com/580/250/nature/3"> <!-- random image -->
       <div class="caption right-align">
         <h3>Right Aligned Caption</h3>
         <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
       </div>
     </li>
     <li>
       <img src="https://lorempixel.com/580/250/nature/4"> <!-- random image -->
       <div class="caption center-align">
         <h3>This is our big Tagline!</h3>
         <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
       </div>
     </li>
   </ul>
 </div>
<!--end slider-->

<br>
<div class="container">
   <div class="row">
    <div class="col s4">
      <div class="card card-panel hoverable">
        <div class="card-image">
          <img class="materialboxed" src="image/LB.jpg">
        </div>

        <div class="card-content">
          <span class="card-title"><i class="material-icons">place</i>Labuan Bajo</span>

          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action red">
          <a href="#" style="color :white;">This is a link</a>
        </div>
      </div>
    </div>

    <div class="col s4">
      <div class="card card-panel hoverable">
        <div class="card-image">
          <img src="image/LB.jpg">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>

    <div class="col s4">
      <div class="card card-panel hoverable">
        <div class="card-image">
          <img src="image/LB.jpg">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>


  </div>
 </div>

 <a class='dropdown-button btn' href='#' data-activates='dropdown1'>Drop Me!</a>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="node_modules/materialize-css/dist/js/materialize.min.js"></script>
    <script type="text/javascript">

      $('.dropdown-button').dropdown({
        hover :true,
          alignment: 'left',
           constrainWidth: false,
      });

      $(document).ready(function(){
        $('.materialboxed').materialbox();
      });

      $(".dropdown-button").dropdown();

      $(document).ready(function(){
        $('.slider').slider({
          height : 500,
          interval :1000,
        });

      });



    </script>
  </body>
</html>
