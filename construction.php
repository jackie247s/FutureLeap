<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>FutureLeap</title>
    <?php
      require_once 'includes/head-links.php';
     ?>
     <link rel="stylesheet" href="css/jquery.bxslider.min.css">
  </head>
  <body>

    <div class="page">
      <?php
        require_once 'includes/header.php';
       ?>

       <div class="construction">

         <div class="slider">
           <ul class="bxslider">
             <li><img src="images/slider1.jpg" /></li>
             <li><img src="images/slider2.jpg" /></li>
             <li><img src="images/slider3.jpg" /></li>
           </ul>
         </div>

         <div class="col-md-12 col-lg-12">
           <h2>Scope of Work</h2>
           <p>•	Demolition of existing foundations
              •	Retrofitting existing foundations to fit new equipment
              •	Reinforcing older building foundations
              •	Excavation and compaction
              •	Underground utilities
              •	Engineered form systems
              •	Rebar installation
              •	Complex reinforced cast-in-place foundations
              •	Precision anchor bolt and embed placement
              •	Reinforced slab-on-grade placement and finish
          </p>
         </div>
       </div>
    </div>

    <?php
      require_once 'includes/scripts.php';
      require_once 'includes/bxslider.php';
     ?>
  </body>
</html>
