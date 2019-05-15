<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>New Post</title>
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
			<h2><center>Edit Post</center></h2>
			<hr>
			<div id="body">
				<?php if($dataEdit) {
					$id = $dataEdit->id_post;
					$title = $dataEdit->title;
					$isi = $dataEdit->isi;
					}else{
					$title = "";
					$isi = "";
					}
				?>
			<form action="<?php echo site_url('controller/update/'.$id) ?>"method="POST">
				<tr>
					<td><b>Title Post</b><td><br>
					<td><input type="text" name="title" cols="90" value="<?php echo $title ?>" ><br><br></td>
				</tr>
				<tr>
					<td><b>Content</b><td>
					<td><br><textarea name="isi" rows="10" cols="90"><?php echo $isi?></textarea></td>
				</tr>
				<tr>
					<br><br><input type="submit" name="save" value="Save"> 
					<a href="<?php echo site_url('controller/index')?>">Back</a>
				</tr>
				
			</form>
	    </div>
	</div>
</div>

</body>
</html>