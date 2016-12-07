<?php 
include('includes/connection.php'); 
global $con; 

if(isset($_POST['wood_delete'])) {

  $delete = "update in_my_bag_woods set club_wood_status = 'deactive' where wood_id = '".$_POST['wood_id']."'"; 

  $run_del = mysqli_query($con, $delete); 

  if($run_del) {
    echo "<script>window.open('profile.php?user_id=".$_SESSION['user_id']."', '_self')</script>"; 
  }
}

?>