<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>FutureLeap</title>
    <?php
      require_once 'includes/head-links.php';
     ?>
  </head>
  <body>

    <div class="page">
      <?php
        require_once 'includes/header.php';
       ?>

       <div class="contact-us">

         <div class="col-md-12">
           <img id="contact-us" src="images/contact.jpg" alt="">
         </div>

         <div class="col-md-6 col-sm-12 col-xs-12">

           <h2>Contact Us</h2>
           <br>
           <form class="form-horizontal">
             <div class="form-group">
               <label class="control-label col-sm-3" for="email">Name:</label>
               <div class="col-sm-9">
                 <input type="text" class="form-control">
               </div>
             </div>

             <div class="form-group">
               <label class="control-label col-sm-3" for="pwd">Email:</label>
               <div class="col-sm-9">
                 <input type="email" class="form-control" >
               </div>
             </div>

             <div class="form-group">
               <label class="control-label col-sm-3" for="pwd">Phone:</label>
               <div class="col-sm-9">
                 <input type="text" class="form-control" >
               </div>
             </div>

             <div class="form-group">
               <label class="control-label col-sm-3" for="pwd">Message:</label>
               <div class="col-sm-9">
                 <textarea class="form-control" rows="5" id="message"></textarea>
               </div>
             </div>

             <div class="form-group">
               <div class="col-sm-offset-6 col-sm-6 col-xs-offset-5 col-xs-7">
                 <button type="submit" class="btn btn-default">Submit</button>
               </div>
             </div>
            </form>

         </div>

         <div class="col-md-6 col-sm-12 col-xs-12 enquiry-right">
           <div class="" id="googleMap">

           </div>
           <p>601-56, Acico Business Park building, Behind Nissan Showroom, Deira City Center, Dubai</p>
         </div>

       </div>

       <div class="clearfix">

       </div>

       <?php
        require_once 'includes/footer.php';
        ?>
    </div>

    <?php
      require_once 'includes/scripts.php';
     ?>

     <!-- Google Maps Script -->
     <script type="text/javascript">
       function myMap(){
        var mapProp= {
        center:new google.maps.LatLng(25.2519659,55.3328027),
        zoom:16,
        };

        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
       }
     </script>
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5hpLymL6YSJ3vdXpqlLFAnTvRvxsN4cc&callback=myMap" charset="utf-8"></script>

     <!-- Form Handling Script -->
     <script type="text/javascript">

     </script>
  </body>
</html>
