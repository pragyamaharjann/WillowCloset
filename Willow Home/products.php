<?php include 'functions.php'; ?>
<?php
    session_start();
    // require 'functions.php';
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
            <div class="container">
                <div class="jumbotron">
                    <h1>Welcome to our Willow Thrift Store</h1>
                    <p>Sustainable and Affordable fashion just for YOU.</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <?php echo get_Product(); ?>
                </div>
            </div>
            <br><br><br><br><br><br><br><br>
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
