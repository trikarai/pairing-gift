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
      <h2>Pendaftaran Hadiah</h2>
	  
	
<form action="<?php echo base_url()."present"?>" method="post">	 
    <input type="hidden" name="id_user" value="<?php echo ($this->session->userdata('id_user')); ?>"></br>
 
     <p>Hadiah 1:</p>
     <p>
     <input type="text" name="clue1" value="<?php echo @$dataPresent[0]['clue1']; ?>"/>
     </p>
     <p> <?php echo form_error('clue1'); ?> </p>
 
     <p>Hadiah 2:</p>
     <p>
     <input type="text" name="clue2" value="<?php echo @$dataPresent[0]['clue2']; ?>"/>
     </p>
     <p> <?php echo form_error('clue2'); ?> </p>
 
     <p>Hadiah 3:</p>
     <p>
     <input type="text" name="clue3" value="<?php echo @$dataPresent[0]['clue3'];; ?>"/>
     </p>
     <p> <?php echo form_error('clue3'); ?> </p>
 
 <p>Term and Conditions:</p>
    <p>
     <input type="checkbox" name="accept" value="1"/>Saya Setuju untuk membayar kelebihan harga jika lebih dari harga yang ditetapkan panitia<br>
     </p>
     <p> <?php echo form_error('accept'); ?> </p>
 
     <p>
     <input type="submit" name="btnSubmit" value="Submit" />
     </p>
 
</form> 
     <p>
     Kembali ke dashboard, Silakan klik <?php echo anchor(site_url().'dashboard','di sini..'); ?>
     </p>
	  
 </body>
 </html>