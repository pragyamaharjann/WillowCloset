<!DOCTYPE html>
<html lang="zxx">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <title>Sales</title>
      <link rel="icon" href="img/logo.png" type="image/png">
      <?php include 'links.php'?>
   </head>
   <body class="crm_body_bg">
   <?php include 'header.php'?>
      <section class="main_content dashboard_part large_header_bg">
         <div class="container-fluid g-0">
            <div class="row">
               <div class="col-lg-12 p-0 ">
                  <div class="header_iner d-flex justify-content-between align-items-center">
                     <div class="sidebar_icon d-lg-none">
                        <i class="ti-menu"></i>
                     </div>
                     <div class="serach_field-area d-flex align-items-center">
                        
                        <span class="f_s_14 f_w_400 ml_25 white_text text_white">Apps</span>
                     </div>
                     <div class="header_right d-flex justify-content-between align-items-center">
                        <div class="header_notification_warp d-flex align-items-center">
                           
                        </div>
                        <div class="profile_info">
                           <img src="assets/img/logo (1).png" alt="#">
                           <div class="profile_info_iner">
                              <div class="profile_author_name">
                                 <p>Admin </p>
                              </div>
                              <div class="profile_info_details">
                                 <a href="my_profile.php">My Profile </a>
                                 <a href="#">Log Out </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="main_content_iner ">
            <div class="container-fluid p-0 sm_padding_15px">
               <div class="row justify-content-center">
                  
                  </div>
                  <div class="col-lg-12">
                     <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                           <div class="box_header m-0">
                              <div class="main-title">
                                 <h2 class="m-0">Fill Product Details</h2>
                              </div>
                           </div>
                        </div>
                        <div class="white_card_body">
                           <div class="card-body">
                              <form action="functions.php" method="post">
                                 <div class="row mb-3">
                                    <div class="col-md-6">
                                       <label class="form-label" for="inputEmail4"><b>Product Name</b></label>
                                       <input type="text" class="form-control" name="product_name" id="inputEmail4" placeholder="Name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                       <label class="form-label" for="inputEmail4">Keywords</label>
                                       <input type="text" class="form-control" name="keywords" id="inputEmail4" placeholder="Keywords">
                                    </div><div class="col-md-6 mb-3">
                                       <label class="form-label" for="inputEmail4">Description</label>
                                       <input type="text" class="form-control"name="description" id="inputEmail4" placeholder="Description">
                                    </div>
                                    <div class="col-md-6">
                                       <label class="form-label" for="inputState">Stock</label>
                                       <select id="inputState" name="stock" class="form-control">
                                          <option selected>Choose...</option>
                                          <option value="1">In</option>
                                          <option value="0">Out</option>
                                       </select>
                                    </div>
                                    <div class="col-md-6">
                                       <label class="form-label" for="inputEmail4"><b>Price</b></label>
                                       <input type="number" class="form-control" name="price" id="inputEmail4" placeholder="Price">
                                    </div>
                                    </div><div class="col-md-6 mb-3">
                                       <label class="form-label" for="inputEmail4">Picture</label>
                                       <input type="file" class="form-control"name="image" id="inputEmail4" placeholder="picture">
                                    </div>
                                 </div>
                                 <button type="submit" name="add-product" class="btn btn-primary">Add Product</button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
<?php include 'footer.php'?>