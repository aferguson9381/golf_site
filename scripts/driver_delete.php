<?php 
include('includes/connection.php'); 
global $con; 

if(isset($_POST['driver_delete'])) {

  $delete = "update in_my_bag_driver set club_driver_status = 'deactive' where driver_id = '".$_POST['driver_id']."'"; 

  $run_del = mysqli_query($con, $delete); 

  if($run_del) {
    echo "<script>window.open('profile.php?user_id=".$_SESSION['user_id']."', '_self')</script>"; 
  }
}

?>