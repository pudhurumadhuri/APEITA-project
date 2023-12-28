
<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/user-management-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Apr 2022 11:25:29 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<title>Management Admin</title>
<link rel="icon" href="img/mini_logo.png" type="image/png">

<link rel="stylesheet" href="css/bootstrap.min.css" />

<link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />

<link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />

<link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />

<link rel="stylesheet" href="vendors/gijgo/gijgo.min.css" />

<link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
<link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" />

<link rel="stylesheet" href="vendors/datepicker/date-picker.css" />
<link rel="stylesheet" href="vendors/vectormap-home/vectormap-2.0.2.css" />

<link rel="stylesheet" href="vendors/scroll/scrollable.css" />

<link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
<link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />

<link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css" />

<link rel="stylesheet" href="vendors/morris/morris.css">

<link rel="stylesheet" href="vendors/material_icon/material-icons.css" />

<link rel="stylesheet" href="css/metisMenu.css">

<link rel="stylesheet" href="css/style.css" />
    
    
<link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">
</head>
    <style>
      ul li  p{font_size:20px;}
    </style>
<body class="crm_body_bg">


<nav class="sidebar dark_sidebar">
<div class="logo d-flex justify-content-between">
<a class="large_logo" href="index-2.html"><img src="img/logo_white.png" alt=""></a>

<div class="sidebar_close_icon d-lg-none">
<i class="ti-close"></i>
</div>
</div>
<ul id="sidebar_menu">
<li class="">
    <h1>OFFICE </h1>
<a class="has-arrow" href="#" aria-expanded="false">
<div class="nav_icon_small">
<img src="img/menu-icon/dashboard.svg" alt="">
</div>
<div class="nav_title">
<span>complaints</span>
</div>
</a>
<ul>
<li><a href="addcomplaints.php">Add</a></li>
<li><a href="compliantslist.php">View</a></li>

</ul>
</li>
<li class="">
<a class="has-arrow" href="#" aria-expanded="false">
<div class="nav_icon_small">
<img src="img/menu-icon/2.svg" alt="">
</div>
<div class="nav_title">
<span>Visitors</span>
</div>
</a>
<ul>
<li><a href="add.php">Add</a></li>
<li><a href="visit_list.php">View</a></li>

</ul>
</li>
   
<li class="">
<a class="has-arrow" href="#" aria-expanded="false">
<div class="nav_icon_small">
<img src="img/menu-icon/3.svg" alt="">
</div>
<div class="nav_title">
<span>Canteen</span>
</div>
</a>
<ul>
<li><a href="canteen_view.php">View</a></li>


</ul>
</li>
    
<li class="">
<a class="has-arrow" href="#" aria-expanded="false">
<div class="nav_icon_small">
<img src="img/menu-icon/3.svg" alt="">
</div>
<div class="nav_title">
<span>Rent alert</span>
</div>
</a>
<ul>
   
<li><a href="view_rent.php">View</a></li>

</ul>
</li>



<li class="">
<a class="has-arrow" href="#" aria-expanded="false">
<div class="nav_icon_small">
<img src="img/menu-icon/3.svg" alt="">
</div>
<div class="nav_title">
<span>Notifications</span>
</div>
</a>
<ul>
     <li><a href="view_rent.php">Add</a></li>
<li><a href="view_notification.php">View</a></li>

</ul>
</li>

    <br>
    <br>
    <br>
    
<li class="">
<a class="" href="#" aria-expanded="false">
<div class="nav_icon_small">
<img src="img/menu-icon/3.svg" alt="">
</div>
<div class="nav_title">
<span>Log out</span>
</div>
</a>
<ul>
    >

</ul>
</li>

</ul>
</nav>

<section class="main_content dashboard_part large_header_bg">

<div class="container-fluid g-0">
<div class="row">
<div class="col-lg-12 p-0 ">
<div class="header_iner d-flex justify-content-between align-items-center">
<div class="sidebar_icon d-lg-none">
<i class="ti-menu"></i>
 </div>

<div class="line_icon open_miniSide d-none d-lg-block">
<img src="img/line_img.png" alt="">
</div>

<div class="serach_field-area d-flex align-items-center">
<div class="search_inner">
<form action="#">
<div class="search_field">

<input type="text" placeholder="Search">
</div>
<button type="submit"> <img src="img/icon/icon_search.svg" alt=""> </button>
</form>

</div>
</div>
    <?php
    require 'config.php';
                                        $sql=mysqli_query($con,"SELECT * FROM notifications2 WHERE status= 1");
                                        $count=mysqli_num_rows($sql);
                                        ?>
