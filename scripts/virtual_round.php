<?php
include('includes/connection.php'); 
global $con; 

if(isset($_POST['stroke_sub'])) {
  $get_my_round = "SELECT * FROM user_rounds WHERE round_id = '".$_POST['my_round']."'"; 
  $run_my_round = mysqli_query($con, $get_my_round); 
  $row_my_round = mysqli_fetch_array($run_my_round); 

  $get_their_round = "SELECT * FROM user_rounds WHERE round_id = '".$_POST['their_round']."'"; 
  $run_their_round = mysqli_query($con, $get_their_round); 
  $row_their_round = mysqli_fetch_array($run_their_round); 

  $get_handi = "SELECT * FROM courses WHERE course_id = '".$row_my_round['c_id']."'"; 
  $run_handi = mysqli_query($con, $get_handi); 
  $row_handi = mysqli_fetch_array($run_handi); 

  if($row_my_round['total'] < $row_their_round['total']) {
    $winner = $row_my_round['user_name']; 
  } elseif($row_my_round['total'] > $row_their_round['total']) {
    $winner = $row_their_round['user_name']; 
  } elseif($row_my_round['total'] == $row_their_round['total']) {
    $winner = 'Push'; 
  }

  $stroke_insert = "INSERT INTO virtual_rounds (match_type, my_user_id, my_round_id, their_user_id, their_round_id, my_score, their_score, winner) VALUES ('stroke', '".$row_my_round['user_id']."', '".$row_my_round['round_id']."', '".$row_their_round['user_id']."', '".$row_their_round['round_id']."', '".$row_my_round['total']."', '".$row_their_round['total']."', '".$winner."')"; 

  $run_stroke = mysqli_query($con, $stroke_insert); 

  $get_virtual_id = "SELECT * FROM virtual_rounds ORDER BY virtual_round_id DESC LIMIT 1"; 
  $run_virtual_id = mysqli_query($con, $get_virtual_id); 
  $row_virtual_id = mysqli_fetch_array($run_virtual_id); 

  if($run_stroke) {
    echo "<script>window.open('stroke-play-results.php?virtual_round_id=".$row_virtual_id['virtual_round_id']."', '_self')</script>"; 
  }
}

