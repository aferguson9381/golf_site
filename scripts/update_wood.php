<?php 
include('includes/connection.php'); 
global $con; 

  if(isset($_POST['wood_sub'])) {

    $get_wood_brand = "SELECT * FROM wood_brands WHERE brand_id = '".$_POST['wood_brand']."'"; 
    $run_wood_brand = mysqli_query($con, $get_wood_brand); 
    $row_wood_brand = mysqli_fetch_array($run_wood_brand); 

    $get_wood_model = "SELECT * FROM wood_models WHERE model_id = '".$_POST['wood_model']."'"; 
    $run_wood_model = mysqli_query($con, $get_wood_model);
    $row_wood_model = mysqli_fetch_array($run_wood_model); 

    $insert_wood = "INSERT INTO in_my_bag_woods (user_id, club_wood_co, club_wood_kind, club_wood_loft, club_wood_desc, club_wood_status) VALUES ('".$_SESSION['user_id']."', '".$row_wood_brand['brand_name']."', '".$row_wood_model['model_name']."', '".$row_wood_model['model_loft']."', '".$row_wood_model['model_desc']."', 'active')"; 

    $run_ins_wood = mysqli_query($con, $insert_wood);

    if($run_ins_wood) {
      echo "<script>window.open('profile.php?user_id=".$_SESSION['user_id']."', '_self')</script>"; 
    }
  }

?>