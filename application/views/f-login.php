<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Login</title>


<style>

  
.header {
  background-color: brown;
  width:100%;
  height:90px;
  margin-bottom:20px;
  text-align:center;
  float: center;
  padding-top:10px; 
}

.container {

  background-color:pink;
  width:90%;
  min-height:590px;
  padding:20px;
  float:center;
  border: 3px solid;
  color:white;
  margin:0 auto;
  

}

.konten {
  width:80%;
  min-height:50px;
  float:center;
  padding: 20px;
  margin-top:5px;
  margin-right:5px;
  margin-left: 10px;
}

</style>
</head>
<body>

<div class="container">

  <div class="header">
    <h1>Login</h1></div>
  <?php echo $this->session->flashdata('err') ?>
  <div id="body">
    <div class="konten">
    <form action="<?php echo site_url('controller/login') ?>"method="POST">
    <table align="center">
      <tr>
        <td><input type="text" name="username" placeholder="Username" required><br></td>
      </tr>
      <tr>
        <td><br><input type="password" name="password" placeholder="Password" required><br></td>
      </tr>
      <tr>
        <td>
        <br><br><input type="submit" name="login" value="Login" align="center">
        </td>
      </tr>
    </table>
    </form>
    </div>
  </div>
</div>
</body>
</html>
