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
      <h3>Dashboard</h3>
      <p>
          Selamat datang di halaman dashboard, <?php echo ucfirst($this->session->userdata('name')); ?>!
           Untuk logout dari sistem, silakan klik <?php echo anchor('login/logout','di sini...'); ?>
      </p>
	  
	  <p>
		Yuk Isi Hadiahnya <?php echo anchor('present','di sini');?>
	  </p>

          
          <div style="display:block">
          <!--<div style="display:none">-->
	<?php 
            if(@$data[0]['transmiting']==1){
            echo 'Kamu sudah Pairing </br>';
            echo 'cek hasil '. anchor('result','disini');
            } else {
            echo 'Yuk Pairing '.anchor('pairing','di sini');    
            }
        ?>
              </div>
	  
	  
 </body>
 </html>