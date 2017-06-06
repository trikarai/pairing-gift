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

<div class="row">
	<div class="col-md-12">
		<form action="<?php echo base_url()."present"?>" method="post">	 
    <input type="hidden" name="id_user" value="<?php echo ($this->session->userdata('id_user')); ?>"></br>
 
     <p>Hadiah 1:</p>
     <p>
     <input type="text" class="form-control input-lg" placeholder="Hadiah 1" name="clue1" value="<?php echo @$dataPresent[0]['clue1']; ?>"/>
     </p>
     <span class="red"> <?php echo form_error('clue1'); ?> </span>
 
     <p>Hadiah 2:</p>
     <p>
     <input type="text" class="form-control input-lg" placeholder="Hadiah 2" name="clue2" value="<?php echo @$dataPresent[0]['clue2']; ?>"/>
     </p>
     <span class="red"> <?php echo form_error('clue2'); ?> </span>
 
     <p>Hadiah 3:</p>
     <p>
     <input type="text" class="form-control input-lg" placeholder="Hadiah 3" name="clue3" value="<?php echo @$dataPresent[0]['clue3']; ?>"/>
     </p>
     <span class="red"> <?php echo form_error('clue3'); ?> </span>
 
 <p>Term and Conditions:</p>
 <p>Setuju membayar kelebihan jika barang melebihi batas harga yang ditentukan panitia? <?php echo anchor('rules','Rules');?> </p>
    <p>
        <?php 
        if($dataPresent[0]['code']=='Setuju'){
            echo '<input type="radio" name="code" value="Setuju" checked/> Setuju<br>';
            echo '<input type="radio" name="code" value="Tidak Setuju"/>Tidak Setuju<br>';
        }else{
            echo '<input type="radio" name="code" value="Setuju" /> Setuju<br>';
            echo '<input type="radio" name="code" value="Tidak Setuju" checked/>Tidak Setuju<br>';
        }
        
        ?>
     </p>
     <span class="red"> <?php echo form_error('code'); ?> </span>
 
     <p>
		<button type="submit" class="btn blue">Submit</button>
     </p>
 
<?php }else{
	
	echo "<center><h1>$message !!!</h1></center><br/>";
	
} ?>
 
</form> 
	<hr>
     <h4>
     Kembali ke dashboard, Silakan klik <?php echo anchor(site_url().'dashboard','di sini..'); ?>
     </h4>
	</div>
</div>