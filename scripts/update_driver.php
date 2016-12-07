<?php 
include('includes/connection.php'); 
global $con; 

  if(isset($_POST['driver_sub'])) {

    $get_driver_brand = "SELECT * FROM driver_brands WHERE brand_id = '".$_POST['driver_brand']."'"; 
    $run_driver_brand = mysqli_query($con, $get_driver_brand); 
    $row_driver_brand = mysqli_fetch_array($run_driver_brand); 

    $get_driver_model = "SELECT * FROM driver_models WHERE model_id = '".$_POST['driver_model']."'"; 
    $run_driver_model = mysqli_query($con, $get_driver_model);
    $row_driver_model = mysqli_fetch_array($run_driver_model); 

    $insert_driver = "INSERT INTO in_my_bag_driver (user_id, club_driver_co, club_driver_kind, club_driver_loft, club_driver_desc, club_driver_status) VALUES ('".$_SESSION['user_id']."', '".$row_driver_brand['brand_name']."', '".$row_driver_model['model_name']."', '".$row_driver_model['model_loft']."', '".$row_driver_model['model_desc']."', 'active')"; 

    $run_ins_driver = mysqli_query($con, $insert_driver);

    if($run_ins_driver) {
      echo "<script>window.open('profile.php?user_id=".$_SESSION['user_id']."', '_self')</script>"; 
    }
  }

?>