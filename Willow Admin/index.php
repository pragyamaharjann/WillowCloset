<!DOCTYPE html>
<html lang="zxx">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <title>Willow Closet</title>
      <link rel="icon" href="assets/img/logo (1).png" type="image/png">
      <?php include 'links.php'?>
   </head>
   <body class="crm_body_bg">
      <?php include 'header.php'?>
      <section class="main_content dashboard_part large_header_bg">
         <div class="container-fluid g-0">
            <div class="row">
               <div class="col-lg-12 p-0 ">
                  
               </div>
            </div>
         </div>
         <div class="main_content_iner overly_inner">
            <div class="container-fluid p-0 ">
               <div class="row">
                  <div class="col-12">
                     <div class="page_title_box d-flex align-items-center justify-content-between">
                        <div class="page_title_left">
                           <h2 class="f_s_30 f_w_700 text_white">Dashboard</h2>
                           <ol class="breadcrumb page_bradcam mb-0">
                              <li class="breadcrumb-item"><a>Willow Closet </a></li>
                              <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                           </ol>
                        </div>        
                        <div class="header_iner d-flex justify-content-between align-items-center">
                     <div class="sidebar_icon d-lg-none">
                        <i class="ti-menu"></i>
                     </div>
                     <div class="serach_field-area d-flex align-items-center">

                     </div>
                        <div class="profile_info">
                           <img src="assets/img/logo (1).png" alt="#">
                           <div class="profile_info_iner">
                              <div class="profile_author_name">
                                 <p>Admin </p>
                              </div>
                              <div class="profile_info_details">
                                 <a href="my_profile.php">My Profile </a>
                                 <a href="../../LifestyleStore-master/LifestyleStore/logout.php">Log Out </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>                
               </div>         
            </div>
         </div>
               <div class="row ">
                  <div class="col-lg-8 card_height_100">
                     <div class="white_card mb_20">
                        <div class="white_card_header">
                           <div class="box_header m-0">
                              <div class="main-title">
                                 <h2 class="m-0">Revenue</h2>
                              </div>
                              <div class="float-lg-right float-none sales_renew_btns justify-content-end">
                                 <ul class="nav">
                                    <li class="nav-item">
                                       <a class="nav-link active">This Week</a>
                                    </li>
                                    <li class="nav-item">
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="white_card_body" style="height: 286px;">
                           <canvas id="bar"></canvas>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="white_card card_height_100  mb_20">
                        <div class="white_card_header">
                           <div class="box_header m-0">
                              <div class="main-title">
                                 <h2 class="m-0">Account Info</h2>
                              </div>
                              <div class="header_more_tool">
                                 <div class="dropdown">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="white_card_body">
                           <div class="monthly_plan_wraper">
                              <div class="single_plan d-flex align-items-center justify-content-between">
                                 <h5 class="color_theme2 f_s_14 f_w_700 mb-0">Monthly Plan</h5>
                                 <span class="color_gray2 f_s_16 f_w_700">Rs. 2500</span>
                              </div>
                              <div class="single_plan d-flex align-items-start justify-content-between">
                                 <div>
                                    <h5 class="color_theme2 f_s_14 f_w_700 mb-0">Extra</h5>
                                    <p class="f_s_13 f_w_700">Transportation and Delivery
                                    </p>
                                 </div>
                                 <span class="color_gray2 f_s_16 f_w_700">Rs. 500 </span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="white_card card_height_100 mb_20">
                        <div class="white_card_header">
                           <div class="box_header m-0">
                              <div class="main-title">
                                 <h2 class="m-0">Total order</h2>
                              </div>
                              <div class="float-lg-right float-none sales_renew_btns justify-content-end">
                                 <ul class="nav">
                                    <li class="nav-item">
                                       <a class="nav-link active">Today</a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="white_card_body d-flex align-items-center" style="height:140px">
                           <h4 class="f_w_900 f_s_60 mb-0 me-2">356</h4>
                           <div class="w-100" style="height:100px">
                              <canvas width="100%" id="page_views"></canvas>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="white_card card_height_100 mb_20">
                        <div class="white_card_header">
                           <div class="box_header m-0">
                              <div class="main-title">
                                 <h2 class="m-0">Daily Sales</h2>
                              </div>
                              <div class="header_more_tool">
                                 <div class="dropdown">
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="white_card_body">
                           <div id="chart-currently"></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-8">
                     <div class="white_card card_height_100 mb_20 ">
                        <div class="white_card_header">
                           <div class="box_header m-0">
                              <div class="main-title">
                                 <h2 class="m-0">Popular Products</h2>
                              </div>
                              <div class="header_more_tool">
                                 <div class="dropdown">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="white_card_body QA_section">
                           <div class="QA_table ">
                              <table class="table lms_table_active2 p-0">
                                 <thead>
                                    <tr>
                                       <th scope="col">Product</th>
                                       <th scope="col">Price</th>
                                       <th scope="col">Status</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>
                                          <div class="customer d-flex align-items-center">
                                             <div class="thumb_62 mr_15 mt-0"><img class="img-fluid radius_50" src="assets/img/products/01.png" alt></div>
                                             <span class="f_s_20 f_w_400 color_text_3">Lace dreamy dress</span>
                                          </div>
                                       </td>
                                       <td class="f_s_14 f_w_400 color_text_3">Rs. 1400.00</td>
                                       <td class="f_s_14 f_w_400 text-end"><a href="#" class="badge_btn_1">Sold out</a></td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <div class="customer d-flex align-items-center">
                                             <div class="thumb_62 mr_15 mt-0"><img class="img-fluid radius_50" src="assets/img/products/02.png" alt></div>
                                             <span class="f_s_20 f_w_400 color_text_3">Pink Y2K low-rise shorts</span>
                                          </div>
                                       </td>

                                       <td class="f_s_14 f_w_400 color_text_3">Rs. 800.00</td>
                                       <td class="f_s_14 f_w_400 text-end"><a href="#" class="badge_btn_1">Sold Out</a></td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <div class="customer d-flex align-items-center">
                                             <div class="thumb_62 mr_15 mt-0"><img class="img-fluid radius_50" src="assets/img/products/03.png" alt></div>
                                             <span class="f_s_20 f_w_400 color_text_3">Formal cream pants</span>
                                          </div>
                                       </td>

                                       <td class="f_s_14 f_w_400 color_text_3">Rs. 800.00</td>
                                       <td class="f_s_14 f_w_400 text-end"><a href="#" class="badge_btn_1">Sold Out</a></td>
                                    </tr>
                                 </tbody>
                              </table>
                              <a href="view-product.php" class="badge_btn_semi mt_30 ml_15">View All</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer_part">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="footer_iner text-center">
                        <p>2020 © Influence - Designed by <a href="#"> <i class="ti-heart"></i> </a><a href="#"> Dashboard</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div id="back-top" style="display: none;">
         <a title="Go to Top" href="#">
         <i class="ti-angle-up"></i>
         </a>
      </div>
      <script src="assets/js/jquery1-3.4.1.min.js"></script>
      <script src="assets/js/popper1.min.js"></script>
      <script src="assets/js/bootstrap.min.html"></script>
      <script src="assets/js/metisMenu.js"></script>
      <script src="assets/vendors/count_up/jquery.waypoints.min.js"></script>
      <script src="assets/vendors/chartlist/Chart.min.js"></script>
      <script src="assets/vendors/count_up/jquery.counterup.min.js"></script>
      <script src="assets/vendors/niceselect/assets/js/jquery.nice-select.min.js"></script>
      <script src="assets/vendors/owl_carousel/assets/js/owl.carousel.min.js"></script>
      <script src="assets/vendors/datatable/assets/js/jquery.dataTables.min.js"></script>
      <script src="assets/vendors/datatable/assets/js/dataTables.responsive.min.js"></script>
      <script src="assets/vendors/datatable/assets/js/dataTables.buttons.min.js"></script>
      <script src="assets/vendors/datatable/assets/js/buttons.flash.min.js"></script>
      <script src="assets/vendors/datatable/assets/js/jszip.min.js"></script>
      <script src="assets/vendors/datatable/assets/js/pdfmake.min.js"></script>
      <script src="assets/vendors/datatable/assets/js/vfs_fonts.js"></script>
      <script src="assets/vendors/datatable/assets/js/buttons.html5.min.js"></script>
      <script src="assets/vendors/datatable/assets/js/buttons.print.min.js"></script>
      <script src="assets/vendors/datepicker/datepicker.js"></script>
      <script src="assets/vendors/datepicker/datepicker.en.js"></script>
      <script src="assets/vendors/datepicker/datepicker.custom.js"></script>
      <script src="assets/js/chart.min.js"></script>
      <script src="assets/vendors/chartassets/js/roundedBar.min.js"></script>
      <script src="assets/vendors/progressbar/jquery.barfiller.js"></script>
      <script src="assets/vendors/tagsinput/tagsinput.js"></script>
      <script src="assets/vendors/text_editor/summernote-bs4.js"></script>
      <script src="assets/vendors/am_chart/amcharts.js"></script>
      <script src="assets/vendors/scroll/perfect-scrollbar.min.js"></script>
      <script src="assets/vendors/scroll/scrollable-custom.js"></script>
      <script src="assets/vendors/vectormap-home/vectormap-2.0.2.min.js"></script>
      <script src="assets/vendors/vectormap-home/vectormap-world-mill-en.js"></script>
      <script src="assets/vendors/apex_chart/apex-chart2.js"></script>
      <script src="assets/vendors/apex_chart/apex_dashboard.js"></script>
      <script src="assets/vendors/echart/echarts.min.js"></script>
      <script src="assets/vendors/chart_am/core.js"></script>
      <script src="assets/vendors/chart_am/charts.js"></script>
      <script src="assets/vendors/chart_am/animated.js"></script>
      <script src="assets/vendors/chart_am/kelly.js"></script>
      <script src="assets/vendors/chart_am/chart-custom.js"></script>
      <script src="assets/js/dashboard_init.js"></script>
      <script src="assets/js/custom.js"></script>
   </body>
</html>