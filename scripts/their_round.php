<?php 
include('includes/connection.php'); 

function their_round() {
	global $con; 

	$get_rounds = "SELECT * FROM user_rounds WHERE user_id != '".$_SESSION['user_id']."'";
	$run_rounds = mysqli_query($con, $get_rounds); 
	while($row_rounds = mysqli_fetch_array($run_rounds)) {

		echo "
      <option value='".$row_rounds['round_id']."'>".$row_rounds['user_name']." ".$row_rounds['user_last_name']." - ".$row_rounds['course_name']." - ".date("M d, Y", strtotime($row_rounds['date_played']))."</option>
      ";
	}
}

?>