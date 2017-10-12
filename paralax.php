<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" type="text/css" href="node_modules/materialize-css/dist/css/materialize.min.css"  />
    <meta charset="utf-8">
    <style media="screen">
    .parallax-container {
        height: 500px;
        }
        .body {
  display: flex;
  min-height: 100vh;
  flex-direction: column;
}

      .main {
          flex: 1 0 auto;
        }

        .nav-wrapper{
          background-color:  grey  !important;
        }
    </style>
    <title></title>
  </head>
  <body>
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

    <div class="parallax-container">
     <div class="parallax"><img src="image/LB.jpg"></div>
     <br><br><br><br><br>
     <div class="row center">
       <a href="#" class="btn-large waves-effect waves-light green">Get started</a>
       <a href="#" class="btn-large waves-effect waves-light blue">Get started</a>
     </div>
   </div>
   <div class="section white">
   <div class="row container">
     <h2 class="header">Parallax</h2>
     <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
   </div>
 </div>
 <div class="parallax-container">
   <div class="parallax"><img src="image/semeru.jpg"></div>
 </div>

 <footer class="page-footer">
           <div class="container">
           © 2014 Copyright Text
           <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
           </div>

       </footer>

    <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="node_modules/materialize-css/dist/js/materialize.min.js"></script>
    <script>
      $(document).ready(function(){
      $('.parallax').parallax();
      });

    </script>
  </body>
</html>
