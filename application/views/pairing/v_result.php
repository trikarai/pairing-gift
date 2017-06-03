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
      <h2>Hasil Pairing</h2>
      
      <p>      Kamu mendapatkan pasangan : <b><?php echo $dataPartner[0]['name'] ?></b></p>
      
      <p>pilih salah satu hadiah untuk diberi :</p>
      
      <p>      hadiah 1 : <?php echo @$dataPartner[0]['clue1'] ?></p>
      <p>      hadiah 2 : <?php echo @$dataPartner[0]['clue2'] ?></p>
      <p>        hadiah 3 : <?php echo @$dataPartner[0]['clue3'] ?></p>
      
      <p>
     Kembali ke dashboard, Silakan klik <?php echo anchor(site_url().'dashboard','di sini..'); ?>
     </p>
 </body>
 </html>