<div class="row margin-bottom-15">
	<div class="col-md-12">
		<div class="note note-danger">
			<div class="caption">
				<h5><i class="fa fa-bullhorn"></i>&nbsp;&nbsp;Baca dulu yuk grops rules nya, <?php echo anchor('rules','klik di sini');?></h5>
			</div>
		</div>
	</div>
</div>

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
			
			<div style="
                             <?php if($status==1){
                                 echo "display:none";
                             }else{
                                 echo "display:block";
                             }
                             ?> 
                             ">
                        <h4>Pairing belum dibuka </h4>
                        </div>
			
			<div style="
                             <?php if($status==0){
                                 echo "display:none";
                             }else{
                                 echo "display:block";
                             }
                             ?> 
                             ">
			<?php 
			if(@$data[0]['transmiting']==1){
				echo '<h4>Kamu sudah Pairing </br>';
				echo 'cek hasil &nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp; '. anchor('result','disini') . '</h4>';
			} else {
				echo '<h4>Yuk Pairing &nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp; '.anchor('pairing','di sini') .'</h4>';    
			}
			?>
			</div>
                         <hr>
                        <h4>Data Registrans</h4>
                        <div>
                            <table width="100%  ">
                                <tr>
                                    <td>No</td>
                                    <td>Name</td>
                                </tr>
                                
                                <?php if(@$registran):?>
                                <?php $i=1; ?>
                                <?php foreach ($registran as $row):?>
                                <tr>
                                    <td><?php echo $i;?></td>
                                    <td><?php echo $row['name']?></td>
                                </tr>
                        <?php $i++; ?>
                        <?php endforeach?>
                        <?php else:?>
                        <tr>
                            <td colspan="3" align="center">Data tidak ada</td>
                        </tr>
                    <?php endif; ?>
                    </table>
                                    
                                    
                        </div>
		</div>
	</div>
</div>