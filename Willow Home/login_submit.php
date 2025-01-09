<?php
    require 'connection.php';
    session_start();
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if(!preg_match($regex_email,$email)){
        echo "Incorrect email. Redirecting you back to login page...";
        ?>
        <meta http-equiv="refresh" content="2;url=login.php" />
        <?php
    }
    $password=mysqli_real_escape_string($con,$_POST['password']);
    if(strlen($password)<6){
        echo "Password should have atleast 6 characters. Redirecting you back to login page...";
        ?>
        <meta http-equiv="refresh" content="2;url=login.php" />
        <?php
    }

    $authentication_query = "";

    $is_admin = ($_SESSION['referrer'] == "admin_login.php");

    if($is_admin) {
        $authentication_query = "select id,email from admins where email='$email' and password='$password'";
    } else {
        $authentication_query = "select id,email from users where email='$email' and password='$password'"; 
    }

    $authentication_result=mysqli_query($con,$authentication_query) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($authentication_result);
    if($rows_fetched==0){
        //no user
        //redirecting to same login page
        ?>
        <script>
            window.alert("Wrong username or password");
        </script>
        <meta http-equiv="refresh" content="1;url=login.php" />
        <?php
        //header('location: login');
        //echo "Wrong email or password.";
    }else{
        $row=mysqli_fetch_array($authentication_result);
        $_SESSION['email']=$email;
        $_SESSION['id']=$row['id'];  //user id 
        if($is_admin) {
            header('location: C:\xampp\htdocs\Willow_Closet\Willow_Admin\index.php');
        } else {
            header('location: products.php');
        }
    }
    
 ?>