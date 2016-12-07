<?php 
include('includes/connection.php'); 
global $con; 

  if(isset($_POST['putter_sub'])) {

    $get_putter_brand = "SELECT * FROM putter_brands WHERE brand_id = '".$_POST['putter_brand']."'"; 
    $run_putter_brand = mysqli_query($con, $get_putter_brand); 
    $row_putter_brand = mysqli_fetch_array($run_putter_brand); 

    $get_putter_model = "SELECT * FROM putter_models WHERE model_id = '".$_POST['putter_model']."'"; 
    $run_putter_model = mysqli_query($con, $get_putter_model);
    $row_putter_model = mysqli_fetch_array($run_putter_model); 

    $insert_putter = "INSERT INTO in_my_bag_putters (user_id, club_putter_co, club_putter_kind,  club_putter_desc, club_putter_status) VALUES ('".$_SESSION['user_id']."', '".$row_putter_brand['brand_name']."', '".$row_putter_model['model_name']."', '".$row_putter_model['model_desc']."', 'active')"; 

    $run_ins_putter = mysqli_query($con, $insert_putter);

    if($run_ins_putter) {
      echo "<script>window.open('profile.php?user_id=".$_SESSION['user_id']."', '_self')</script>"; 
    }
  }

?>