<div class="content">
	<?php echo form_open('register');?>
	<h3 class="form-title">Pendaftaran Akun</h3>
	<div class="form-group">
		<label class="control-label visible-ie8 visible-ie9">Full Name</label>
		<div class="input-icon">
			<i class="fa fa-font"></i>
			<input class="form-control placeholder-no-fix" type="text" placeholder="Nama ...." name="name" value="<?php echo set_value('name'); ?>"/>
		</div>
		<?php echo form_error('name'); ?>
	</div>
	<div class="form-group">
		<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
		<label class="control-label visible-ie8 visible-ie9">Email</label>
		<div class="input-icon">
			<i class="fa fa-user margin-top-15"></i>
			<input class="form-control input-lg placeholder-no-fix" type="text" autocomplete="off" placeholder="Email ..." name="email" value="<?php echo set_value('email'); ?>"/>
		</div>
		<?php echo form_error('email'); ?>
	</div>
	<div class="form-group">
		<label class="control-label visible-ie8 visible-ie9">Password</label>
		<div class="input-icon">
			<i class="fa fa-lock margin-top-15"></i>
			<input class="form-control input-lg placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" value="<?php echo set_value('password'); ?>"/>
		</div>
		<?php echo form_error('password'); ?>
	</div>
	<div class="form-group">
		<label class="control-label visible-ie8 visible-ie9">Password Confirm</label>
		<div class="input-icon">
			<i class="fa fa-check margin-top-15"></i>
			<input class="form-control input-lg placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="password_conf" value="<?php echo set_value('password_conf'); ?>"/>
		</div>
		<?php echo form_error('password_conf'); ?>
	</div>
	<div class="form-actions">
		&nbsp;
		<button type="submit" class="btn blue pull-right">
		Daftar <i class="m-icon-swapright m-icon-white"></i>
		</button>
	</div>
	<div class="login-options margin-top-15">
		<p>
		Kembali ke beranda, <br/>Silakan klik <?php echo anchor(site_url().'beranda','di sini..'); ?>
		</p>
	</div>
	<?php echo form_close();?>
</div>