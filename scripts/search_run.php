<?php 
include('includes/connection.php'); 
global $con; 

if(isset($_POST['search_sub'])) {
  $search = mysqli_real_escape_string($con, $_POST['search_bar']); 

  $get_search = "SELECT *, user_name, user_last_name, user_username FROM users WHERE user_name LIKE '%" . $search . "%' OR user_last_name LIKE '%" . $search ."%' OR user_username LIKE '%" . $search ."%'";
  $run_search = mysqli_query($con, $get_search); 
  while($row_search = mysqli_fetch_array($run_search)) {

    echo "
    <div id='fulltext-tab' class='tab-pane fade in active'>
      <ul class='search-results fulltext'>
        <li class='search-result'>
          <div class='cover'>
            <h4></h4>
            <p></p>
          </div>
        </li>
      </ul>
    </div>";
  }
}
?>
