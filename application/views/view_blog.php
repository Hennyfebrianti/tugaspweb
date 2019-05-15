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
			<li><a href="<?php echo site_url('controller/depan')?>">Home<br></a></li>
			<li class="active"><a href="<?php echo site_url('controller/utama')?>">Article<br></a></li>
			<li><a href="<?php echo site_url('controller/logout')?>">Logout<br></a></li>
			</ul>
		</div>
		<div class="konten">
			<h2><center>Article</center></h2>
			<hr>
		<table border="1">
			<a href="<?php echo site_url('controller/form_input')?>">Add New Post</a><br>
			<tr>
				<th>Title</th>
				<th>Content</th>
				<th> Date </th>
				<th> Option </th>
			</tr>
				<?php foreach($hasil as $r) {?>
			<tr> 
				<td><?php echo $r['title']?></td>
				<td><?php echo substr($r["isi"], 0,200)?></td>
				<td><?php echo $r['waktu']?></td>
				<td>
					<a href="<?php echo site_url('controller/form_edit/'.$r['id_post'])?>">Edit</a>||<a href="<?php echo site_url('controller/delete/'.$r['id_post'])?>" onclick="return confirm('Are you sure deleting this post ?')">Delete</a>
				</td>
			</tr>
				<?php
					}
				?>
			</table>
		</div>
	</div>
</div>

</body>
</html>