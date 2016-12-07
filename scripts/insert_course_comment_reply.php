<?php 
include('includes/connection.php'); 
global $con; 

if(isset($_POST['comment_sub'])) {

  $insert = "INSERT INTO course_comments_replies (course_comm_id, user_id, reply, reply_date) VALUES ('".$_POST['post_id']."', '".$_POST['user_id']."', '".mysqli_real_escape_string($con, $_POST['comment'])."', now())"; 

  $run_insert = mysqli_query($con, $insert); 

  if($run_insert) {
    echo "<script>window.open('course-profile.php?course_id=".$_POST['c_id']."','_self')</script>";
  }
}


?>