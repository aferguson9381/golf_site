<?php 
include('includes/connection.php'); 
global $con; 

  if(isset($_POST['wedge_sub'])) {

    $get_wedge_brand = "SELECT * FROM wedge_brands WHERE brand_id = '".$_POST['wedge_brand']."'"; 
    $run_wedge_brand = mysqli_query($con, $get_wedge_brand); 
    $row_wedge_brand = mysqli_fetch_array($run_wedge_brand); 

    $get_wedge_model = "SELECT * FROM wedge_models WHERE model_id = '".$_POST['wedge_model']."'"; 
    $run_wedge_model = mysqli_query($con, $get_wedge_model);
    $row_wedge_model = mysqli_fetch_array($run_wedge_model); 

    $insert_wedge = "INSERT INTO in_my_bag_wedges (user_id, club_wedge_co, club_wedge_kind, club_wedge_loft, club_wedge_desc, club_wedge_status) VALUES ('".$_SESSION['user_id']."', '".$row_wedge_brand['brand_name']."', '".$row_wedge_model['model_name']."', '".$row_wedge_model['model_loft']."', '".$row_wedge_model['model_desc']."', 'active')"; 

    $run_ins_wedge = mysqli_query($con, $insert_wedge);

    if($run_ins_wedge) {
      echo "<script>window.open('profile.php?user_id=".$_SESSION['user_id']."', '_self')</script>"; 
    }
  }

?>