<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8"/>
<title><?php echo $this->config->item('site_title');?> - <?php echo $title; ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">

<?php $this->load->view($styles); ?> 

<link rel="shortcut icon" href="favicon.ico"/>
</head>

<body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed page-sidebar-closed-hide-logo">

<!-- BEGIN HEADER -->
<?php $this->load->view('includes/template_site_header'); ?> 
<!-- END HEADER -->

<div class="clearfix">
</div>

<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN CONTENT -->
	
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<?php $this->load->view($body); ?> 
		</div>
	</div>
	<!-- END CONTENT -->
	
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
</script>
</body>
</html>