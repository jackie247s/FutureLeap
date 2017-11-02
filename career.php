<?php

  require_once 'scripts/vendor/PHPMailer/class.phpmailer.php';

  if (isset($_POST) && isset($_FILES['cv'])) {
    $target_dir = "uploads/";
    $file = $_FILES['cv'];
    $filename = $file['name'];
    $filetempname = $file['tmp_name'];
    $target_file = $target_dir.basename($filename);

    $errors = array();


    if (move_uploaded_file($filetempname, $target_file)) {
      $email = new PHPMailer();

      $email->FromName = "FutureLeap Career";
      $email->Body = "CV sent by Potential Employee";
      $email->Subject   = 'FutureLeap Career';
      $email->AddAddress( 'enquiry@future-leap.com' );


      $email->AddAttachment( $target_file , $filename );

      if ($email->send()) {
        $success = true;
      }

    }
    else{
      $failure = true;
    }
  }

 ?>

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

          <?php
            if (isset($success)) {
              ?>
              <div id='career-form-success'>
                <p>Your CV has been successfully sent. Please wait for our response.</p>
              </div>
              <?php
            }
            elseif (isset($failure)) {
              ?>
              <div id="career-form-failure">
                <p>An error occurred. The file could not be uploaded</p>
              </div>
              <?php
            }
           ?>

           <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" method="POST" class="career-form form-horizontal">
             <div class="form-group">
               <label class="control-label col-md-5" for="email">Upload Your CV:</label>
               <div class="col-md-5">
                 <input id="cv" name="cv" type="file" class="" required>
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
     <script type="text/javascript">

     </script>
  </body>
</html>
