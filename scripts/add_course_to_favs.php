<?php 
include('includes/connection.php'); 
global $con; 

if(isset($_POST['fav_sub'])) {
  $insert = "INSERT INTO favorite_courses (user_id, course_id) VALUES ('".$_POST['user_id']."', '".$_POST['course_id']."')"; 

  $run_insert = mysqli_query($con, $insert); 

  if($run_insert) {
    echo "<script>window.open('course-profile.php?course_id=".$_POST['course_id']."', '_self')</script>"; 
  }
}

?>