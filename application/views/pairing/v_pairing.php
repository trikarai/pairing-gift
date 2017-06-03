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
      <h2>Pairing</h2>
<form action="<?php echo base_url()."pairing"?>" method="post">	 
    <input type="hidden" name="id_user" value="<?php echo ($this->session->userdata('id_user')); ?>"></br>
     <p>
     <input type="submit" name="btnSubmit" value="Click to Pairing" />
     </p>
 
</form> 
     <p>
     Kembali ke dashboard, Silakan klik <?php echo anchor(site_url().'dashboard','di sini..'); ?>
     </p>
 </body>
 </html>