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
     <div class="wrap">
          <<font color="white"><h1>Search Result</h1></font>
          <table  width="780px">
               <tbody>
                    <?php
                    if (count($ListSearch) > 0) {
                         foreach($ListSearch as $row)
                         {
                              echo "<div class=\"letter\">";
                              $img = $row['image'];
                              ?>

                              <tr>
                                   <td valign="top"><font color="white"><?php echo $row['title']; ?></font></td>
                                   <td valign="top"><font color="white"><img src="<?php echo base_url($img); ?>" height="100px" alt="Sound of Zeus"></font></td>
                                   <td valign="top"><font color="white"><?php echo $row['singer']; ?></font></td>
                              </tr>
                    <?php
                              echo "</div>";
                         }
                         echo "<tr><td colspan='6'><div style='background:000; float:right;'>".$this->pagination->create_links()."</div></td></tr>";
                    } else {
                         echo "<tbody><tr><td colspan='8' style='padding:10px; background:#F00; border:none; color:#FFF;'>Hasil pencarian tidak ditemukan.</td></tr></tbody>";
                    }
                    ?>
               </tbody>
          </table>
          </form>
     </div>   
</body>
</html>