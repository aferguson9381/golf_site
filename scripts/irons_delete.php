<?php 
include('includes/connection.php'); 
global $con; 

if(isset($_POST['irons_delete'])) {

  $delete = "update in_my_bag_irons set club_irons_status = 'deactive' where irons_id = '".$_POST['irons_id']."'"; 

  $run_del = mysqli_query($con, $delete); 

  if($run_del) {
    echo "<script>window.open('profile.php?user_id=".$_SESSION['user_id']."', '_self')</script>"; 
  }
}

?>