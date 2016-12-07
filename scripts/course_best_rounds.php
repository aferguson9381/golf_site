<div class="row">
  <div class='feed-list'>
    <section class="tile color transparent-black">
      <!-- tile header -->
      <div class="tile-header">
        <h1><strong>Best</strong> Men's Rounds</h1>
      </div>
          <hr style='width:80%; margin:0 auto; margin-bottom:15px;'>
      <!-- /tile header -->
      <!-- tile body -->
      <div class="tile-body">
        <table class='table table-striped'>
          <thead>
            <tr>
                <th> Date </th>
                <th> Name </th>
                <th> Score </th>
            </tr>
          </thead>
          <tbody>
            <?php 

            $get_best_mens_scores = "SELECT * FROM user_rounds WHERE c_id = '".$_GET['course_id']."' AND user_sex = 'male' ORDER BY total ASC LIMIT 10"; 
            $run_best_mens_scores = mysqli_query($con, $get_best_mens_scores); 
            while($row_best_mens_scores = mysqli_fetch_array($run_best_mens_scores)) {
                echo "
                <tr>
                    <td>".date("M d, Y", strtotime($row_best_mens_scores['date_played']))."</td>
                    <td><a href='round-details.php?round_id=".$row_best_mens_scores['round_id']."' style='color:#fff;'> ".$row_best_mens_scores['user_name']." ".$row_best_mens_scores['user_last_name']." </a></td>
                    <td> ".$row_best_mens_scores['total']." </td>
                </tr>";
              }
            ?>
          </tbody>
        </table>
          <hr style='width:80%; margin: 0 auto; margin-bottom:10px; margin-top:35px;'>
        <div class='tile-header'>
          <h1><strong>Best </strong> Women's Rounds</h1>
        </div>
        <table class='table table-striped'>
          <thead>
            <tr>
                <th> Date </th>
                <th> Name </th>
                <th> Score </th>
            </tr>
          </thead>
          <tbody>
            <?php 

            $get_best_womens_scores = "SELECT * FROM user_rounds WHERE c_id = '".$_GET['course_id']."' AND user_sex = 'female' ORDER BY total ASC LIMIT 5"; 
            $run_best_womens_scores = mysqli_query($con, $get_best_womens_scores); 
            while($row_best_womens_scores = mysqli_fetch_array($run_best_womens_scores)) {
                echo "
                <tr>
                    <td>".date("M d, Y", strtotime($row_best_womens_scores['date_played']))."</td>
                    <td><a href='round-details.php?round_id=".$row_best_womens_scores['round_id']."' style='color:#fff;'> ".$row_best_womens_scores['user_name']." ".$row_best_womens_scores['user_last_name']." </a></td>
                    <td> ".$row_best_womens_scores['total']." </td>
                </tr>";
              }
            ?>
          </tbody>
        </table>
      </div>
      <!-- /tile body -->
    </section>
  </div>
</div>