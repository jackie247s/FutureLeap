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


       <div class="career">
         <img id="career" src="images/career.jpg" alt="">

           <form class="career-form form-horizontal">
             <div class="form-group">
               <label class="control-label col-md-5" for="email">Upload Your CV:</label>
               <div class="col-md-5">
                 <input id="cv" type="file" class="" required>
               </div>
             </div>

             <div class="form-group">
               <div class="col-md-offset-5">
                 <button type="submit" class="btn btn-default">Submit</button>
               </div>
             </div>
           </form>
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
  </body>
</html>
