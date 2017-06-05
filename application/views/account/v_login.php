<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!--<!DOCTYPE html>  
 <head>
   <meta charset="UTF-8">
   <title>
     Halaman Login
   </title>
 </head>
 <body>
      <h2>Halaman Login</h2>
      <?php
   // Cetak jika ada notifikasi
      if($this->session->flashdata('sukses')) {
           echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
      }
      ?>
 
      <?php echo form_open('login');?>
      <p>Email:</p>
      <p>
           <input type="text" name="username" value="<?php echo set_value('username'); ?>"/>
      </p>
      <p> <?php echo form_error('username'); ?> </p>
 
      <p>Password:</p>
      <p>
           <input type="password" name="password" value="<?php echo set_value('password'); ?>"/>
      </p>
      <p> <?php echo form_error('password'); ?> </p>
 
      <p>
           <input type="submit" name="btnSubmit" value="Login" />
      </p>
 
      <?php echo form_close();?>
 
      <p>
           Kembali ke beranda, Silakan klik <?php echo anchor(site_url().'beranda','di sini..'); ?>
      </p>
 </body>
 </html>-->

<!DOCTYPE html>
<head>
<meta charset="utf-8"/>
<title><?php echo $this->config->item('site_title');?> - <?php echo $title; ?></title><meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="Copyright 2015 © Nagabendu Teknologi Utama" name="copyright"/>
<meta content="" name="description"/>
<meta content="Nagabendu Teknologi Utama" name="author"/>

<?php $this->load->view('includes/styles_login'); ?> 

</head>

<body class="login">

<div class="logo">
	<!--<a href="index.html">
	<img src="../../assets/admin/layout2/img/logo-big.png" alt=""/>
	</a>-->
</div>

<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->

<?php $this->load->view($body); ?> 


<!-- Scripts -->  
<?php $this->load->view('includes/scripts_login'); ?> 

</body>
</html>