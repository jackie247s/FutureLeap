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

      <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
        <div class="slider">
          <ul class="bxslider">
            <li><img src="images/slider1new.jpg" /></li>
            <li><img src="images/slider2new.jpg" /></li>
            <li><img src="images/slider3new.jpg" /></li>
          </ul>
        </div>
      </div>

      <div class="page-center row">

        <div class="col-md-8 col-sm-12 col-xs-12">
          <div class="welcome col-md-12 col-sm-12 col-xs-12">
            <h2>Welcome to the FutureLeap Group</h2>
            <p>We at Future Leap believe in soaring above whatever challenges we face. We believe in consistent learning - coming up with sound strategies and executing them to persevere in what we do best. Our immediate objective is to establish a broad and firm foundation of clientele and provide high-caliber solutions for our clients. We are a team of specialists who provide innovative and cost-effective solutions by using cutting-edge technology. In a nutshell, affordability, timely delivery and nothing less than excellence describes what Future Leap stands for. </p>
          </div>

          <div class="col-md-6 col-sm-12 col-xs-12 panel">
            <div class="panel-header">
              <h2>VISION &amp; MISSION</h2>
            </div>
            <div class="panel-body">
              <p>Our mission is to provide general contracting services to our clients and in the process, distinguish us from others based on the needed time, budget and quality, in order surpass customer expectations. We value the importance of building relationships on trust and empowerment and remain true to our word and the excellence we promise. We also aim at achieving the best quality, while at the same time, respecting health and environmental standards.</p>
            </div>
          </div>

          <div class="col-md-6 col-sm-12 col-xs-12 panel">
            <div class="panel-header">
              <h2>MEDIA CENTER</h2>
            </div>
            <div class="panel-body">
              <p>At Future Leap, we use Enterprise resource planning (ERP) for managing our organization business and back office functions related to technology, services and human resources. It includes the Accounting, Job costing, Fixed Assets, Inventory / Procurement Management, as well as Payroll and Personal Systems. ERP System help us profitably grow our business and improve competitiveness.</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 news-events">
          <h2>NEWS &amp; EVENTS</h2>
        </div>
      </div>

      <!-- <div class="our-clients row">
        <div class="container-fluid">
          <div class="clients-left col-md-2">
            <p>OUR CLIENTS</p>
          </div>

          <div class="clients-right col-md-10">
            <p>Dubai | Karachi | Abu Dhabi</p>
          </div>
        </div>
      </div> -->

      <!-- <div class="projects">
        <div class="project-header">
          <h2>LATEST PROJECTS</h2>
        </div>

      </div> -->

      <?php
        require_once 'includes/footer.php';
       ?>

    </div>

    <?php
      require_once 'includes/scripts.php';
     ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('.bxslider').bxSlider();
      });
    </script>
  </body>
</html>
