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
         <div class="col-md-6 col-sm-12 col-xs-12">

           <h2>Contact Us</h2>
           <br>
           <form class="form-horizontal">
             <div class="form-group">
               <label class="control-label col-sm-3" for="email">Your Name:</label>
               <div class="col-sm-9">
                 <input type="text" class="form-control">
               </div>
             </div>

             <div class="form-group">
               <label class="control-label col-sm-3" for="pwd">Company:</label>
               <div class="col-sm-9">
                 <input type="text" class="form-control" >
               </div>
             </div>

             <div class="form-group">
               <label class="control-label col-sm-3" for="pwd">Designation:</label>
               <div class="col-sm-9">
                 <input type="text" class="form-control" >
               </div>
             </div>

             <div class="form-group">
               <label class="control-label col-sm-3" for="pwd">Address:</label>
               <div class="col-sm-9">
                 <input type="text" class="form-control" >
               </div>
             </div>

             <div class="form-group">
               <label class="control-label col-sm-3" for="pwd">Country:</label>
               <div class="col-sm-9">
                 <input type="text" class="form-control" >
               </div>
             </div>

             <div class="form-group">
               <label class="control-label col-sm-3" for="pwd">Phone:</label>
               <div class="col-sm-9">
                 <input type="text" class="form-control" >
               </div>
             </div>

             <div class="form-group">
               <label class="control-label col-sm-3" for="pwd">Email:</label>
               <div class="col-sm-9">
                 <input type="email" class="form-control" >
               </div>
             </div>

             <div class="form-group">
               <label class="control-label col-sm-3" for="pwd">Message:</label>
               <div class="col-sm-9">
                 <input type="text" class="form-control" >
               </div>
             </div>

             <div class="form-group">
               <div class="col-sm-offset-3 col-sm-9">
                 <button type="submit" class="btn btn-default">Submit</button>
               </div>
             </div>
            </form>

         </div>

         <div class="col-md-6 col-sm-12 col-xs-12">

         </div>

       </div>
    </div>

    <?php
      require_once 'includes/scripts.php';
     ?>
  </body>
</html>
