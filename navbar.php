<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" type="text/css" href="node_modules/materialize-css/dist/css/materialize.min.css"  />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style media="screen">

    </style>
    <title></title>
  </head>
  <body>

    <ul id="slide-out" class="side-nav">

  <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
  <li><a href="#!">Second Link</a></li>
  <li><div class="divider"></div></li>
  <li><a class="subheader">Subheader</a></li>
  <li class="link"><a class="waves-effect" href="#!">Third Link With Waves</a></li>
</ul>
<a href="#" data-activates="slide-out" class="button-collapse waves-effect waves-light btn"><i class="tiny material-icons">menu</i></a>
  <div class="container">
    <div class="row">
      <div class="col s6 offsite 2">
        saffafsaffsfaf
      </div>
    </div>
  </div>
    <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="node_modules/materialize-css/dist/js/materialize.min.js"></script>
    <script type="text/javascript">
      $(".button-collapse").sideNav();
        $('.button-collapse').sideNav('show');
        $(document).ready(function () {
          //  $('li').hover(function () {
          //    $('li').css('background-color','red');
          //  });
          //  $('li').mouseleave(function () {
          //    $('li').css('background-color','white');
          //  });

        //    $('.link').mouseenter(function () {
        ///      $('.link').css('background-color','#f8bbd0')
          //  });
          $('li').hover(function() {
              $(this).css('background-color','#f8bbd0');
          });
          $('li').mouseout(function () {
            $('li').css('background-color','');
          });
        });
    </script>
  </body>
</html>
