<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome</title>


<style>

.body {

	background-color: lightblue;
	width:1000px;
	height: auto;
	margin: 0 auto;

}
	
.header {
	background-color: grey;
	width:1000px;
	height:90px;
	margin-bottom:20px;
	text-align:center;
	padding-top:10px; 
}

.menu {
	background-color: darkgrey;
	width:100px;
	height:400px;
	margin-right:10px;
	float: left;

}

.konten {

	background-color:skyblue;
	width:800px;
	height:auto;
	float:right;
	padding: 20px;
	margin:0 auto;

}

body {

	background-color:lightblue;
	color: #fff;
}
</style>

	
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<div class="body">
	<div class="header"><h1>BubbleTea Heaven</h1></div>
		<div class="menu"><ul type="circle">
			<li> <a href="<?php echo site_url('c_blog/index')?>">Article<br></a></li>
			</ul>


		</div>
	<div class="konten">
		<?php echo $this->load->view($halaman);?>
	</div>
</div>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>