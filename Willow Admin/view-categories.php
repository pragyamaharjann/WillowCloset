<?php include 'functions.php'; ?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <title>Willow Closet</title>
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
                        <div class="search_inner">
                           <form action="#">
                              <div class="search_field">
                                 <input type="text" placeholder="Search here...">
                              </div>
                              <button type="submit"> <img src="img/icon/icon_search.svg" alt> </button>
                           </form>
                        </div>
                        <span class="f_s_14 f_w_400 ml_25 white_text text_white">Apps</span>
                     </div>
                     <div class="header_right d-flex justify-content-between align-items-center">
                        <div class="header_notification_warp d-flex align-items-center">
                           <li>
                              <a class="CHATBOX_open nav-link-notify" href="#"> <img src="img/icon/msg.svg" alt> </a>
                           </li>
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
            <div class="container-fluid p-0">
               <div class="row justify-content-center">
                  <div class="col-lg-12">
                     <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                           <div class="box_header m-0">
                              <div class="main-title">
                                 <h2 class="m-0">Category table</h2>
                              </div>
                           </div>
                        </div>
                        <div class="white_card_body">
                           <div class="QA_section">
                              <div class="white_box_tittle list_header">
                                 <div class="box_right d-flex lms_block">
                                    <div class="serach_field_2">
                                    </div>
                                 </div>
                              </div>
                              <div class="QA_table mb_30">
                                 <table class="table lms_table_active ">
                                    <thead>
                                       <tr>
                                          <th scope="col">S.N</th>
                                          <th scope="col">Cate ID</th>
                                          <th scope="col">Category Name</th>
                                          <th scope="col">Slug URL</th>
                                          <th scope="col">Status</th>
                                          <th scope="col">Added On</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                     <?php echo get_Categories(); ?>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12"></div>
               </div>
            </div>
         </div>
<?php include 'footer.php'?>