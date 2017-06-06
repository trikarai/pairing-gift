<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>  
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
   <title>
     Setting 
   </title>
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 </head>
 <body>
     <div class="jumbotron text-center">
        <h1>Setting Page</h1>
        <p>to open and close pairing system</p> 
        </div>
     <div class="container-fluid">
      
     
     <div class="row">
         <div class="col-xs-6">
     
        <div class="well well-sm">Status : <?php 
        if($data==0){
                echo "Close";
            }else{
                echo "Open";
            }?>
        </div>

     <form action="<?php echo base_url()."beranda/admin"?>" method="post">	 
    <div class="form-group">
        <select name="status" class="form-control">
        <option value="1">Open</option>
        <option value="0">Close</option>
    </select>
    </div>
    <p>
     <input type="submit" name="btnSubmit" value="Submit" class="btn btn-default" />
     </p>
 
</form> 
         </div>
         </div>
     <p>
     Kembali ke dashboard, Silakan klik <?php echo anchor(site_url().'dashboard','di sini..'); ?>
     </p>
     
     </div>
 </body>
 </html>