<a class="large_logo" href="index-2.html"><img src="img/logo_white1.png" alt=""></a>
<div class="header_right d-flex justify-content-between align-items-center">
<div class="header_notification_warp d-flex align-items-center">
<li>
<a class="bell_notification_clicker" href="#"> <img src="img/icon/bell.svg" alt="">
<span>
   
    <?php
    echo $count;
    ?>
    </span>
    
    

<div class="Menu_NOtification_Wrap">
<div class="notification_Header">
<h4>Notifications</h4>
</div>
<div class="Notification_body">



<div class="single_notify d-flex align-items-center">
<div class="notify_thumb">
<a href="#"><img src="img/staf/4.png" alt=""></a>
</div>
<div class="notify_content">

</div>
</div>


</div>
<div class="nofity_footer">
<div class="submit_button text-center pt_20">
<a href='view_notification.php' class="btn_1">See More</a>
</div>
</div>
</div>

</li>

</div>
<div class="profile_info">
<img src="img/client_img.png" alt="#">
<div class="profile_info_iner">
<div class="profile_author_name">
<h5>Admin</h5>
</div>
<div class="profile_info_details">
<a href="#">My Profile </a>
<a href="#">Log Out </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="main_content_iner overly_inner ">
<div class="container-fluid p-0 ">

<div class="row">
<div class="col-12">
<div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
<div class="page_title_left d-flex align-items-center">
<h3 class="f_s_25 f_w_700 dark_text mr_30">Dashboard</h3>
<ol class="breadcrumb page_bradcam mb-0">
<li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
<li class="breadcrumb-item active">Analytic</li>
</ol>
</div>
<div class="page_title_right">
<div class="page_date_button d-flex align-items-center">

</div>
</div>
</div>
</div>
</div>
<div class="row ">

<div class="col-xl-6 ">
<div class="white_card card_height_100 mb_30 user_crm_wrapper">
<div class="row">
<div class="col-lg-6">
<div class="single_crm">
<div class="crm_head d-flex align-items-center justify-content-between">
<div class="thumb">
<img src="img/crm/businessman.svg" alt="">
</div>
<i class="fas fa-ellipsis-h f_s_11 white_text"></i>
</div>
<div class="crm_body">
             <?php
require 'config.php';
 $query = "SELECT id FROM users ORDER BY id";
                                        $query_run = mysqli_query($con,$query);
                                        $row = mysqli_num_rows($query_run);
 echo '<h4>'.$row.'</h4>';
?>
    
                                   
<p>Users Registered</p>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="single_crm ">
<div class="crm_head crm_bg_1 d-flex align-items-center justify-content-between">
<div class="thumb">
<img src="img/crm/customer.svg" alt="">
</div>
<i class="fas fa-ellipsis-h f_s_11 white_text"></i>
</div>
<div class="crm_body">
<?php
                                        require 'config.php';
                                        $query = "SELECT id FROM complaints ORDER BY id";
                                        $query_run = mysqli_query($con,$query);
                                        $row = mysqli_num_rows($query_run);
echo '<h4>'.$row.'</h4>';
                                       
                                        ?>
<p>Complaints</p>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="single_crm">
<div class="crm_head crm_bg_1 d-flex align-items-center justify-content-between">
<div class="thumb">
<img src="img/crm/infographic.svg" alt="">
</div>
<i class="fas fa-ellipsis-h f_s_11 white_text"></i>
 </div>
<div class="crm_body">
<?php
                                        require 'config.php';
                                        $query = "SELECT id FROM notifications2 ORDER BY id";
                                        $query_run = mysqli_query($con,$query);
                                        $row = mysqli_num_rows($query_run);
echo '<h4>'.$row.'</h4>';
                                       
                                        ?>
<p>Notifications</p>
</div>
</div>
</div>
    
<div class="col-lg-6">
<div class="single_crm ">
<div class="crm_head crm_bg_2 d-flex align-items-center justify-content-between">
<div class="thumb">
<img src="img/crm/customer.svg" alt="">
</div>
<i class="fas fa-ellipsis-h f_s_11 white_text"></i>
</div>
<div class="crm_body">
<?php
                                        require 'config.php';
                                        $query = "SELECT id FROM visitor ORDER BY id";
                                        $query_run = mysqli_query($con,$query);
                                        $row = mysqli_num_rows($query_run);
echo '<h4>'.$row.'</h4>';
                                       
                                        ?>
