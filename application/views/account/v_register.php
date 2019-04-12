<?php defined('BASEPATH') OR exit('No direct script access allowed');?><!DOCTYPE html>  
<html>
<head>
     <meta charset="UTF-8">
     <link href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
     <title>Register | Sound of Zeus</title>
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
     <?php echo form_open('register');?>
     <div class="container">
          <div class="row">
               <div class="col-sm-4"></div>
               <div class="col-sm-4">
                    <form>
                         <table class="table table-dark">
                              <caption><center><font color="white">REGISTER:</font></center></caption>
                              <tr>
                                   <div class="form-group">
                                        <td>
                                             <font color="white"><label for="name">Nama:</label></font>
                                        </td>
                                        <td>
                                             <input type="text" name="name" value="<?php echo set_value('name'); ?>"/>
                                             <font color="red"> <?php echo form_error('name'); ?> </font>>
                                        </td>
                                        
                                   </div>
                              </tr>
                              <tr>
                                   <div class="form-group">
                                        <td>
                                             <font color="white"><label for="username">Username:</label></font>
                                        </td>
                                        <td>
                                             <input type="text" name="username" value="<?php echo set_value('username'); ?>"/>
                                             <font color="red"> <?php echo form_error('username'); ?> </font>>
                                        </td> 
                                        
                                   </div>
                              </tr>
                              <tr>
                                   <div class="form-group">
                                        <td>
                                             <font color="white"><label for="email">Email:</label></font>
                                        </td>
                                        <td>
                                             <input type="text" name="email" value="<?php echo set_value('email'); ?>"/>
                                             <font color="red"> <?php echo form_error('email'); ?> </font>>
                                        </td>
                                        
                                   </div>
                              </tr>
                              <tr>
                                   <div class="form-group">
                                        <td>                          
                                             <font color="white"><label for="email">Password:</label></font>
                                        </td>
                                        <td>
                                             <input type="password" name="password" value="<?php echo set_value('password'); ?>"/>
                                             <font color="red"> <?php echo form_error('password'); ?> </font>>
                                        </td>
                                        
                                   </div>
                              </tr>
                              <tr>
                                   <div class="form-group">
                                        <td>
                                             <font color="white"><label for="password_conf">Password Confirmation:</label></font>
                                        </td>
                                        <td>
                                             <input type="password" name="password_conf" value="<?php echo set_value('password_conf'); ?>"/>
                                             <font color="red"> <?php echo form_error('password_conf'); ?> </font>>
                                        </td>
                                        
                                   </div>
                              </tr>
                              <tr>
                                   <div class="form-group">
                                        <td></td>
                                        <td>
                                             <input type="submit" name="btnSubmit" value="Daftar" />
                                        </td>
                                   </div>
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