if(isset($_POST['match_sub'])) {
  $get_my_round = "SELECT * FROM user_rounds WHERE round_id = '".$_POST['my_round']."'"; 
  $run_my_round = mysqli_query($con, $get_my_round); 
  $row_my_round = mysqli_fetch_array($run_my_round); 

  $get_their_round = "SELECT * FROM user_rounds WHERE round_id = '".$_POST['their_round']."'"; 
  $run_their_round = mysqli_query($con, $get_their_round); 
  $row_their_round = mysqli_fetch_array($run_their_round); 

  // hole 1

  if($row_my_round['hole1'] < $row_their_round['hole1']) {
    $hole1_winner = $row_my_round['user_name']; 
  } elseif($row_my_round['hole1'] > $row_their_round['hole1']) {
    $hole1_winner = $row_their_round['user_name']; 
  } elseif($row_my_round['hole1'] = $row_their_round['hole1']) {
    $hole1_winner = 'Push'; 
  }

  $score1a; 
    if ($row_my_round['hole1'] < $row_their_round['hole1']) {
      $score1a = 1; 
    }
  $score1b; 
    if ($row_my_round['hole1'] > $row_their_round['hole1']) {
      $score1b = 1;
    }

  // end hole 1
  // hole 2 

  if($row_my_round['hole2'] < $row_their_round['hole2']) {
    $hole2_winner = $row_my_round['user_name']; 
  } elseif($row_my_round['hole2'] > $row_their_round['hole2']) {
    $hole2_winner = $row_their_round['user_name']; 
  } elseif($row_my_round['hole2'] = $row_their_round['hole2']) {
    $hole2_winner = 'Push'; 
  }

  $score2a; 
    if ($row_my_round['hole2'] < $row_their_round['hole2']) {
      $score2a = 1; 
    }
  $score2b; 
    if ($row_my_round['hole2'] > $row_their_round['hole2']) {
      $score2b = 1;
    }

  //end hole 2
  // hole 3

  if($row_my_round['hole3'] < $row_their_round['hole3']) {
    $hole3_winner = $row_my_round['user_name']; 
  } elseif($row_my_round['hole3'] > $row_their_round['hole3']) {
    $hole3_winner = $row_their_round['user_name']; 
  } elseif($row_my_round['hole3'] = $row_their_round['hole3']) {
    $hole3_winner = 'Push'; 
  }

  $score3a; 
    if ($row_my_round['hole3'] < $row_their_round['hole3']) {
      $score3a = 1; 
    }
  $score3b; 
    if ($row_my_round['hole3'] > $row_their_round['hole3']) {
      $score3b = 1;
    }

  // end hole 3
  // hole 4

  if($row_my_round['hole4'] < $row_their_round['hole4']) {
    $hole4_winner = $row_my_round['user_name']; 
  } elseif($row_my_round['hole4'] > $row_their_round['hole4']) {
    $hole4_winner = $row_their_round['user_name']; 
  } elseif($row_my_round['hole4'] = $row_their_round['hole4']) {
    $hole4_winner = 'Push'; 
  }

  $score4a; 
    if ($row_my_round['hole4'] < $row_their_round['hole4']) {
      $score4a = 1; 
    }
  $score4b; 
    if ($row_my_round['hole4'] > $row_their_round['hole4']) {
      $score4b = 1;
    }

  // end hole 4
  // hole 5 

  if($row_my_round['hole5'] < $row_their_round['hole5']) {
    $hole5_winner = $row_my_round['user_name']; 
  } elseif($row_my_round['hole5'] > $row_their_round['hole5']) {
    $hole5_winner = $row_their_round['user_name']; 
  } elseif($row_my_round['hole5'] = $row_their_round['hole5']) {
    $hole5_winner = 'Push'; 
  }

  $score5a; 
    if ($row_my_round['hole5'] < $row_their_round['hole5']) {
      $score5a = 1; 
    }
  $score5b; 
    if ($row_my_round['hole5'] > $row_their_round['hole5']) {
      $score5b = 1;
    }

  // end hole 5 
  // hole 6

  if($row_my_round['hole6'] < $row_their_round['hole6']) {
    $hole6_winner = $row_my_round['user_name']; 
  } elseif($row_my_round['hole6'] > $row_their_round['hole6']) {
    $hole6_winner = $row_their_round['user_name']; 
  } elseif($row_my_round['hole6'] = $row_their_round['hole6']) {
    $hole6_winner = 'Push'; 
  }

  $score6a; 
    if ($row_my_round['hole6'] < $row_their_round['hole6']) {
      $score6a = 1; 
    }
  $score6b; 
    if ($row_my_round['hole6'] > $row_their_round['hole6']) {
      $score6b = 1;
    }

  // end hole 6
  // hole 7

  if($row_my_round['hole7'] < $row_their_round['hole7']) {
    $hole7_winner = $row_my_round['user_name']; 
  } elseif($row_my_round['hole7'] > $row_their_round['hole7']) {
    $hole7_winner = $row_their_round['user_name']; 
  } elseif($row_my_round['hole7'] = $row_their_round['hole7']) {
    $hole7_winner = 'Push'; 
  }

  $score7a; 
    if ($row_my_round['hole7'] < $row_their_round['hole7']) {
      $score7a = 1; 
    }
  $score7b; 
    if ($row_my_round['hole7'] > $row_their_round['hole7']) {
      $score7b = 1;
    }


  // end hole 7
  // hole8 

  if($row_my_round['hole8'] < $row_their_round['hole8']) {
    $hole8_winner = $row_my_round['user_name']; 
  } elseif($row_my_round['hole8'] > $row_their_round['hole8']) {
    $hole8_winner = $row_their_round['user_name']; 
  } elseif($row_my_round['hole8'] = $row_their_round['hole8']) {
    $hole8_winner = 'Push'; 
  }

  $score8a; 
    if ($row_my_round['hole8'] < $row_their_round['hole8']) {
      $score8a = 1; 
    }
  $score8b; 
    if ($row_my_round['hole8'] > $row_their_round['hole8']) {
      $score8b = 1;
    }


  // end hole 8
  // hole 9 

  if($row_my_round['hole9'] < $row_their_round['hole9']) {
    $hole9_winner = $row_my_round['user_name']; 
  } elseif($row_my_round['hole9'] > $row_their_round['hole9']) {
    $hole9_winner = $row_their_round['user_name']; 
  } elseif($row_my_round['hole9'] = $row_their_round['hole9']) {
    $hole9_winner = 'Push'; 
  }

  $score9a; 
    if ($row_my_round['hole9'] < $row_their_round['hole9']) {
      $score9a = 1; 
    }
  $score9b; 
    if ($row_my_round['hole9'] > $row_their_round['hole9']) {
      $score9b = 1;
    }


  // end hole 9 
  // hole 10

  if($row_my_round['hole10'] < $row_their_round['hole10']) {
    $hole10_winner = $row_my_round['user_name']; 
  } elseif($row_my_round['hole10'] > $row_their_round['hole10']) {
    $hole10_winner = $row_their_round['user_name']; 
  } elseif($row_my_round['hole10'] = $row_their_round['hole10']) {
    $hole10_winner = 'Push'; 
  }

  $score10a; 
    if ($row_my_round['hole10'] < $row_their_round['hole10']) {
      $score10a = 1; 
    }
  $score10b; 
    if ($row_my_round['hole10'] > $row_their_round['hole10']) {
      $score10b = 1;
    }


  // end hole 10
  // hole 11

  if($row_my_round['hole11'] < $row_their_round['hole11']) {
    $hole11_winner = $row_my_round['user_name']; 
  } elseif($row_my_round['hole11'] > $row_their_round['hole11']) {
    $hole11_winner = $row_their_round['user_name']; 
  } elseif($row_my_round['hole11'] = $row_their_round['hole11']) {
    $hole11_winner = 'Push'; 
  }

  $score11a; 
    if ($row_my_round['hole11'] < $row_their_round['hole11']) {
      $score11a = 1; 
    }
  $score11b; 
    if ($row_my_round['hole11'] > $row_their_round['hole11']) {
      $score11b = 1;
    }


  // end hole 11
  // hole 12

  if($row_my_round['hole12'] < $row_their_round['hole12']) {
    $hole12_winner = $row_my_round['user_name']; 
  } elseif($row_my_round['hole12'] > $row_their_round['hole12']) {
    $hole12_winner = $row_their_round['user_name']; 
  } elseif($row_my_round['hole12'] = $row_their_round['hole12']) {
    $hole12_winner = 'Push'; 
  }

  $score12a; 
    if ($row_my_round['hole12'] < $row_their_round['hole12']) {
      $score12a = 1; 
    }
  $score12b; 
    if ($row_my_round['hole12'] > $row_their_round['hole12']) {
      $score12b = 1;
    }


  // end hole 12
  // hole 13

  if($row_my_round['hole13'] < $row_their_round['hole13']) {
    $hole13_winner = $row_my_round['user_name']; 
  } elseif($row_my_round['hole13'] > $row_their_round['hole13']) {
    $hole13_winner = $row_their_round['user_name']; 
  } elseif($row_my_round['hole13'] = $row_their_round['hole13']) {
    $hole13_winner = 'Push'; 
  }

  $score13a; 
    if ($row_my_round['hole13'] < $row_their_round['hole13']) {
      $score13a = 1; 
    }
  $score13b; 
    if ($row_my_round['hole13'] > $row_their_round['hole13']) {
      $score13b = 1;
    }


  // end hole 13
  // hole 14

  if($row_my_round['hole14'] < $row_their_round['hole14']) {
    $hole14_winner = $row_my_round['user_name']; 
  } elseif($row_my_round['hole14'] > $row_their_round['hole14']) {
    $hole14_winner = $row_their_round['user_name']; 
  } elseif($row_my_round['hole14'] = $row_their_round['hole14']) {
    $hole14_winner = 'Push'; 
  }

  $score14a; 
    if ($row_my_round['hole14'] < $row_their_round['hole14']) {
      $score14a = 1; 
    }
  $score14b; 
    if ($row_my_round['hole14'] > $row_their_round['hole14']) {
      $score14b = 1;
    }


  // end hole 14
  // hole 15

  if($row_my_round['hole15'] < $row_their_round['hole15']) {
    $hole15_winner = $row_my_round['user_name']; 
  } elseif($row_my_round['hole15'] > $row_their_round['hole15']) {
    $hole15_winner = $row_their_round['user_name']; 
  } elseif($row_my_round['hole15'] = $row_their_round['hole15']) {
    $hole15_winner = 'Push'; 
  }

  $score15a; 
    if ($row_my_round['hole15'] < $row_their_round['hole15']) {
      $score15a = 1; 
    }
  $score15b; 
    if ($row_my_round['hole15'] > $row_their_round['hole15']) {
      $score15b = 1;
    }


  // end hole 15
  // hole 16

  if($row_my_round['hole16'] < $row_their_round['hole16']) {
    $hole16_winner = $row_my_round['user_name']; 
  } elseif($row_my_round['hole16'] > $row_their_round['hole16']) {
    $hole16_winner = $row_their_round['user_name']; 
  } elseif($row_my_round['hole16'] = $row_their_round['hole16']) {
    $hole16_winner = 'Push'; 
  }

  $score16a; 
    if ($row_my_round['hole16'] < $row_their_round['hole16']) {
      $score16a = 1; 
    }
  $score16b; 
    if ($row_my_round['hole16'] > $row_their_round['hole16']) {
      $score16b = 1;
    }


  // end hole 16
  // hole 17 

  if($row_my_round['hole17'] < $row_their_round['hole17']) {
    $hole17_winner = $row_my_round['user_name']; 
  } elseif($row_my_round['hole17'] > $row_their_round['hole17']) {
    $hole17_winner = $row_their_round['user_name']; 
  } elseif($row_my_round['hole17'] = $row_their_round['hole17']) {
    $hole17_winner = 'Push'; 
  }

  $score17a; 
    if ($row_my_round['hole17'] < $row_their_round['hole17']) {
      $score17a = 1; 
    }
  $score17b; 
    if ($row_my_round['hole17'] > $row_their_round['hole17']) {
      $score17b = 1;
    }


  // end hole 17 
  // hole 18 

  if($row_my_round['hole18'] < $row_their_round['hole18']) {
    $hole18_winner = $row_my_round['user_name']; 
  } elseif($row_my_round['hole18'] > $row_their_round['hole18']) {
    $hole18_winner = $row_their_round['user_name']; 
  } elseif($row_my_round['hole18'] = $row_their_round['hole18']) {
    $hole18_winner = 'Push'; 
  }

  $score18a; 
    if ($row_my_round['hole18'] < $row_their_round['hole18']) {
      $score18a = 1; 
    }
  $score18b; 
    if ($row_my_round['hole18'] > $row_their_round['hole18']) {
      $score18b = 1;
    }

  // end hole 18

  $total_player_a = ($score1a + $score2a + $score3a + $score4a + $score5a + $score6a + $score7a + $score8a + $score9a + $score10a + $score11a + $score12a + $score13a + $score14a + $score15a + $score16a + $score17a + $score18a); 
  $total_player_b = ($score1b + $score2b + $score3b + $score4b + $score5b + $score6b + $score7b + $score8b + $score9b + $score10b + $score11b + $score12b + $score13b + $score14b + $score15b + $score16b + $score17b + $score18b);

  if($total_player_a > $total_player_b) {
    $winner = $row_my_round['user_name']; 
  } elseif($total_player_a < $total_player_b) {
    $winner = $row_their_round['user_name']; 
  } elseif($total_player_a = $total_player_b) {
    $winner = 'Push'; 
  }

  $match_insert = "INSERT INTO virtual_rounds (match_type, my_user_id, my_round_id, their_user_id, their_round_id, my_score, their_score, winner) VALUES ('match', '".$row_my_round['user_id']."', '".$row_my_round['round_id']."', '".$row_their_round['user_id']."', '".$row_their_round['round_id']."', '".$total_player_a."', '".$total_player_b."', '".$winner."')"; 

  $run_match = mysqli_query($con, $match_insert); 

  $get_virtual_id = "SELECT * FROM virtual_rounds ORDER BY virtual_round_id DESC LIMIT 1"; 
  $run_virtual_id = mysqli_query($con, $get_virtual_id); 
  $row_virtual_id = mysqli_fetch_array($run_virtual_id); 

  if($run_match) {
    echo "<script>window.open('match-play-results.php?virtual_round_id=".$row_virtual_id['virtual_round_id']."', '_self')</script>"; 
  }

}

?>
