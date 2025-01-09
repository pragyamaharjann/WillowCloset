<?php
include 'db_conn.php';
if(isset($_POST['add-categories'])){
    $cate_id = mt_rand(11111,99999);
    $cate_name = $_POST['cate_name'];
    $meta_title = $_POST['meta_title'];
    $meta_key = $_POST['meta_key'];
    $meta_desc = $_POST['meta_desc'];
    $added_on = date('M d, Y');
    $slug_url = SlugUrl($cate_name);

    $sql = "INSERT INTO categories (cate_id,cate_name,meta_title,meta_key,meta_desc,slug_url,status,added_on)VALUES('$cate_id','$cate_name','$meta_title','$meta_key','$meta_desc','$slug_url',1,'$added_on')";
    
    $check = mysqli_query($conn,$sql);

        if($check){
            ?>
            <script type="text/javascript">alert('Inserted Successfully');
                window.location.href="add-categories.php";</script>
            <?php
        }

}   

if(isset($_POST['add-product'])){
    $product_name = $_POST['product_name'];
    $keywords = $_POST['keywords'];
    $description = $_POST['description'];
    $added_on = date('M d, Y');
    $price = $_POST['price'];

    $sql = "INSERT INTO products (product_name,keyword,description,stock,added_on,price) VALUES('$product_name','$keywords','$description',1,'$added_on','$price')";
    
    $check = mysqli_query($conn,$sql);

        if($check){
            ?>
            <script type="text/javascript">alert('Inserted Successfully');
                window.location.href="add-product.php";</script>
            <?php
        }

}   

function get_Categories(){
    include 'db_conn.php';
    $sql = "SELECT * FROM ec_categories ORDER BY id ASC";
    
    $check = mysqli_query($conn,$sql);
    $sno=1;
    $outputs = [];
    while ($result = mysqli_fetch_assoc($check)){
        $output = "<tr>
                <td>".$sno++."</td>
                <td>".$result['cate_id']."</td>
                <td>".$result['cate_name']."</td>
                <td>".$result['slug_url']."</td>
                <td>".$result['status']."</td>
                <td>".$result['added_on']."</td>
                </tr>";
                $outputs[] = $output;

            }
            return implode("", $outputs);;
    
}
function get_Product(){
    include 'db_conn.php';
    $sql = "SELECT * FROM products ORDER BY id ASC";
    
    $check = mysqli_query($conn,$sql);
    $sno=1;
    $outputs = [];
    while ($result = mysqli_fetch_assoc($check)){
        $output = "<tr>
                <td>".$sno++."</td>
                <td>".$result['product_name']."</td>
                <td>".$result['keyword']."</td>
                <td>".$result['description']."</td>
                <td>".$result['stock']."</td>
                <td>".$result['added_on']."</td>
                <td>".$result['price']."</td>
                </tr>";
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

?>