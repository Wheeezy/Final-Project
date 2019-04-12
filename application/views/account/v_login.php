<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html> 
<html> 
<head>
   	<meta charset="UTF-8">
    <link href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
   	<title>Login | Sound of Zeus </title>
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
               <li><a href="<?php echo site_url()?>/beranda">Home</a></li>
               <li><a href="<?php echo site_url()?>/login">Login</a></li>
               <li><a href="<?php echo site_url()?>/register">Register</a></li>
          </ul>
     </nav> 

	<?php
	// Cetak jika ada notifikasi
	if($this->session->flashdata('sukses')) {
	echo '<center><font color = "white"><p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p></font></center>';
	}
	?>

	<?php echo form_open('login');?>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<form>
					<table class="table table-dark">
						<caption><center><font color="white">LOGIN:</font></center></caption>
						<tr>
							<div class="form-group">
								<td>
									<font color="white"><label for="username">Username:</label></font>
								</td>
								<td>
									<input type="text" name="username" value="<?php echo set_value('username'); ?>"/>
									<font color="red"> <?php echo form_error('username'); ?> </font>
								</td>
							</div>
						</tr>
						<tr>
							<div class="form-group">
								<td>
									<font color="white"><label for="password" >Password:</label></font>
								</td>
								<td>
									<input type="password" name="password" value="<?php echo set_value('password'); ?>"/>
									<font color="red"> <?php echo form_error('password'); ?> </font>
								</td>
							</div>
						</tr>
						<p>
						<tr>
							<td></td>
							<td>
								<input class="btn btn-warning" type="submit" name="btnSubmit" value="Login" />
							</td>
						</tr>
					</table>
				</form>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
	<?php echo form_close();?>
 </body>
 </html>