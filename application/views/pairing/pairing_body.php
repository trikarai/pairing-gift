<div class="row">
	<div class="col-md-12">
		<div class="alert alert-block alert-warning fade in">
			<h3>
				Selamat datang di halaman dashboard, <b><?php echo ucfirst($this->session->userdata('name')); ?>!</b>
			</h3>
		</div>
	</div>
</div>

<?php if(!isset($message)){ ?>
<form action="<?php echo base_url()."pairing"?>" method="post">	 
    <input type="hidden" name="id_user" value="<?php echo ($this->session->userdata('id_user')); ?>"></br>
     <p>
     <!--<input type="submit" name="btnSubmit" value="Click to Pairing" />-->
     <center><button type="submit" name="btnSubmit" class="btn purple"><i class="fa fa-arrow-circle-right"></i> Click to Pairing <i class="fa fa-arrow-circle-left"></i></button></center>
	 
	 </p>
</form>

<?php }else{
	
	echo "<center><h1>$message !!!</h1></center><br/>";
	
} ?>

<hr>
     <h4>
     Kembali ke dashboard, Silakan klik <?php echo anchor(site_url().'dashboard','di sini..'); ?>
     </h4>