<p>All Visitors</p>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="single_crm">
<div class="crm_head crm_bg_2 d-flex align-items-center justify-content-between">
<div class="thumb">
<img src="img/crm/infographic.svg" alt="">
</div>
<i class="fas fa-ellipsis-h f_s_11 white_text"></i>
 </div>
<div class="crm_body">
<?php
                                        require 'config.php';
                                        $query = "SELECT count(id) AS total FROM visitor where company='Sagar Software Solutions pvt ltd'";
                                        $query_run = mysqli_query($con,$query);
    $values=mysqli_fetch_assoc($query_run);
                                       $num_rows=$values['total'];
echo '<h4>'.$num_rows.'</h4>';
                                       
                                        ?>
<p> SSS Visitors</p>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="single_crm">
<div class="crm_head d-flex align-items-center justify-content-between">
<div class="thumb">
<img src="img/crm/infographic.svg" alt="">
</div>
<i class="fas fa-ellipsis-h f_s_11 white_text"></i>
 </div>
<div class="crm_body">
<h4>200000</h4>
<p>Total Rent</p>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="single_crm">
<div class="crm_head crm_bg_3 d-flex align-items-center justify-content-between">
<div class="thumb">
<img src="img/crm/sqr.svg" alt="">
</div>
<i class="fas fa-ellipsis-h f_s_11 white_text"></i>
</div>
<div class="crm_body">
<h4>50000</h4>
<p>Total Maintainance</p>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="col-xl-6">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="row align-items-center">
<div class="col-lg-4">
<div class="main-title">
<h3 class="m-0">Complaints</h3>
</div>
</div>
<div class="col-lg-8">
<div class="row justify-content-end">
<div class="col-lg-8 d-flex justify-content-end">
<div class="serach_field-area theme_bg d-flex align-items-center">
<div class="search_inner">
<form action="#">
<div class="search_field">
<input type="text" placeholder="Search">
</div>
<button type="submit"> <img src="img/icon/icon_search.svg" alt=""> </button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row justify-content-end">
<div class="col-lg-4 mt_20">
<select class="nice_Select2 wide">
<option value="1">Show by All</option>
<option value="1">Show by A</option>
<option value="1">Show by B</option>
</select>
</div>
 </div>
</div>
<div class="white_card_body ">
<div class="single_user_pil d-flex align-items-center justify-content-between">
<div class="user_pils_thumb d-flex align-items-center">
<div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/1.png" alt=""></div>
<span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
</div>
<div class="user_info">
<?php 
    require 'config.php';
                                        $sql = "SELECT complaint_Type FROM complaints where id=1";
                                      $result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo '<h4>'. $row["complaint_Type"].'</h4> ';
    }
} else {
    echo "0 results";
}

mysqli_close($con)
    ?>
    
</div>
<div class="action_btns d-flex">
<a href="update_user.php" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
<a href="pop.php" class="action_btn"> <i class="fas fa-trash"></i> </a>
</div>
</div>
<div class="single_user_pil admin_bg d-flex align-items-center justify-content-between">
<div class="user_pils_thumb d-flex align-items-center">
<div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/1.png" alt=""></div>
<span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
</div>
<div class="user_info">
<?php 
    require 'config.php';
                                        $sql = "SELECT complaint_Type FROM complaints where id=2";
                                      $result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo '<h4>'. $row["complaint_Type"].'</h4> ';
    }
} else {
    echo "0 results";
}

mysqli_close($con)
    ?>
</div>
<div class="action_btns d-flex">
<a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
<a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
</div>
</div>
<div class="single_user_pil d-flex align-items-center justify-content-between">
<div class="user_pils_thumb d-flex align-items-center">
<div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/1.png" alt=""></div>
<span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
</div>
<div class="user_info">
<?php 
    require 'config.php';
                                        $sql = "SELECT complaint_Type FROM complaints where id=3";
                                      $result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo '<h4>'. $row["complaint_Type"].'</h4> ';
    }
} else {
    echo "0 results";
}

mysqli_close($con)
    ?>
</div>
<div class="action_btns d-flex">
<a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
<a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
</div>
</div>
<div class="single_user_pil d-flex align-items-center justify-content-between">
<div class="user_pils_thumb d-flex align-items-center">
<div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/1.png" alt=""></div>
<span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
</div>
<div class="user_info">
<?php 
    require 'config.php';
                                        $sql = "SELECT complaint_Type FROM complaints where id=4";
                                      $result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo '<h4>'. $row["complaint_Type"].'</h4> ';
    }
} else {
    echo "0 results";
}

mysqli_close($con)
    ?>
