<?php 
include('includes/connection.php'); 
global $con; 

if(isset($_POST['hybrid_delete'])) {

  $delete = "update in_my_bag_hybrids set club_hybrid_status = 'deactive' where hybrid_id = '".$_POST['hybrid_id']."'"; 

  $run_del = mysqli_query($con, $delete); 

  if($run_del) {
    echo "<script>window.open('profile.php?user_id=".$_SESSION['user_id']."', '_self')</script>"; 
  }
}

?>