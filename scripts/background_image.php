<?php 
  include('includes/connection.php'); 
  global $con; 
  $get_bg = "SELECT * FROM users WHERE user_id = '".$_SESSION['user_id']."'"; 
  $run_bg = mysqli_query($con, $get_bg); 
  $row_bg = mysqli_fetch_array($run_bg); 
  if($row_bg['user_background'] != '') {
    echo "<body style='background-image:url(assets/images/backgrounds/".$row_bg['user_background'].") !important; background-repeat: repeat, no-repeat; background-position: left top; background-size: cover; position: relative;'>";
  } else {
    echo "<body class='bg-1'>";
  }
  ?>