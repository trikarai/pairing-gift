<div class="content">
	<?php echo form_open('login');?>
		<h3 class="form-title">Silahkan login...</h3>
		<?php
		// Cetak jika ada notifikasi
		if($this->session->flashdata('sukses')) {
           echo '<div class="alert alert-danger display-hide" style="display: block;">
					<button class="close" data-close="alert"></button>
					<span>
					'. $this->session->flashdata('sukses') .'. </span>
				</div>';
		   
		   // echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
		}
		?>
	<div class="form-group">
		<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
		<label class="control-label visible-ie8 visible-ie9">Email</label>
		<div class="input-icon">
			<i class="fa fa-user margin-top-15"></i>
			<input class="form-control input-lg placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" value="<?php echo set_value('username'); ?>"/>
		</div>
		<?php echo form_error('username'); ?>
	</div>
	<div class="form-group">
		<label class="control-label visible-ie8 visible-ie9">Password</label>
		<div class="input-icon">
			<i class="fa fa-lock margin-top-15"></i>
			<input class="form-control input-lg placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" value="<?php echo set_value('password'); ?>"/>
		</div>
		<?php echo form_error('password'); ?>
	</div>
	<div class="form-actions">
		&nbsp;
		<button type="submit" class="btn green-haze pull-right">
		Login <i class="m-icon-swapright m-icon-white"></i>
		</button>
	</div>
	<div class="login-options margin-top-15">
		<p>
		Kembali ke beranda, <br/>Silakan klik <?php echo anchor(site_url().'beranda','di sini..'); ?>
		</p>
	</div>
	<?php echo form_close();?>
</div>