<?php

    function check_if_added_to_cart($product_id){
        //session_start();    
        include 'connection.php';
        if(!isset($_SESSION['id'])) {
            return 0;
        }
        $user_id=$_SESSION['id'];
        $product_check_query="select * from users_products where product_id='$product_id' and user_id='$user_id' and status='Added to cart'";
        $product_check_result=mysqli_query($con,$product_check_query) or die(mysqli_error($con));
        $num_rows=mysqli_num_rows($product_check_result);
        if($num_rows>=1)return 1;
        return 0;
    }

    function get_Product(){
        include 'connection.php';
        $sql = "SELECT * FROM products ORDER BY id ASC";
        
        $check = mysqli_query($con,$sql);
        $sno=1;
        $outputs = [];
        while ($result = mysqli_fetch_assoc($check)){
            $redirect_login = (!isset($_SESSION['email']) == true);
            $added_to_cart = check_if_added_to_cart($result['id']);

            $output = '<div class="thumbnail">
                            <a href="product_detail.php?id='.$result['id'].'">
                                <img src="img/Beige.jpg" style="width: 350px; height: 450px;" alt="Cannon">
                            </a>
                                <center>
                                    <div class="caption">
                                        <h3>'.$result['product_name'].'</h3>
                                        <p>'.$result['price'].'</p>';
                                        
            $output_addition = '<a href="cart_add.php?id='.$result['id'].'" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary" style="width: 200px; height: auto;">Add to cart</a>';

            if($redirect_login) {
                $output_addition = `<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>`;
            } else if($added_to_cart) {
                $output_addition = `<a href="#" class="btn btn-block btn-success disabled">Added to cart</a>`;
            }
            $output = $output.$output_addition.'</div></center></div>';
            $outputs[] = $output;
        }
          
                return implode("", $outputs);;
        
    }

    function SlugUrl($string){
        $slug = trim($string);
        $slug = preg_replace('/[^a-zA-Z0-9 -]/','',$slug);
        $slug = str_replace(' ','-',$slug);
        $slug = strtolower($slug);
        return $slug;
    }

    function generateTransactionUUID() {
        // Generate random bytes and convert to hexadecimal
        $randomString = bin2hex(random_bytes(36 / 2));
        return substr($randomString, 0, 36);
    }

    function generatePaymentSignature($total_amount, $transaction_uuid, $product_code) {
        $secret = "8gBm/:&EnhH.1/q";
        $message = "total_amount=".$total_amount.",transaction_uuid=".$transaction_uuid.",product_code=EPAYTEST";
        $signature = hash_hmac('sha256', $message, $secret, true);
        return base64_encode($signature); 
    }

?>