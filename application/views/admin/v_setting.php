<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>  
 <head>
   <meta charset="UTF-8">
   <title>
     Dashboard 
   </title>
 </head>
 <body>
      <h2>Setting</h2>
<form action="<?php echo base_url()."beranda/admin"?>" method="post">	 
    
    
    <p>Buka Pairing</p>
    
    Status : <?php 
    
    if($data[0]['status']==0){
        echo "Close";
    }else{
        echo "Open";
    }
        
    ?>
    
    <br>
    
    <select name="status">
        <option value="1">Open</option>
        <option value="0">Close</option>
    </select>
    
    <p>
     <input type="submit" name="btnSubmit" value="Submit" />
     </p>
 
</form> 
     <p>
     Kembali ke dashboard, Silakan klik <?php echo anchor(site_url().'dashboard','di sini..'); ?>
     </p>
 </body>
 </html>