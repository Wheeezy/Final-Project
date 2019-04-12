<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>  
<html>
<head>
   	<meta charset="UTF-8">
    <link href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
   	<title>Notifikasi | Sound of Zeus </title>
   	<style>
          body
          {
               background-image: url("<?php echo base_url('image/background/grey.jpg'); ?>");
          }
     </style>
</head>
<body>
	<nav class="navbar navbar-inverse">
          <ul>
          <img src="<?php echo base_url('image/logo/sound of zeus.png'); ?>" height="100px" alt="Sound of Zeus">
          </ul>
          <ul class=" nav navbar-nav">
               <li><a href="#">Home</a></li>
               <li><a href="<?php echo site_url()?>/login">Login</a></li>
               <li><a href="<?php echo site_url()?>/register">Register</a></li>
          </ul>
     </nav>
   <center><font color = "white"><h1><?php echo $message; ?></h1></font></center>
   <br>
   <center><font color = "white" size="17px"><?php echo anchor('beranda','Back to Home'); ?></font></center>
</body>
</html>