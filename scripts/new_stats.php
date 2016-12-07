
  <?php
  if(isset($_GET['user_id'])) {
  global $con; 
  $get_player = "SELECT * FROM users WHERE user_id = '".$_GET['user_id']."'";
  $run_player = mysqli_query($con, $get_player); 
  $row_player = mysqli_fetch_array($run_player);

  $get_clubs = "SELECT *, sum(hole_fairway_1) AS fairways FROM round_stats WHERE user_id = '".$row_player['user_id']."' AND (hole_par = '4' OR hole_par = '5') GROUP BY hole_drive_club ORDER BY fairways DESC LIMIT 2"; 
  $run_clubs = mysqli_query($con, $get_clubs);

    if(isset($_GET['user_id'])) {
      global $con; 
      $user = $_GET['user_id']; 
      $get_player = "SELECT * 
                     FROM users 
                     WHERE user_id = '$user'";
      $run_player = mysqli_query($con, $get_player); 
      $row_player = mysqli_fetch_array($run_player);

    $get_stats = "SELECT *, 
                         count(hole_fairway_1) AS all_fairways
                  FROM round_stats
                  WHERE user_id = '".$row_player['user_id']."'
                  AND (hole_par = '4' 
                  OR hole_par = '5')";
    $run_stats = mysqli_query($con, $get_stats); 
    $row_stats = mysqli_fetch_array($run_stats);
    $num_stats = mysqli_num_rows($run_stats); 

    $get_fairways = "SELECT *, 
                            count(hole_fairway_1) AS hit_fairways
                     FROM round_stats
                     WHERE user_id = '".$row_player['user_id']."'
                     AND hole_fairway_1 = '1'";
    $run_fairways = mysqli_query($con, $get_fairways); 
    $row_fairways = mysqli_fetch_array($run_fairways);

    $get_all_greens = "SELECT *,
                              count(hole_gir) AS all_girs
                       FROM round_stats
                       WHERE user_id = '".$row_player['user_id']."'";
    $run_all_greens = mysqli_query($con, $get_all_greens); 
    $row_all_greens = mysqli_fetch_array($run_all_greens); 

    $hit_greens = "SELECT *, 
                          count(hole_gir) AS hit_greens
                   FROM round_stats
                   WHERE user_id = '".$row_player['user_id']."'
                   AND hole_gir = '1'";
    $run_greens = mysqli_query($con, $hit_greens); 
    $row_greens = mysqli_fetch_array($run_greens); 

    $set_par = "SELECT *, 
                       count(hole_fairway_1) AS hit_par
                FROM round_stats 
                WHERE user_id = '".$row_player['user_id']."'
                AND hole_fairway_1 = '1'"; 
    $run_set_par = mysqli_query($con, $set_par); 
    $row_set_par = mysqli_fetch_array($run_set_par); 

    $get_par = "SELECT *, 
                       count(hole_fairway_1) AS pars
                FROM round_stats 
                WHERE user_id = '".$row_player['user_id']."'
                AND (hole_score = hole_par
                OR hole_score < hole_par)
                AND hole_fairway_1 = '1'"; 
    $run_par = mysqli_query($con, $get_par); 
    $row_par = mysqli_fetch_array($run_par); 

    $get_hit_fairways = "SELECT *,
                                count(hole_fairway_1) AS club_hit_fairways
                         FROM round_stats
                         WHERE user_id = '".$row_player['user_id']."'
                         AND hole_drive_club = '".$row_club['hole_drive_club']."'
                         AND hole_fairway_1 = '1'";
    $run_hit_fairways = mysqli_query($con, $get_hit_fairways); 
    $row_hit_fairways = mysqli_fetch_array($run_hit_fairways); 

    if($row_stats['all_fairways'] == 0) {
      $fairway_percent = 0; 
    } else {
      $fairway_percent = ($row_fairways['hit_fairways'] / $row_stats['all_fairways']) * 100;
    }

    if($row_all_greens['all_girs'] == 0) {
      $green_percent = 0;
    } else {
      $green_percent = ($row_greens['hit_greens'] / $row_all_greens['all_girs']) * 100; 
    }
    
    if($row_set_par['hit_par'] == 0) {
      $par_percent = 0; 
    } else {
      $par_percent = ($row_par['pars'] / $row_set_par['hit_par']) * 100; 
    }

    echo "
      <table class='table table-striped' style='margin-top:15px; margin-bottom:25px;'>
        <thead>
          <tr>
            <th style='width:33%; text-align:center;'>Hit Fairway Percentage</th>
            <th style='width:33%; text-align:center;'>Green In Regulation Percentage</th>
            <th style='width:33%; text-align:center;'>Par or Better When Hit on Fairway</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td style='text-align:center;'>".number_format($fairway_percent,2)."%</td>
            <td style='text-align:center;'>".number_format($green_percent,2)."%</td>
            <td style='text-align:center;'>".number_format($par_percent,2)."%</td>
          </tr>
          <tr>
            <td>
              <div class='tile-body text-center'>
                <div class='easypiechart inline' style='width: 110px;height: 110px;line-height: 110px;'>
                  <div class='fairway' data-percent='".number_format($fairway_percent,2)."' data-size='100' data-track-color='rgba(0,0,0,.2)'><span>&nbsp;</span></div>
                  <div class='label'>Fairway %</div>
                </div>
              </div>
            </td>
            <td>
              <div class='tile-body text-center'>
                <div class='easypiechart inline' style='width: 110px;height: 110px;line-height: 110px;'>
                  <div class='green' data-percent='".number_format($green_percent,2)."' data-size='100' data-track-color='rgba(0,0,0,.2)'><span>&nbsp;</span></div>
                  <div class='label'>Fairway %</div>
                </div>
              </div>
            </td>
            <td>
              <div class='tile-body text-center'>
                <div class='easypiechart inline' style='width: 110px;height: 110px;line-height: 110px;'>
                  <div class='par' data-percent='".number_format($par_percent,2)."' data-size='100' data-track-color='rgba(0,0,0,.2)'><span>&nbsp;</span></div>
                  <div class='label'>Fairway %</div>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
      ";
    }
    echo"
    <hr style='width:80%; margin:0 auto; margin-bottom:15px;'>
    <span style='font-size:16px; color:#ececec;'><strong>Par 4/5 </strong>Best Clubs Off The Tee</span>
    <table class='table table-striped' style='margin-top:15px; margin-bottom:25px;'>
      <thead>
        <tr>
          <th style='width:33%; text-align:center;'>Club</th>
          <th style='width:33%; text-align:center;'>Used %</th>
          <th style='width:33%; text-align:center;'>Fairway %</th>
        </tr>
      </thead>
      <tbody>";
      while($row_clubs = mysqli_fetch_array($run_clubs)) {
      $get_stats = "SELECT *, count(hole_fairway_1) AS all_fairways FROM round_stats WHERE user_id = '".$row_player['user_id']."' AND (hole_par = '4' OR hole_par = '5')";
      $run_stats = mysqli_query($con, $get_stats); 
      $row_stats = mysqli_fetch_array($run_stats);
      $num_stats = mysqli_num_rows($run_stats); 

      $get_clubs_used = "SELECT *,count(hole_drive_club) AS club_used FROM round_stats WHERE user_id = '".$row_player['user_id']."' AND (hole_par = '4' OR hole_par = '5')"; 
      $run_clubs_used = mysqli_query($con, $get_clubs_used);

      $get_fairways_hit = "SELECT *, count(hole_fairway_1) AS fairways_hit FROM round_stats WHERE user_id = '".$row_player['user_id']."' AND (hole_par = '4' OR hole_par = '5') AND hole_drive_club = '".$row_clubs['hole_drive_club']."'"; 
      $run_fairways_hit = mysqli_query($con, $get_fairways_hit); 

      $get_total_fairways = "SELECT *, count(hole_fairway_1) AS tot_fairways FROM round_stats WHERE user_id = '".$row_player['user_id']."' AND (hole_par = '4' OR hole_par = '5') AND hole_drive_club = '".$row_clubs['hole_drive_club']."'"; 
      $run_total_fairways = mysqli_query($con, $get_total_fairways);
      $row_total_fairways = mysqli_fetch_array($run_total_fairways); 

      $get_total_fairways_hit = "SELECT *, count(hole_fairway_1) AS tot_fairways_hit FROM round_stats WHERE user_id = '".$row_player['user_id']."' AND (hole_par = '4' OR hole_par = '5') AND hole_fairway_1 = '1' AND hole_drive_club = '".$row_clubs['hole_drive_club']."'"; 
      $run_total_fairways_hit = mysqli_query($con, $get_total_fairways_hit);
      $row_total_fairways_hit = mysqli_fetch_array($run_total_fairways_hit); 

      $fairway_hit_percent = ($row_total_fairways_hit['tot_fairways_hit'] / $row_total_fairways['tot_fairways']) * 100;

      $row_fairways_hit = mysqli_fetch_array($run_fairways_hit);
      $club_fairway_percent = ($row_fairways_hit['fairways_hit'] / $row_stats['all_fairways']) * 100;
      echo"
        <tr>
          <td style='text-align:center;'>".ucwords($row_clubs['hole_drive_club'])."</td>
          <td style='text-align:center;'>".number_format($club_fairway_percent,2)."%</td>
          <td style='text-align:center;'>".number_format($fairway_hit_percent,2)."%</td>
        </tr>";
      }
      echo"
      </tbody>
    </table>";
    $get_stats = "SELECT *, sum(hole_putts) AS total_putts, sum(hole_gir) AS total_girs, sum(hole_under_gir) AS total_under_girs, avg(hole_shots_to_green) AS avg_shots_to_green, sum(hole_fairway_1) AS total_fairways FROM round_stats WHERE user_id = '".$row_player['user_id']."'";
    $run_stats = mysqli_query($con, $get_stats); 
    $row_stats = mysqli_fetch_array($run_stats); 

    $get_rounds = "SELECT * FROM user_rounds WHERE user_id = '".$row_stats['user_id']."'"; 
    $run_rounds = mysqli_query($con, $get_rounds); 
    $num_rounds = mysqli_num_rows($run_rounds); 

    if($num_rounds != 0) {
        $putts_per_round = $row_stats['total_putts'] / $num_rounds;
    } else {
        $putts_per_round = 0; 
    }
    
    if($num_rounds != 0) {
        $putts_per_hole = ($row_stats['total_putts'] / $num_rounds) / 18;
    } else {
        $putts_per_hole = 0;
    }

    echo "
    <hr style='width:80%; margin:0 auto; margin-bottom:15px;'>
    <span style='font-size:16px; color:#ececec;'><strong>Putting </strong> Stats</span>
    <table class='table table-striped' style='margin-top:15px;'>
      <thead>
        <tr>
          <td>Stat</td>
          <td>Result</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Avg Putts / Hole</td><td>"; if($num_rounds != '') { echo number_format($putts_per_hole, 2); } else { echo "0"; } echo"</td>
        </tr>
        <tr>
          <td>Putts Per Round</td><td>"; if($num_rounds != '') { echo number_format($putts_per_round,1); } else { echo "0"; } echo "</td>
        </tr>
        <tr>
          <td>Total Putts</td><td>"; if($row_stats['total_putts'] != '') { echo $row_stats['total_putts']; } else { echo "0"; } echo"</td>
        </tr>
        <tr>
      </tbody>
    </table>
    ";
    echo"
  </div>";
}
?>