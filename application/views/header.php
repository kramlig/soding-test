<!doctype html>
<html class="fixed sidebar-left-collapsed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Soding Task</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- Vendor CSS -->

        <script src="<?= base_url() ?>assets/vendor/jquery/jquery.js"></script>
		<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/select2/select2.css" />
		<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />
		<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />
		<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/pnotify/pnotify.custom.css" />
		<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css" />
		<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css" />
		<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/dropzone/css/basic.css" />
		<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/dropzone/css/dropzone.css" />
		<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css" />
		<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/summernote/summernote.css" />
		<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/summernote/summernote-bs3.css" />
		<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/codemirror/lib/codemirror.css" />
		<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/codemirror/theme/monokai.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?= base_url(); ?>assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?= base_url(); ?>assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?= base_url(); ?>assets/stylesheets/theme-custom.css">
    	<link rel="stylesheet" href="<?= base_url();?>css/plugins/jquery.alerts.css" type="text/css" />


		<!-- Head Libs -->
		<script src="<?= base_url(); ?>assets/vendor/modernizr/modernizr.js"></script>

		<script src="https://apis.google.com/js/client:platform.js?onload=onLoad" async defer></script>
		<meta name="google-signin-client_id" content="551984215559-al19hbtmgca1vv9slvop7rkvjvlrh5e7.apps.googleusercontent.com">
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<h2 class="logo">Soding Task</h2>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="<?= base_url() ?>assets/images/commissary15.png" alt="MGI User" class="img-circle fa-check-square-o" data-lock-picture="assets/images/commissary15.png" />
								<!-- <i class="fa fa-check-square-o"></i> -->
							</figure>
							<div class="profile-info" data-lock-name="MGI User" data-lock-email="MGI User">
								<span class="name">Mark Gil Dotillos</span>
								<span class="role">Web Developer</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href=""><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li>
										<?= anchor($this->uri->segment(1) , '<i class="fa fa-file" aria-hidden="true"></i>
											<span>Create Task</span>') ?>
									</li>	
									<li>
										<?= anchor($this->uri->segment(1).'/listAllTask', '<i class="fa fa-list" aria-hidden="true"></i>
											<span>List of All Task</span>') ?>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</aside>
				<!-- end: sidebar -->