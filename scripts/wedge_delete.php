<?php 
include('includes/connection.php'); 
global $con; 

if(isset($_POST['wedge_delete'])) {

  $delete = "update in_my_bag_wedges set club_wedge_status = 'deactive' where wedge_id = '".$_POST['wedge_id']."'"; 

  $run_del = mysqli_query($con, $delete); 

  if($run_del) {
    echo "<script>window.open('profile.php?user_id=".$_SESSION['user_id']."', '_self')</script>"; 
  }
}

?>