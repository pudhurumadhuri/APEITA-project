<?php
session_start();
$company1=$_SESSION['company'];
$result = mysqli_query($con, "SELECT * FROM users WHERE company='$company1'");

$res=mysqli_fetch_assoc($result);

$company=$res['company'];

?>
<section>
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
                    $sql = mysqli_query($con, "SELECT * FROM visitor WHERE status= 2 and company='$company'");
                    $count = mysqli_num_rows($sql);
                    ?>
                    <a class="large_logo" href="index.php"><img src="img/logo_white1.png" alt=""></a>
                    <div class="header_right d-flex justify-content-between align-items-center">
                        <div class="header_notification_warp d-flex align-items-center">
                            <li>
                                <a class="bell_notification_clicker ml-5 mr-5" href="#"> <img src="img/icon/bell.svg" alt="">
                                <?php
                                    require 'config.php';
                                    $query = "SELECT id FROM notifications2 where status=0";
                                    $query_run = mysqli_query($con, $query);
                                    $row = mysqli_num_rows($query_run);
                                    // echo '<h4> ' . $row . '</h4>'
                                    $count +=$row
                                    ?>
                                    <span>
                                        <?php
                                        echo $count;
                                        ?>
                                    </span>
                                </a>
                                <div class="Menu_NOtification_Wrap">
                                    <div class="notification_Header">
                                        <h4>Notifications</h4>
                                    </div>
                                    <?php
                                    error_reporting(E_ERROR | E_PARSE);
                                    require_once("config.php");
                                    $result = mysqli_query($con, "SELECT * FROM visitor where status=2 and company='$company' ");
                                    if (isset($_GET[''])) {
                                        echo $_GET['msg'];
                                    }
                                   
                                    ?>
                                    <div class="Notification_body">
                                        <?php
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                                <div class="single_notify d-flex align-items-center">
                                                    <div class="notify_thumb">
                                                        <a href="view_notification2.php"><img src="img/customers/1.png" alt=""></a>
                                                    </div>
                                                    <div class="notify_content" limit 2>
                                                        <a href="view_notification2.php">
                                                            <h5><?php echo $row["company"]; ?></h5>

                                                            <p><?php echo $row["purpose"]; ?></p>
                                                        <!-- </a>
                                                      
                                                                                                <a href=Accept_visiter.php?id=". $row['id']." class='status_btn'>Accept</a>
                                                                                         
                                                                                                <a href=Reject_visiter.php?id=".$row['id']." class='status_btn' style='background-color: #f44336;'>Reject</a> -->
                                                    </div>
                                                </div>
                                        <?php
                                            }
                                        }

                                        ?>
                             <?php
                                    error_reporting(E_ERROR | E_PARSE);
                                    require_once("config.php");
                                    $result1 = mysqli_query($con, "SELECT * FROM notifications2 where status=0");
                                    if (isset($_GET[''])) {
                                        echo $_GET['msg'];
                                    }
                                    ?>
                                    <div class="Notification_body">
                                        <?php
                                        if (mysqli_num_rows($result1) > 0) {
                                            while ($row = mysqli_fetch_array($result1)) {
                                        ?>
                                                <div class="single_notify d-flex align-items-center">
                                                    <div class="notify_thumb">
                                                        <a href="view_notification.php"><img src="img/customers/1.png" alt=""></a>
                                                    </div>
                                                    <div class="notify_content">
                                                        <a href="view_notification.php">
                                                            <h5><?php echo $row["MessageofNotifications"]; ?></h5>
                                                        </a>
                                                        <p><?php echo $row["subjectofNotification"]; ?></p>
                                                    </div>
                                                </div>
                                        <?php
                                            }
                                        }
                                        ?>
                                        </div>
                                    </div>
                                    <div class="nofity_footer">
                                        <div class="submit_button text-center pt_20">
                                            <a href="visit_list.php" class="btn_1">See More</a>
                                        </div>
                                    </div>
                                </div>

                            </li>
                        <div class="profile_info">
                            <i class='fas fa-user-tie ml-0'  style='font-size:30px'></i>
                            <div class="profile_info_iner">
                                <div class="profile_author_name">
                                    <h5><?php echo $company; ?></h5>
                                </div>
                                <div class="profile_info_details">
                                    <a href="profile.php">My Profile </a>
                                    <a href="..//admin-login.php">Log Out </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>