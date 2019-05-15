<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Halaman Admin</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/styles.css') ?>">
</head>
<body>

<div id="container">
	<div class="body">
		<div class="header"><h1>Blog</h1></div>
		<div class="menu">
		<ul type="square">
			<li class="active"><a href="<?php echo site_url('controller/depan')?>">Home<br></a></li>
			<li><a href="<?php echo site_url('controller/utama')?>">Article<br></a></li>
			<li><a href="<?php echo site_url('controller/logout')?>">Logout<br></a></li>
		</ul>
		</div>
			<div class="konten">
			<h2><center>Home</center></h2>
			<hr>
			<table border="1">
				<h1>Selamat Datang <?php echo $this->session->userdata('loger') ?></h1>
			</table>
			</div>
		</div>
	</div>
</div>
</body>
</html>