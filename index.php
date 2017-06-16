<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>FutureLeap</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery.bxslider.min.css">
  </head>
  <body>

    <div class="page">
      <?php
        require_once 'includes/header.php';
       ?>

      <div class="slider">
        <ul class="bxslider">
          <li><img src="images/slider1.jpg" /></li>
          <li><img src="images/slider2.jpg" /></li>
          <li><img src="images/slider3.jpg" /></li>
        </ul>
      </div>

      <div class="page-center row">

        <div class="col-md-8 col-sm-12 col-xs-12">
          <div class="welcome col-md-12 col-sm-12 col-xs-12">
            <h2>Welcome to the FutureLeap Group</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>

          <div class="col-md-6 col-sm-12 col-xs-12 panel">
            <div class="panel-header">
              <h2>VISION &amp; MISSION</h2>
            </div>
            <div class="panel-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>

          <div class="col-md-6 col-sm-12 col-xs-12 panel">
            <div class="panel-header">
              <h2>MEDIA CENTER</h2>
            </div>
            <div class="panel-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 news-events">
          <h2>NEWS &amp; EVENTS</h2>
        </div>
      </div>

      <div class="our-clients row">
        <div class="container-fluid">
          <div class="clients-left col-md-2">
            <p>OUR CLIENTS</p>
          </div>

          <div class="clients-right col-md-10">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
          </div>
        </div>
      </div>

      <div class="projects">
        <div class="project-header">
          <h2>LATEST PROJECTS</h2>
        </div>

      </div>

      <?php
        require_once 'includes/footer.php';
       ?>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('.bxslider').bxSlider();
      });
    </script>
  </body>
</html>
