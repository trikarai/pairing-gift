<div class="row">
	<div class="col-md-12">
		<div class="alert alert-block alert-warning fade in">
			<h3>
				Selamat datang di halaman dashboard, <b><?php echo ucfirst($this->session->userdata('name')); ?>!</b>
			</h3>
		</div>
	</div>
</div>


<h4>      Kamu mendapatkan pasangan : <b><?php echo $dataPartner[0]['name'] ?></b></h4>
      
      <p>pilih salah satu hadiah untuk diberi :</p>
      
      <p>      hadiah 1 : <?php echo $dataPartner[0]['clue1'] ?></p>
      <p>      hadiah 2 : <?php echo $dataPartner[0]['clue2'] ?></p>
      <p>      hadiah 3 : <?php echo $dataPartner[0]['clue3'] ?></p>
      
      Partner anda <b><?php echo $dataPartner[0]['code'] ?></b> membayar kelebihan jika barang melebihi batas harga yang ditentukan panitia.

<hr>
     <h4>
     Kembali ke dashboard, Silakan klik <?php echo anchor(site_url().'dashboard','di sini..'); ?>
     </h4>