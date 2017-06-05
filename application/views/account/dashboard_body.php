<div class="row">
	<div class="col-md-12">
		<div class="alert alert-block alert-warning fade in">
			<h3>
				Selamat datang di halaman dashboard, <b><?php echo ucfirst($this->session->userdata('name')); ?>!</b>
			</h3>
			
			<hr/>
			
			<h4>Yuk Isi Hadiahnya &nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;
				<?php echo anchor('present','di sini');?>
			</h4>
			
			<hr>
			<h4>Pairing belum dibuka</h4>
			<div style="display:block">
			<?php 
			if(@$data[0]['transmiting']==1){
				echo '<h4>Kamu sudah Pairing </br>';
				echo 'cek hasil &nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp; '. anchor('result','disini') . '</h4>';
			} else {
				echo '<h4>Yuk Pairing &nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp; '.anchor('pairing','di sini') .'</h4>';    
			}
			?>
			</div>
		</div>
	</div>
</div>