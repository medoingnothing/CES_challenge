<!DOCTYPE HTML>
<!--
	Ethereal by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Home</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo base_url('inc/assets/css/main.css'); ?>" />
		<noscript><link rel="stylesheet" href="<?php echo base_url('inc/assets/css/noscript.css'); ?>" /></noscript>
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Wrapper -->
					<div id="wrapper">

						<!-- Panel (Banner) -->
							<section class="panel banner right">
								<div class="content color0 span-3-75">
									<h1 class="major">Hello, <?php echo $this->session->userdata('name');?><br />
									</h1>
				
									<ul class="actions">
										<li><a href="#first" class="button special color1 circle icon fa-angle-right">Next</a></li>
									</ul>
								</div>
								<div class="image filtered span-1-75" data-position="25% 25%">
									<img src="<?php echo base_url('inc/images/pic01.jpg'); ?>" alt="" />
								</div>
							</section>

						<!-- Panel (Spotlight) -->
							<section class="panel spotlight medium right" id="first">
								<div class="content span-7">
									<h2 class="major">Your birthday is <?php echo nice_date($this->session->userdata('dob'), 'F j, o');?></h2>
								</div>
								<div class="image filtered tinted" data-position="top left">
									<img src="<?php echo base_url('inc/images/pic02.jpg');?>" alt="" />
								</div>
							</section>

						<!-- Panel -->
							<section class="panel color1">
								<div class="intro joined">
									<h2 class="major">Your favorite color is <?php echo $this->session->userdata('fav_color');?></h2>
								</div>
								<div class="inner">
									<ul class="grid-icons three connected">
										<li><span class="icon fa-diamond"><span class="label">Lorem</span></span></li>
										<li><span class="icon fa-camera-retro"><span class="label">Ipsum</span></span></li>
										<li><span class="icon fa-cog"><span class="label">Dolor</span></span></li>
										<li><span class="icon fa-paper-plane"><span class="label">Sit</span></span></li>
										<li><span class="icon fa-bar-chart"><span class="label">Amet</span></span></li>
										<li><span class="icon fa-code"><span class="label">Nullam</span></span></li>
									</ul>
								</div>
							</section>
						<!-- Copyright -->
							<div class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</div>

					</div>

			</div>

		<!-- Scripts -->
			<script src="<?php echo base_url('inc/assets/js/jquery.min.js');?>"></script>
			<script src="<?php echo base_url('inc/assets/js/skel.min.js');?>"></script>
			<script src="<?php echo base_url('inc/assets/js/main.js');?>"></script>

	</body>
</html>