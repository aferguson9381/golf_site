<?php 
  include('includes/connection.php'); 
  global $con; 

  if(isset($_POST['stat_sub'])) {

  $user_id = $_POST['user_id'];
  $course_id = $_POST['course_id'];
  $round_id = $_POST['round_id'];
  $hole_number = $_POST['hole_number'];
  $hole_par = $_POST['hole_par'];
  $course_name = $_POST['course_name'];
  $date_played = $_POST['date_played'];
  $hole_drive_club = $_POST['hole_drive_club'];
  $hole_fairway_1 = $_POST['hole_fairway_1'];
  $hole_fairway_club_1 = $_POST['hole_fairway_club_1'];
  $hole_under_gir = $_POST['hole_under_gir'];
  $hole_fairway_club_2 = $_POST['hole_fairway_club_2'];
  $hole_gir = $_POST['hole_gir'];
  $hole_shots_to_green = $_POST['hole_shots_to_green'];
  $hole_putts = $_POST['hole_putts'];
  $hole_score = $_POST['hole_score'];

  $insert = "INSERT INTO round_stats (user_id, course_id, round_id, hole_number, hole_par, hole_score, course_name, date_played, hole_drive_club, hole_fairway_1, hole_fairway_club_1, hole_under_gir, hole_fairway_club_2, hole_gir, hole_shots_to_green, hole_putts) VALUES ('$user_id', '$course_id', '$round_id', '$hole_number', '$hole_par', '$hole_score', '$course_name', '$date_played', '$hole_drive_club', '$hole_fairway_1', '$hole_fairway_club_1', '$hole_under_gir', '$hole_fairway_club_2', '$hole_gir', '$hole_shots_to_green', '$hole_putts')";

  $run = mysqli_query($con, $insert);

  if($run) {
        echo "<script>window.open('round-details.php?round_id=".$_POST['round_id']."','_self')</script>";
        } 
    }
?>