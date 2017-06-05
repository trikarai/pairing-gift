<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>
 <!--<html>
 <head>
     <meta charset="UTF-8">
     <title>
         
     </title>
 </head>
 <body>
     <h1>Selamat Datang di Situs Gropela.</h1>
     <p>  
     Silakan klik link
     <?php echo anchor('login','Masuk'); ?>
     untuk masuk ke dalam sistem atau
     <?php echo anchor('register','Daftar'); ?>
     untuk mendaftar.
     </p>      
 </body>
 </html>-->
 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title><?php echo $this->config->item('site_title');?> - <?php echo $title; ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>

<?php $this->load->view('includes/styles_beranda'); ?> 

</head>
<!-- END HEAD -->

<body class="page-404-3">

<?php $this->load->view($body); ?>

<!-- Scripts -->  
<?php $this->load->view('includes/scripts_beranda'); ?> 

</body>
<!-- END BODY -->
</html>