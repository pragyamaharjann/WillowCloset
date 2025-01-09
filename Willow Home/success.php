<?php
    session_start();
    require 'connection.php';
    include 'functions.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }else{
        $user_id = htmlspecialchars($_GET['id']);
        $amount = htmlspecialchars($_GET['amount']);
        $tax_amount=($amount*10)/100;
        $total_amount=$amount+$tax_amount;
        $transaction_uuid = generateTransactionUUID();
        $signature = generatePaymentSignature($total_amount, $transaction_uuid, $user_id);
        $confirm_query="update users_products set status='Confirmed' where user_id=$user_id";
        $confirm_query_result=mysqli_query($con,$confirm_query) or die(mysqli_error($con)); 
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
        <script type="text/javascript">
            window.onload = function() {
                document.getElementById("autoSubmitForm").submit();
            }
        </script>
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br>
            <!-- <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body"> -->
                            
                            <form id="autoSubmitForm" action="https://rc-epay.esewa.com.np/api/epay/main/v2/form" method="POST">
                                <input type="hidden" id="amount" name="amount" value = <?php echo $amount?> required>
                                <input type="hidden" id="tax_amount" name="tax_amount" value = <?php echo $tax_amount?> required>
                                <input type="hidden" id="total_amount" name="total_amount" value= <?php echo $total_amount ?> required>
                                <input type="hidden" id="transaction_uuid" name="transaction_uuid" value= <?php echo $transaction_uuid ?> required>
                                <input type="hidden" id="product_code" name="product_code" value ="EPAYTEST" required>
                                <input type="hidden" id="product_service_charge" name="product_service_charge" value="0" required>
                                <input type="hidden" id="product_delivery_charge" name="product_delivery_charge" value="0" required>
                                <input type="hidden" id="success_url" name="success_url" value="https://esewa.com.np" required>
                                <input type="hidden" id="failure_url" name="failure_url" value="http://localhost/LifestyleStore-master/LifestyleStore/cart.php" required>
                                <input type="hidden" id="signed_field_names" name="signed_field_names" value="total_amount,transaction_uuid,product_code" required>
                                <input type="hidden" id="signature" name="signature" value = <?php echo $signature ?> required>
                                <input value="Submit" style="display: none;" type="submit">
                            </form>
                                <!-- <p>Your order is confirmed. Thank you for shopping with us. <a href="payment.php">Click here</a> to pay.</p> -->
                            <!-- </div>
                        </div>
                    </div>
                </div> -->
            </div>
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