</div>
<div class="action_btns d-flex">
<a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
<a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
</div>
</div>
<div class="single_user_pil d-flex align-items-center justify-content-between mb-0">
<div class="user_pils_thumb d-flex align-items-center">
<div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/1.png" alt=""></div>
<span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
</div>
<div class="user_info">
<?php 
    require 'config.php';
                                        $sql = "SELECT complaint_Type FROM complaints where id=5";
                                      $result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo '<h4>'. $row["complaint_Type"].'</h4> ';
    }
} else {
    echo "0 results";
}

mysqli_close($con)
    ?>
</div>
<div class="action_btns d-flex">
<a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
<a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
</div>
</div>
</div>
</div>
</div>

<div class="col-xl-6">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="row align-items-center">
<div class="col-lg-4">
<div class="main-title">
<h3 class="m-0">Notifications</h3>
</div>
</div>
<div class="col-lg-8">
<div class="row justify-content-end">
<div class="col-lg-8 d-flex justify-content-end">
<div class="serach_field-area theme_bg d-flex align-items-center">
<div class="search_inner">
<form action="#">
<div class="search_field">
<input type="text" placeholder="Search">
</div>
<button type="submit"> <img src="img/icon/icon_search.svg" alt=""> </button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row justify-content-end">
<div class="col-lg-4 mt_20">
<select class="nice_Select2 wide">
<option value="1">Show by All</option>
<option value="1">Show by A</option>
<option value="1">Show by B</option>
</select>
</div>
 </div>
</div>
<div class="white_card_body ">
<div class="single_user_pil d-flex align-items-center justify-content-between">
<div class="user_pils_thumb d-flex align-items-center">
<div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/1.png" alt=""></div>
<span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
</div>
<div class="user_info">
<?php 
    require 'config.php';
                                        $sql = "SELECT SubjectofNotification FROM notifications2 where id=1";
                                      $result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo '<h4>'. $row["SubjectofNotification"].'</h4> ';
    }
} else {
    echo "0 results";
}

mysqli_close($con)
    ?>
</div>
<div class="action_btns d-flex">
<a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
<a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
</div>
</div>
<div class="single_user_pil admin_bg d-flex align-items-center justify-content-between">
<div class="user_pils_thumb d-flex align-items-center">
<div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/1.png" alt=""></div>
<span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
</div>
<div class="user_info">
<?php 
    require 'config.php';
                                        $sql = "SELECT SubjectofNotification FROM notifications2 where id=2";
                                      $result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo '<h4>'. $row["SubjectofNotification"].'</h4> ';
    }
} else {
    echo "0 results";
}

mysqli_close($con)
    ?>
</div>
<div class="action_btns d-flex">
<a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
<a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
</div>
</div>
<div class="single_user_pil d-flex align-items-center justify-content-between">
<div class="user_pils_thumb d-flex align-items-center">
<div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/1.png" alt=""></div>
<span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
</div>
<div class="user_info">
<?php 
    require 'config.php';
                                        $sql = "SELECT SubjectofNotification FROM notifications2 where id=3";
                                      $result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo '<h4>'. $row["SubjectofNotification"].'</h4> ';
    }
} else {
    echo "0 results";
}

mysqli_close($con)
    ?>
</div>
<div class="action_btns d-flex">
<a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
<a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
</div>
</div>
<div class="single_user_pil d-flex align-items-center justify-content-between">
<div class="user_pils_thumb d-flex align-items-center">
<div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/1.png" alt=""></div>
<span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
</div>
<div class="user_info">
<?php 
    require 'config.php';
                                        $sql = "SELECT SubjectofNotification FROM notifications2 where id=4";
                                      $result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo '<h4>'. $row["SubjectofNotification"].'</h4> ';
    }
} else {
    echo "0 results";
}

mysqli_close($con)
    ?>
</div>
<div class="action_btns d-flex">
<a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
<a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
</div>
</div>
<div class="single_user_pil d-flex align-items-center justify-content-between mb-0">
<div class="user_pils_thumb d-flex align-items-center">
<div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/1.png" alt=""></div>
<span class="f_s_14 f_w_400 text_color_11">Jhon Smith</span>
</div>
<div class="user_info">
<?php 
    require 'config.php';
                                        $sql = "SELECT SubjectofNotification FROM notifications2 where id=5";
                                      $result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo '<h4>'. $row["SubjectofNotification"].'</h4> ';
    }
} else {
    echo "0 results";
}

mysqli_close($con)
    ?>
