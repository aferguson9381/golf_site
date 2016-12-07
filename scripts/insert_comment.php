<?php 
include('includes/connection.php'); 
global $con; 

if(isset($_POST['comment_sub'])) {

  $insert = "INSERT INTO comments (post_id, user_id, comment, comment_date) VALUES ('".$_POST['post_id']."', '".$_POST['user_id']."', '".mysqli_real_escape_string($con, $_POST['comment'])."', now())"; 

  $run_insert = mysqli_query($con, $insert); 

  if($run_insert) {
    echo "<script>window.open('home.php?user_id=".$_POST['user_id']."','_self')</script>";
  }
}


?>