<?php include_once('menu.php');
//error_reporting(0);
include_once('configo.php');
if(count($_POST)>0) {
mysqli_query($con,"UPDATE canteen set  itemname='" . $_POST['itemname'] . "',price='" . $_POST['price'] . "', image='" . $_POST['image'] . "',  WHERE id='" . $_GET['updateid'] . "'");
$message = "Record Modified Successfully";
header("location:canteen_view.php");
}
$result = mysqli_query($con,"SELECT * FROM canteen WHERE id='" . $_GET['updateid'] . "'");
$row= mysqli_fetch_array($result);
?>
<section class="main_content dashboard_part large_header_bg">
 <?php include_once('navbar.php')?>
 <div class="col-lg-12">
                <div class="white_box mb_30">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">

                            <div class="modal-content cs_modal">
                                <div class="modal-header theme_bg_1 justify-content-center">
                                    <h5 class="modal-title text_white">Update Canteen</h5>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="post">
                                       <div class="white_card card_height_100 mb_30">

                                                                                   <div class="white_card_body">
                                                                                       <div class="row">
                                                                                           <div class="col-lg-12">
                                                                                               <div class="common_input mb_15">
                                                                                                   <input type="text" name="itemname" placeholder="" value="<?php echo $row['itemname']; ?>" >
                                                                                               </div>
                                                                                           </div>
                                                                                           <div class="col-lg-12"></br>
                                                                                               <div class="common_input mb_15">
                                                                                                   <input type="text" name="price" placeholder="" value="<?php echo $row['price']; ?>" >
                                                                                               </div>
                                                                                           </div>
                                                                                           <div class="col-lg-12">
                                                                                               <div class="common_input mb_15">
                                                                                                   <input type="file" name="image" value="<?php echo $row['image']; ?>">
                                                                                               </div>
                                                                                           </div>
<script>
function val(){
alert("item added successfully!")
}
</script>
                                                    <div class="col-12">
                                                        <div class="create_report_btn mt_30">
                                                            <center>
                                                                <input type="submit" style="background-color: #884ffb;border: 1px solid #884ffb;
                                                                    color: #fff;" class="btn_1 radius_btn d-block text-center" name="submit" value="Add item"onclick="val()">
                                                            </center>
                                                            <!-- <a href="index-2.html" class="btn_1 radius_btn d-block text-center" name="submit">Add User</a> -->
                                                        </div>
                                                    </div>

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