<?php 
include('includes/connection.php'); 
global $con; 

  if(isset($_POST['hybrid_sub'])) {

    $get_hybrid_brand = "SELECT * FROM hybrid_brands WHERE brand_id = '".$_POST['hybrid_brand']."'"; 
    $run_hybrid_brand = mysqli_query($con, $get_hybrid_brand); 
    $row_hybrid_brand = mysqli_fetch_array($run_hybrid_brand); 

    $get_hybrid_model = "SELECT * FROM hybrid_models WHERE model_id = '".$_POST['hybrid_model']."'"; 
    $run_hybrid_model = mysqli_query($con, $get_hybrid_model);
    $row_hybrid_model = mysqli_fetch_array($run_hybrid_model); 

    $insert_hybrid = "INSERT INTO in_my_bag_hybrids (user_id, club_hybrid_co, club_hybrid_kind, club_hybrid_loft, club_hybrid_desc, club_hybrid_status) VALUES ('".$_SESSION['user_id']."', '".$row_hybrid_brand['brand_name']."', '".$row_hybrid_model['model_name']."', '".$row_hybrid_model['model_loft']."', '".$row_hybrid_model['model_desc']."', 'active')"; 

    $run_ins_hybrid = mysqli_query($con, $insert_hybrid);

    if($run_ins_hybrid) {
      echo "<script>window.open('profile.php?user_id=".$_SESSION['user_id']."', '_self')</script>"; 
    }
  }

?>