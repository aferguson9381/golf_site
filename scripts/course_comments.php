
  <div class="row">
    <div class='col-md-12'>
      <div class='feed-list'>
        <section class="tile color transparent-black">
          <!-- tile header -->
          <div class="tile-header">
            <h3><strong> Month</strong> Stats</h3>
            <hr style='width:80%; margin:0 auto;'> 
            <?php 

            $get_aces = "SELECT *, count(score_diff) AS aces FROM score_diff WHERE score_diff = '-10' AND course_id = '".$_GET['course_id']."'"; 
            $run_aces = mysqli_query($con, $get_aces); 
            $row_aces = mysqli_fetch_array($run_aces); 

            $get_dub_eag = "SELECT *, count(score_diff) AS dub_eagle FROM score_diff WHERE score_diff = '-9' AND course_id = '".$_GET['course_id']."'"; 
            $run_dub_eag = mysqli_query($con, $get_dub_eag); 
            $row_dub_eag = mysqli_fetch_array($run_dub_eag); 

            $get_eagles = "SELECT *, count(score_diff) AS eagles FROM score_diff WHERE score_diff = '-8' AND course_id = '".$_GET['course_id']."'"; 
            $run_eagles = mysqli_query($con, $get_eagles); 
            $row_eagles = mysqli_fetch_array($run_eagles); 

            $get_birdies = "SELECT *, count(score_diff) AS birdies FROM score_diff WHERE score_diff = '-1' AND course_id = '".$_GET['course_id']."'"; 
            $run_birdies = mysqli_query($con, $get_birdies); 
            $row_birdies = mysqli_fetch_array($run_birdies); 

            $get_rounds = "SELECT * FROM user_rounds WHERE month(date_played) = month(curdate()) and c_id = '".$_GET['course_id']."'"; 
            $run_rounds = mysqli_query($con, $get_rounds); 
            $num_rounds = mysqli_num_rows($run_rounds); 
            echo "
              <table class='table table-striped'>
                <tbody>
                  <tr>
                    <td>Rounds:</td>";
                    if($num_rounds <= 0) {
                      echo "<td>0</td>";
                    } else {
                      echo "<td>".number_format($num_rounds,0)."</td>";
                    }
                    echo"
                  </tr>
                  <tr>
                    <td>Holes in One: </td>
                    <td>".$row_aces['aces']."</td>
                  </tr>
                  <tr>
                    <td>Double Eagles: </td>
                    <td>".$row_dub_eag['dub_eagle']."</td>
                  </tr>
                  <tr>
                    <td>Eagles: </td>
                    <td>".$row_eagles['eagles']."</td>
                  </tr>
                  <tr>
                    <td>Birdies: </td>
                    <td>".$row_birdies['birdies']."</td>
                  </tr>
                </tbody>
              </table>";
            ?>
          </div>
        </section>
      </div>
    </div>
    <div class="clear"></div>
    <div class='col-md-12'>
      <div class='feed-list'>
        <section class="tile color transparent-black">
          <!-- tile header -->
          <div class="tile-header">
            <h1><strong> Comments</strong> &amp; Uploads <span><button class="btn btn-default bottommargin md-trigger" data-modal="modal-1">New Comment</button></span></h1>
            <div class="md-modal md-effect-1 md-white" id="modal-1">
              <div class="md-content">
                <div>
                  <form action="" method="post">
                    <textarea class="form-control" name='content' id="input05" rows="6"></textarea><br>
                    <?php echo"<input type='hidden' name='c_id' value='".$row_course['course_id']."'>" ?>
                    <button type="submit" name='sub' class="btn btn-slategray margin-bottom-20 pull-right">Post</button>
                    <button type="button" class="md-close btn btn-default pull-right" style="margin-right:15px;">Never Mind</button><br><br>
                  </form>
                  <?php include('includes/insert_course_comment.php'); ?>
                </div>
              </div>
            </div>
          </div>
              <hr style='width:80%; margin:0 auto; margin-bottom:15px;'>
          <!-- /tile header -->
          <!-- tile body -->
          <div class="tile-body">
          <?php
          include('includes/connection.php');
          include('includes/insert_course_comment_reply.php'); 
          global $con; 

          $get_user = "SELECT * FROM users WHERE user_id = '".$_SESSION['user_id']."'"; 
          $run_user = mysqli_query($con, $get_user); 
          $row_user = mysqli_fetch_array($run_user);

          $get_posts = "SELECT * FROM course_comments WHERE c_id = '".$row_course['course_id']."' ORDER BY course_comm_id DESC"; 
          $run_posts = mysqli_query($con, $get_posts); 
          while($row_posts = mysqli_fetch_array($run_posts)) {
            $get_users = "SELECT * FROM users WHERE user_id = '".$row_posts['user_id']."'"; 
            $run_users = mysqli_query($con, $get_users); 
            $row_users = mysqli_fetch_array($run_users); 

            $get_comments = "SELECT * FROM course_comments_replies WHERE course_comm_id = '".$row_posts['course_comm_id']."'"; 
            $run_comments = mysqli_query($con, $get_comments); 
            $num_comments = mysqli_num_rows($run_comments);

            echo"
          <article class='feed-post tile color transparent-black textured' style='padding:25px;'>
            <aside class='profile-photo'>
              <a href='#'>
                <img src='images/user/".$row_users['user_image']."' alt='' class='img-circle'>
              </a>
            </aside>
            <div class='feed-container'>
              <header>
                <div class='author'>
                  <a href='profile.php?user_id=".$row_users['user_id']."' style='color:#fff;'>".$row_users['user_name']." ".$row_users['user_last_name']."</a>
                  <small><span style='color:rgba(255,255,255,0.9);'>".date("M d", strtotime($row_posts['comm_date']))."<span></small>
                </div>                        
              </header>
              <div class='feed-content'>
                <p style='color:rgba(255,255,255,0.9);'>".$row_posts['course_comment']."</p>";
                if($row_posts['course_comm_img'] != '') {
                  echo "
                  <section id='colorbox-gallery'>
                    <div class='colorbox-list img-view'>
                      <img src='images/user-uploads/".$row_posts['course_comm_img']."' data-img='images/user-uploads/".$row_posts['course_comm_img']."' class='colorbox-img' alt>
                    </div>
                  </section>"; 
                } else {
                  echo ""; 
                }
              echo"
              </div>
              <footer>
                <a href='#'>
                  <i class='fa fa-comment' style='color:#fff;'></i>
                  Comments <span style='color:rgba(255,255,255,0.9);'>(".$num_comments.")</span>
                </a>
                <ul class='comments'>";
                  while($row_comments = mysqli_fetch_array($run_comments)) {
                    $get_com_guy = "SELECT * FROM users WHERE user_id = '".$row_comments['user_id']."'"; 
                    $run_com_guy = mysqli_query($con, $get_com_guy); 
                    $row_com_guy = mysqli_fetch_array($run_com_guy); 

                    echo"
                  <li>
                    <div class='profile-photo'>
                      <img src='images/user/".$row_com_guy['user_image']."' alt='' class='img-circle'>
                    </div>
                    <div class='comment-container'>
                      <a href='#' class='comment-author'>
                        ".$row_com_guy['user_name']." ".$row_com_guy['user_last_name']." <span style='font-size:12px; color:rgba(255,255,255,0.9);'><i>".date("M d", strtotime($row_comments['reply_date']))."</i></span>
                      </a><br>
                      <span style='color:rgba(255,255,255,0.9);'>".$row_comments['reply']."</span>
                    </div>
                  </li>";
                  }
                  echo"
                  <li class='comment-form'>
                    <div class='profile-photo'>
                      <img src='images/user/".$row_user['user_image']."' alt='' class='img-circle'>
                    </div>
                    
                    <div class='new-comment-container'>
                      <form action='' method='post'>
                        <input type='hidden' name='c_id' value='".$_GET['course_id']."'>
                        <input type='hidden' name='user_id' value='".$row_user['user_id']."'>
                        <input type='hidden' name='post_id' value='".$row_posts['course_comm_id']."'>
                        <textarea style='border-radius:4px !important;' class='form-control' name='comment' placeholder='Add a comment...' rows='2' required='required'></textarea>
                        <div class='post-toolbar' style='border-color:rgba(255,255,255,0);''>
                          <button class='btn btn-link' name='comment_sub'><span style='color:rgba(255,255,255,0.9);'>Post <i class='fa fa-share'></i></span></button>
                      </form>
                      </div>

                    </div>
                  </li>
                </ul>
              </footer>                   
            </div>
          </article>";
          }
          ?>
          <div class='text-center'>
            <a href='#' class='btn btn-default'>
              Load More …
            </a>
          </div>
          </div>
        </section>
      </div>
    </div>
  </div>