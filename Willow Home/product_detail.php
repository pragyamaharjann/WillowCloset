<?php
    session_start();
    require 'connection.php';
    include 'functions.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }else{
        $user_id=$_SESSION['id'];
        $id = htmlspecialchars($_GET['id']);
        $detail_query="select * from products where id=$id";
        $result_query=mysqli_query($con,$detail_query) or die(mysqli_error($con)); 
        $result = mysqli_fetch_assoc($result_query);
    }
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
            <br>
            <center>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                            
                                <div class="thumbnail">
                                <img src="img/Beige.jpg" style="width: 600px; height: 700px;" alt="Cannon">
                                
                                    <div class="caption">
                                        <h3><?php echo $result['product_name'] ?></h3>
                                        <h3><?php echo $result['description'] ?></h3>
                                        <p><?php echo $result['price'] ?></p>
                                        <?php 
                                            $added_to_cart = check_if_added_to_cart($result['id']);
                                            if($added_to_cart) {
                                        ?> <a href="#" class="btn btn-block btn-success disabled">Added to cart</a>
                                        <?php
                                            } else {
                                        ?> <a href="cart_add.php?id=<?php echo $result['id'] ?>" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary" style="width: 200px; height: auto;">Add to cart</a>
                                        <?php 
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            </center>
            <footer class="footer">
               <div class="container">
               <center>
                   <p>Copyright &copy Willow Thrift. All Rights Reserved. | Contact Us: +977 9000000000</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