</div>
<div class="action_btns d-flex">
<a href="#" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
<a href="#" class="action_btn"> <i class="fas fa-trash"></i> </a>
</div>
</div>
</div>
</div>
</div>

<div class="col-xl-6">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="box_header m-0">
<div class="main-title">
<h3 class="m-0">Visitor Entry</h3>
</div>
<div class="header_more_tool">
<div class="dropdown">
<span class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown">
<i class="ti-more-alt"></i>
</span>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
<a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
<a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
<a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
<a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
<a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
</div>
</div>
</div>
</div>
</div>
<div class="white_card_body">
<div class="thumb mb_30">
<img src="img/table.svg" alt="" class="img-fluid">
</div>
<div class="common_form">
<form action="#">
<div class="row">
<div class="col-lg-6">
<div class="common_input mb_15">
<input type="text" placeholder="First Name">
</div>
</div>
<div class="col-lg-6">
<div class="common_input mb_15">
<input type="text" placeholder="Last Name">
</div>
</div>
<div class="col-lg-12">
<div class="common_input mb_15">
<input type="text" placeholder="Phone Number">
</div>
</div>
<div class="col-lg-12">
<div class="common_input mb_15">
<input type="text" placeholder="Email">
</div>
</div>
<div class="col-lg-6">
<select class="nice_Select2 nice_Select_line wide">
<option value="1">Company Name</option>
<option value="1">Sagar Software Solutions</option>
<option value="1">Conflux Systems</option>
</select>
</div>
<div class="col-lg-6">
<div class="common_input mb_15">
<input type="text" placeholder="Purpose">
</div>
</div>
<div class="col-12">
<div class="create_report_btn mt_30">
<a href="#" class="btn_1 radius_btn d-block text-center">Send Request</a>
</div>
</div>
</div>
</form>
</div>
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
<p>Designed by<a href="http://sagarsoftwaresolution.com"> Sagar Software Solutions Pvt Ltd</a></p>
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

<script src="js/jquery-3.4.1.min.js"></script>

<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/metisMenu.js"></script>

<script src="vendors/count_up/jquery.waypoints.min.js"></script>

<script src="vendors/chartlist/Chart.min.js"></script>

<script src="vendors/count_up/jquery.counterup.min.js"></script>

<script src="vendors/niceselect/js/jquery.nice-select.min.js"></script>

<script src="vendors/owl_carousel/js/owl.carousel.min.js"></script>

<script src="vendors/datatable/js/jquery.dataTables.min.js"></script>
<script src="vendors/datatable/js/dataTables.responsive.min.js"></script>
<script src="vendors/datatable/js/dataTables.buttons.min.js"></script>
<script src="vendors/datatable/js/buttons.flash.min.js"></script>
<script src="vendors/datatable/js/jszip.min.js"></script>
<script src="vendors/datatable/js/pdfmake.min.js"></script>
<script src="vendors/datatable/js/vfs_fonts.js"></script>
<script src="vendors/datatable/js/buttons.html5.min.js"></script>
<script src="vendors/datatable/js/buttons.print.min.js"></script>

<script src="vendors/datepicker/datepicker.js"></script>
<script src="vendors/datepicker/datepicker.en.js"></script>
<script src="vendors/datepicker/datepicker.custom.js"></script>
<script src="js/chart.min.js"></script>
<script src="vendors/chartjs/roundedBar.min.js"></script>

<script src="vendors/progressbar/jquery.barfiller.js"></script>

<script src="vendors/tagsinput/tagsinput.js"></script>

<script src="vendors/text_editor/summernote-bs4.js"></script>
<script src="vendors/am_chart/amcharts.js"></script>

<script src="vendors/scroll/perfect-scrollbar.min.js"></script>
<script src="vendors/scroll/scrollable-custom.js"></script>

<script src="vendors/vectormap-home/vectormap-2.0.2.min.js"></script>
<script src="vendors/vectormap-home/vectormap-world-mill-en.js"></script>

<script src="vendors/apex_chart/apex-chart2.js"></script>
<script src="vendors/apex_chart/apex_dashboard.js"></script>

<script src="vendors/chart_am/core.js"></script>
<script src="vendors/chart_am/charts.js"></script>
<script src="vendors/chart_am/animated.js"></script>
<script src="vendors/chart_am/kelly.js"></script>
<script src="vendors/chart_am/chart-custom.js"></script>

<script src="js/dashboard_init.js"></script>
<script src="js/custom.js"></script>
</body>


<!-- Mirrored from demo.dashboardpack.com/user-management-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Apr 2022 11:27:02 GMT -->
</html>
