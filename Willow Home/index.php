<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/logo (1).png" />
        <title>Willow Thrift</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>Pre loved items♡</h1>
                       <p>sell through us(commission work)</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/beige.jpg" alt="Watch">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Clothes</p>
                                    <p>Clothes of Memory.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <center><img src="img/jewl.png" style="width: 250px; height: 250px;"  alt="Shirt"> </center>
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Jewelry</p>
                                   <p>Exquisite Sets.</p>
                               </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <center><img src="img/shoe.jpg" style="width: 250px; height: 250px;"  alt="Shirt"> </center>
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Shoes</p>
                                   <p>Our exquisite collection of shoes.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy Willow Thrift. All Rights Reserved. | Contact Us: +977 0000000000</p>
                   
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>