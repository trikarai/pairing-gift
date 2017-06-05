<script src="<?php echo $this->config->item('plugins_dir');?>jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $this->config->item('plugins_dir');?>jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo $this->config->item('plugins_dir');?>jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="<?php echo $this->config->item('plugins_dir');?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $this->config->item('plugins_dir');?>bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo $this->config->item('plugins_dir');?>jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo $this->config->item('plugins_dir');?>jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo $this->config->item('plugins_dir');?>jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo $this->config->item('plugins_dir');?>uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo $this->config->item('plugins_dir');?>bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<script src="<?php echo $this->config->item('assets_dir');?>global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo $this->config->item('assets_dir');?>admin/layout2/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo $this->config->item('assets_dir');?>admin/layout2/scripts/demo.js" type="text/javascript"></script>
<script>
jQuery(document).ready(function() {    
	Metronic.init(); // init metronic core components
	Layout.init(); // init current layout
	Demo.init(); // init demo features
});
</script>
<!-- END JAVASCRIPTS -->


<script src="<?php echo $this->config->item('plugins_dir');?>jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $this->config->item('plugins_dir');?>jquery-migrate.min.js" type="text/javascript"></script>
<script src="<?php echo $this->config->item('plugins_dir');?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $this->config->item('plugins_dir');?>jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo $this->config->item('plugins_dir');?>uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo $this->config->item('plugins_dir');?>jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $this->config->item('plugins_dir');?>select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo $this->config->item('assets_dir');?>global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo $this->config->item('assets_dir');?>admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo $this->config->item('assets_dir');?>admin/pages/scripts/login.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
  Metronic.init(); // init metronic core components
  Layout.init(); // init current layout
  Login.init();
});
</script>
<!-- END JAVASCRIPTS -->