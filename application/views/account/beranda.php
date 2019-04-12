<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8">
     <title>Beranda | Sound of Zeus</title>
     <link href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <style>
          body
          {
               background-image: url("<?php echo base_url('image/background/grey.jpg'); ?>");
          }
          .centered 
          {
               position: absolute;
               top: 50%;
               left: 50%;
               transform: translate(-50%, -50%);
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
               <li>
                    <div style = "padding-top: 14px">
                         <form action="<?php echo site_url()?>/search">
                              <input type="text" placeholder="Search.." name="search">
                              <button type="submit"><i class="fa fa-search"></i></button>
                         </form>
                    </div>
               </li>
          </ul>
     </nav> 
     <div class="container">
          <div class="row">
               <div class="col-sm-12">
                    <img src="<?php echo base_url('image/background/Join us.jpg'); ?>" width = "100%" height="400px"alt="Join Us"> 
                    <div class="centered">
                         <center><font color = "white" size="17px">Feel The Sound of Zeus</font></center>
                         <br>
                         <p align = "center"><font color = "white" size="5px">Discover, stream, and listen to a constantly expanding mix of music around the world</font></p>
                         <br>
                         <center><a href="<?php echo site_url()?>/register" type="button" class=" btn btn-warning btn-lg">Register For Free Now</a></center>
                    </div>   
               </div>
          </div>
          <div class="row">
               <div class="col-sm-12"> &nbsp</div>
          </div>
          <div class="row">
               <div class="col-sm-12"> 
                    <p align = "center"><font color = "white" size="5px">Hear Music From Various Artist and Label</font></p>
               </div>
          </div>
          <div class="row">
               <div class="col-sm-2">
                    <img src="<?php echo base_url('image/album/ncm.jpg'); ?>" width = "100%" height="100%"alt="Join Us">
                    <p align = "center"><font color = "white" size="2px">No CopyRight Music</font></p>        
               </div>
               <div class="col-sm-2">
                    <img src="<?php echo base_url('image/album/Vlogncm.png'); ?>" width = "100%" height="100%"alt="Join Us">
                    <p align = "center"><font color = "white" size="2px">Vlog No CopyRight Music</font></p>        
               </div>
               <div class="col-sm-2">
                    <img src="<?php echo base_url('image/album/rfm.jpg'); ?>" width = "100%" height="100%"alt="Join Us">
                    <p align = "center"><font color = "white" size="2px">rfm-ncs</font></p>        
               </div>
               <div class="col-sm-2">
                    <img src="<?php echo base_url('image/album/lagunas.jpg'); ?>" width = "100%" height="100%"alt="Join Us">
                    <p align = "center"><font color = "white" size="2px">Lagunas</font></p>         
               </div>
               <div class="col-sm-2">
                    <img src="<?php echo base_url('image/album/audiolib.jpg'); ?>" width = "100%" height="164px"alt="Join Us">
                    <p align = "center"><font color = "white" size="2px">Audio Library</font></p>        
               </div>
               <div class="col-sm-2">
                    <img src="<?php echo base_url('image/album/ncs.jpg'); ?>" width = "100%" height="164px"alt="Join Us">
                    <p align = "center"><font color = "white" size="2px">NCS</font></p>        
               </div>
          </div>
     </div>   
</body>
</html>