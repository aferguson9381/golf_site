<?php 
include('includes/connection.php'); 
global $con; 

  if(isset($_POST['irons_sub'])) {

    $get_irons_brand = "SELECT * FROM iron_brands WHERE brand_id = '".$_POST['irons_brand']."'"; 
    $run_irons_brand = mysqli_query($con, $get_irons_brand); 
    $row_irons_brand = mysqli_fetch_array($run_irons_brand); 

    $get_irons_model = "SELECT * FROM iron_models WHERE model_id = '".$_POST['irons_model']."'"; 
    $run_irons_model = mysqli_query($con, $get_irons_model);
    $row_irons_model = mysqli_fetch_array($run_irons_model); 

    $insert_irons = "INSERT INTO in_my_bag_irons (user_id, club_irons_co, club_irons_kind, club_irons_clubs, club_irons_desc, club_irons_status) VALUES ('".$_SESSION['user_id']."', '".$row_irons_brand['brand_name']."', '".$row_irons_model['model_name']."', '".$row_irons_model['model_clubs']."', '".$row_irons_model['model_desc']."', 'active')"; 

    $run_ins_irons = mysqli_query($con, $insert_irons);

    if($run_ins_irons) {
      echo "<script>window.open('profile.php?user_id=".$_SESSION['user_id']."', '_self')</script>"; 
    }
  }

?>