<?php 
	include("includes/connection.php");

	global $con;
	$user = $_SESSION["user_id"];

	$get_user = "SELECT * FROM users WHERE user_id = '$user'";
	$run_user = mysqli_query($con,$get_user);
	while($row_user = mysqli_fetch_array($run_user)) {

	if(isset($_POST['score_sub'])) {

	$hole1 = $_POST["hole1"];
	$hole2 = $_POST["hole2"];
	$hole3 = $_POST["hole3"];
    $hole4 = $_POST["hole4"];
    $hole5 = $_POST["hole5"];
    $hole6 = $_POST["hole6"];
    $hole7 = $_POST["hole7"];
    $hole8 = $_POST["hole8"];
    $hole9 = $_POST["hole9"];
    $hole10 = $_POST["hole10"];
    $hole11 = $_POST["hole11"];
    $hole12 = $_POST["hole12"];
    $hole13 = $_POST["hole13"];
    $hole14 = $_POST["hole14"];
    $hole15 = $_POST["hole15"];
    $hole16 = $_POST["hole16"];
    $hole17 = $_POST["hole17"];
    $hole18 = $_POST["hole18"];
    $date = $_POST['date_played'];

    $value = $_POST['course_name'];
    $explode = explode("_",$value,2);
    $course_id = $explode[0];
    $course = $explode[1];

    $value2 = $_POST['tee_played'];
    $explode2 = explode("_",$value2,3);
    $tee_played = $explode2[0];
    $cor_rating = $explode2[1];
    $cor_slope = $explode2[2];

		$get_course = "SELECT * FROM courses WHERE course_id = $course_id";
		$run_course = mysqli_query($con,$get_course);
		$row_course = mysqli_fetch_array($run_course);

		if($row_course['hole_1_par'] == 5) {
			if($hole1 - $row_course['hole_1_par'] == -3) {
				$hole1_diff = -9;
			} elseif($hole1 - $row_course['hole_1_par'] == -2) {
				$hole1_diff = -8;
			} else {
				$hole1_diff = $hole1 - $row_course['hole_1_par'];
			}
		} elseif($row_course['hole_1_par'] == 3) {
			if($hole1 - $row_course['hole_1_par'] == -2) {
				$hole1_diff = -10;
			} else {
				$hole1_diff = $hole1 - $row_course['hole_1_par'];
			}
		} elseif($row_course['hole_1_par'] == 4) {
			if($hole1 - $row_course['hole_1_par'] == -2) {
				$hole1_diff = -8;
			} elseif($hole1 - $row_course['hole_1_par'] == -3) {
				$hole1_diff = -10;
			} else {
				$hole1_diff = $hole1 - $row_course['hole_1_par'];
			}
		}

		if($row_course['hole_2_par'] == 5) {
			if($hole2 - $row_course['hole_2_par'] == -3) {
				$hole2_diff = -9;
			} elseif($hole2 - $row_course['hole_2_par'] == -2) {
				$hole2_diff = -8;
			} else {
				$hole2_diff = $hole2 - $row_course['hole_2_par'];
			}
		} elseif($row_course['hole_2_par'] == 3) {
			if($hole2 - $row_course['hole_2_par'] == -2) {
				$hole2_diff = -10;
			} else {
				$hole2_diff = $hole2 - $row_course['hole_2_par'];
			}
		} elseif($row_course['hole_2_par'] == 4) {
			if($hole2 - $row_course['hole_2_par'] == -2) {
				$hole2_diff = -8;
			} elseif($hole2 - $row_course['hole_2_par'] == -3) {
				$hole2_diff = -10;
			} else {
				$hole2_diff = $hole2 - $row_course['hole_2_par'];
			}
		}

		if($row_course['hole_3_par'] == 5) {
			if($hole3 - $row_course['hole_3_par'] == -3) {
				$hole3_diff = -9;
			} elseif($hole3 - $row_course['hole_3_par'] == -2) {
				$hole3_diff = -8;
			} else {
				$hole3_diff = $hole3 - $row_course['hole_3_par'];
			}
		} elseif($row_course['hole_3_par'] == 3) {
			if($hole3 - $row_course['hole_3_par'] == -2) {
				$hole3_diff = -10;
			} else {
				$hole3_diff = $hole3 - $row_course['hole_3_par'];
			}
		} elseif($row_course['hole_3_par'] == 4) {
			if($hole3 - $row_course['hole_3_par'] == -2) {
				$hole3_diff = -8;
			} elseif($hole3 - $row_course['hole_3_par'] == -3) {
				$hole3_diff = -10;
			} else {
				$hole3_diff = $hole3 - $row_course['hole_3_par'];
			}
		}

		if($row_course['hole_4_par'] == 5) {
			if($hole4 - $row_course['hole_4_par'] == -3) {
				$hole4_diff = -9;
			} elseif($hole4 - $row_course['hole_4_par'] == -2) {
				$hole4_diff = -10;
			} else {
				$hole4_diff = $hole4 - $row_course['hole_4_par'];
			}
		} elseif($row_course['hole_4_par'] == 3) {
			if($hole4 - $row_course['hole_4_par'] == -2) {
				$hole4_diff = -10;
			} else {
				$hole4_diff = $hole4 - $row_course['hole_4_par'];
			}
		} elseif($row_course['hole_4_par'] == 4) {
			if($hole4 - $row_course['hole_4_par'] == -2) {
				$hole4_diff = -8;
			} elseif($hole4 - $row_course['hole_4_par'] == -3) {
				$hole4_diff = -10;
			} else {
				$hole4_diff = $hole4 - $row_course['hole_4_par'];
			}
		}

		if($row_course['hole_5_par'] == 5) {
			if($hole5 - $row_course['hole_5_par'] == -3) {
				$hole5_diff = -9;
			} elseif($hole5 - $row_course['hole_5_par'] == -2) {
				$hole5_diff = -8;
			} else {
				$hole5_diff = $hole5 - $row_course['hole_5_par'];
			}
		} elseif($row_course['hole_5_par'] == 3) {
			if($hole5 - $row_course['hole_5_par'] == -2) {
				$hole5_diff = -10;
			} else {
				$hole5_diff = $hole5 - $row_course['hole_5_par'];
			}
		} elseif($row_course['hole_5_par'] == 4) {
			if($hole5 - $row_course['hole_5_par'] == -2) {
				$hole5_diff = -8;
			} elseif($hole5 - $row_course['hole_5_par'] == -3) {
				$hole5_diff = -10;
			} else {
				$hole5_diff = $hole5 - $row_course['hole_5_par'];
			}
		}

		if($row_course['hole_6_par'] == 5) {
			if($hole6 - $row_course['hole_6_par'] == -3) {
				$hole6_diff = -9;
			} elseif($hole6 - $row_course['hole_6_par'] == -2) {
				$hole6_diff = -8;
			} else {
				$hole6_diff = $hole6 - $row_course['hole_6_par'];
			}
		} elseif($row_course['hole_6_par'] == 3) {
			if($hole6 - $row_course['hole_6_par'] == -2) {
				$hole6_diff = -10;
			} else {
				$hole6_diff = $hole6 - $row_course['hole_6_par'];
			}
		} elseif($row_course['hole_6_par'] == 4) {
			if($hole6 - $row_course['hole_6_par'] == -2) {
				$hole6_diff = -8;
			} elseif($hole6 - $row_course['hole_6_par'] == -3) {
				$hole6_diff = -10;
			} else {
				$hole6_diff = $hole6 - $row_course['hole_6_par'];
			}
		}

		if($row_course['hole_7_par'] == 5) {
			if($hole7 - $row_course['hole_7_par'] == -3) {
				$hole7_diff = -9;
			} elseif($hole7 - $row_course['hole_7_par'] == -2) {
				$hole7_diff = -8;
			} else {
				$hole7_diff = $hole7 - $row_course['hole_7_par'];
			}
		} elseif($row_course['hole_7_par'] == 3) {
			if($hole7 - $row_course['hole_7_par'] == -2) {
				$hole7_diff = -10;
			} else {
				$hole7_diff = $hole7 - $row_course['hole_7_par'];
			}
		} elseif($row_course['hole_7_par'] == 4) {
			if($hole7 - $row_course['hole_7_par'] == -2) {
				$hole7_diff = -8;
			} elseif($hole2 - $row_course['hole_7_par'] == -3) {
				$hole7_diff = -10;
			} else {
				$hole7_diff = $hole7 - $row_course['hole_7_par'];
			}
		}

		if($row_course['hole_8_par'] == 5) {
			if($hole8 - $row_course['hole_8_par'] == -3) {
				$hole8_diff = -9;
			} elseif($hole8 - $row_course['hole_8_par'] == -2) {
				$hole8_diff = -8;
			} else {
				$hole8_diff = $hole8 - $row_course['hole_8_par'];
			}
		} elseif($row_course['hole_8_par'] == 3) {
			if($hole8 - $row_course['hole_8_par'] == -2) {
				$hole8_diff = -10;
			} else {
				$hole8_diff = $hole8 - $row_course['hole_8_par'];
			}
		} elseif($row_course['hole_8_par'] == 4) {
			if($hole8 - $row_course['hole_8_par'] == -2) {
				$hole8_diff = -8;
			} elseif($hole8 - $row_course['hole_8_par'] == -3) {
				$hole8_diff = -10;
			} else {
				$hole8_diff = $hole8 - $row_course['hole_8_par'];
			}
		}

		if($row_course['hole_9_par'] == 5) {
			if($hole9 - $row_course['hole_9_par'] == -3) {
				$hole9_diff = -9;
			} elseif($hole9 - $row_course['hole_9_par'] == -2) {
				$hole9_diff = -8;
			} else {
				$hole9_diff = $hole9 - $row_course['hole_9_par'];
			}
		} elseif($row_course['hole_9_par'] == 3) {
			if($hole9 - $row_course['hole_9_par'] == -2) {
				$hole9_diff = -10;
			} else {
				$hole9_diff = $hole9 - $row_course['hole_9_par'];
			}
		} elseif($row_course['hole_9_par'] == 4) {
			if($hole9 - $row_course['hole_9_par'] == -2) {
				$hole9_diff = -8;
			} elseif($hole9 - $row_course['hole_9_par'] == -3) {
				$hole9_diff = -10;
			} else {
				$hole9_diff = $hole9 - $row_course['hole_9_par'];
			}
		}

		if($row_course['hole_10_par'] == 5) {
			if($hole10 - $row_course['hole_10_par'] == -3) {
				$hole10_diff = -9;
			} elseif($hole10 - $row_course['hole_10_par'] == -2) {
				$hole10_diff = -8;
			} else {
				$hole10_diff = $hole10 - $row_course['hole_10_par'];
			}
		} elseif($row_course['hole_10_par'] == 3) {
			if($hole10 - $row_course['hole_10_par'] == -2) {
				$hole10_diff = -10;
			} else {
				$hole10_diff = $hole10 - $row_course['hole_10_par'];
			}
		} elseif($row_course['hole_10_par'] == 4) {
			if($hole10 - $row_course['hole_10_par'] == -2) {
				$hole10_diff = -8;
			} elseif($hole10 - $row_course['hole_10_par'] == -3) {
				$hole10_diff = -10;
			} else {
				$hole10_diff = $hole10 - $row_course['hole_10_par'];
			}
		}

		if($row_course['hole_11_par'] == 5) {
			if($hole11 - $row_course['hole_11_par'] == -3) {
				$hole11_diff = -9;
			} elseif($hole11 - $row_course['hole_11_par'] == -2) {
				$hole11_diff = -8;
			} else {
				$hole11_diff = $hole11 - $row_course['hole_11_par'];
			}
		} elseif($row_course['hole_11_par'] == 3) {
			if($hole11 - $row_course['hole_11_par'] == -2) {
				$hole11_diff = -10;
			} else {
				$hole11_diff = $hole11 - $row_course['hole_11_par'];
			}
		} elseif($row_course['hole_11_par'] == 4) {
			if($hole11 - $row_course['hole_11_par'] == -2) {
				$hole11_diff = -8;
			} elseif($hole11 - $row_course['hole_11_par'] == -3) {
				$hole11_diff = -10;
			} else {
				$hole11_diff = $hole11 - $row_course['hole_11_par'];
			}
		}

		if($row_course['hole_12_par'] == 5) {
			if($hole12 - $row_course['hole_12_par'] == -3) {
				$hole12_diff = -9;
			} elseif($hole12 - $row_course['hole_12_par'] == -2) {
				$hole12_diff = -8;
			} else {
				$hole12_diff = $hole12 - $row_course['hole_12_par'];
			}
		} elseif($row_course['hole_12_par'] == 3) {
			if($hole12 - $row_course['hole_12_par'] == -2) {
				$hole12_diff = -10;
			} else {
				$hole12_diff = $hole12 - $row_course['hole_12_par'];
			}
		} elseif($row_course['hole_12_par'] == 4) {
			if($hole12 - $row_course['hole_12_par'] == -2) {
				$hole12_diff = -8;
			} elseif($hole12 - $row_course['hole_12_par'] == -3) {
				$hole12_diff = -10;
			} else {
				$hole12_diff = $hole12 - $row_course['hole_12_par'];
			}
		}

		if($row_course['hole_13_par'] == 5) {
			if($hole13 - $row_course['hole_13_par'] == -3) {
				$hole13_diff = -9;
			} elseif($hole13 - $row_course['hole_13_par'] == -2) {
				$hole13_diff = -8;
			} else {
				$hole13_diff = $hole13 - $row_course['hole_13_par'];
			}
		} elseif($row_course['hole_13_par'] == 3) {
			if($hole13 - $row_course['hole_13_par'] == -2) {
				$hole13_diff = -10;
			} else {
				$hole13_diff = $hole13 - $row_course['hole_13_par'];
			}
		} elseif($row_course['hole_13_par'] == 4) {
			if($hole13 - $row_course['hole_13_par'] == -2) {
				$hole13_diff = -8;
			} elseif($hole13 - $row_course['hole_13_par'] == -3) {
				$hole13_diff = -10;
			} else {
				$hole13_diff = $hole13 - $row_course['hole_13_par'];
			}
		}

		if($row_course['hole_14_par'] == 5) {
			if($hole14 - $row_course['hole_14_par'] == -3) {
				$hole14_diff = -9;
			} elseif($hole14 - $row_course['hole_14_par'] == -2) {
				$hole14_diff = -8;
			} else {
				$hole14_diff = $hole14 - $row_course['hole_14_par'];
			}
		} elseif($row_course['hole_14_par'] == 3) {
			if($hole14 - $row_course['hole_14_par'] == -2) {
				$hole14_diff = -10;
			} else {
				$hole14_diff = $hole14 - $row_course['hole_14_par'];
			}
		} elseif($row_course['hole_14_par'] == 4) {
			if($hole14 - $row_course['hole_14_par'] == -2) {
				$hole14_diff = -8;
			} elseif($hole14 - $row_course['hole_14_par'] == -3) {
				$hole14_diff = -10;
			} else {
				$hole14_diff = $hole14 - $row_course['hole_14_par'];
			}
		}

		if($row_course['hole_15_par'] == 5) {
			if($hole15 - $row_course['hole_15_par'] == -3) {
				$hole15_diff = -9;
			} elseif($hole15 - $row_course['hole_15_par'] == -2) {
				$hole15_diff = -8;
			} else {
				$hole15_diff = $hole15 - $row_course['hole_15_par'];
			}
		} elseif($row_course['hole_15_par'] == 3) {
			if($hole15 - $row_course['hole_15_par'] == -2) {
				$hole15_diff = -10;
			} else {
				$hole15_diff = $hole15 - $row_course['hole_15_par'];
			}
		} elseif($row_course['hole_15_par'] == 4) {
			if($hole15 - $row_course['hole_15_par'] == -2) {
				$hole15_diff = -8;
			} elseif($hole15 - $row_course['hole_15_par'] == -3) {
				$hole15_diff = -10;
			} else {
				$hole15_diff = $hole15 - $row_course['hole_15_par'];
			}
		}

		if($row_course['hole_16_par'] == 5) {
			if($hole16 - $row_course['hole_16_par'] == -3) {
				$hole16_diff = -9;
			} elseif($hole16 - $row_course['hole_16_par'] == -2) {
				$hole16_diff = -8;
			} else {
				$hole16_diff = $hole16 - $row_course['hole_16_par'];
			}
		} elseif($row_course['hole_16_par'] == 3) {
			if($hole16 - $row_course['hole_16_par'] == -2) {
				$hole16_diff = -10;
			} else {
				$hole16_diff = $hole16 - $row_course['hole_16_par'];
			}
		} elseif($row_course['hole_16_par'] == 4) {
			if($hole16 - $row_course['hole_16_par'] == -2) {
				$hole16_diff = -8;
			} elseif($hole16 - $row_course['hole_16_par'] == -3) {
				$hole16_diff = -10;
			} else {
				$hole16_diff = $hole16 - $row_course['hole_16_par'];
			}
		}

		if($row_course['hole_17_par'] == 5) {
			if($hole17 - $row_course['hole_17_par'] == -3) {
				$hole17_diff = -9;
			} elseif($hole17 - $row_course['hole_17_par'] == -2) {
				$hole17_diff = -8;
			} else {
				$hole17_diff = $hole17 - $row_course['hole_17_par'];
			}
		} elseif($row_course['hole_17_par'] == 3) {
			if($hole17 - $row_course['hole_17_par'] == -2) {
				$hole17_diff = -10;
			} else {
				$hole17_diff = $hole17 - $row_course['hole_17_par'];
			}
		} elseif($row_course['hole_17_par'] == 4) {
			if($hole17 - $row_course['hole_17_par'] == -2) {
				$hole17_diff = -8;
			} elseif($hole17 - $row_course['hole_17_par'] == -3) {
				$hole17_diff = -10;
			} else {
				$hole17_diff = $hole17 - $row_course['hole_17_par'];
			}
		}

		if($row_course['hole_18_par'] == 5) {
			if($hole18 - $row_course['hole_18_par'] == -3) {
				$hole18_diff = -9;
			} elseif($hole18 - $row_course['hole_18_par'] == -2) {
				$hole18_diff = -8;
			} else {
				$hole18_diff = $hole18 - $row_course['hole_18_par'];
			}
		} elseif($row_course['hole_18_par'] == 3) {
			if($hole18 - $row_course['hole_18_par'] == -2) {
				$hole18_diff = -10;
			} else {
				$hole18_diff = $hole18 - $row_course['hole_18_par'];
			}
		} elseif($row_course['hole_18_par'] == 4) {
			if($hole18 - $row_course['hole_18_par'] == -2) {
				$hole18_diff = -8;
			} elseif($hole18 - $row_course['hole_18_par'] == -3) {
				$hole18_diff = -10;
			} else {
				$hole18_diff = $hole18 - $row_course['hole_18_par'];
			}
		}

	    $totOut = ($hole1 + $hole2 + $hole3 + $hole4 + $hole5 + $hole6 + $hole7 + $hole8 + $hole9); 
	    $totIn = ($hole10 + $hole11 + $hole12 + $hole13 + $hole14 + $hole15 + $hole16 + $hole17 + $hole18);

	    $total = ($totOut + $totIn);

	    $diff = (($total - $cor_rating) * 113) / $cor_slope;

		$insert = "INSERT INTO user_rounds (user_id, c_id, date_played, user_name, user_last_name, course_name, tee_played, user_sex, cor_rating, cor_slope, hole1_par, hole2_par, hole3_par, hole4_par, hole5_par, hole6_par, hole7_par, hole8_par, hole9_par, hole10_par, hole11_par, hole12_par, hole13_par, hole14_par, hole15_par, hole16_par, hole17_par, hole18_par, hole1, hole2, hole3, hole4, hole5, hole6, hole7, hole8, hole9, hole10, hole11, hole12, hole13, hole14, hole15, hole16, hole17, hole18, totOut, totIn, total) VALUES ('".$row_user['user_id']."', '".$row_course['course_id']."', '$date', '".$row_user['user_name']."', '".$row_user['user_last_name']."', '$course', '$tee_played', '".$row_user['user_sex']."', '$cor_rating', '$cor_slope', '".$row_course['hole_1_par']."', '".$row_course['hole_2_par']."', '".$row_course['hole_3_par']."', '".$row_course['hole_4_par']."', '".$row_course['hole_5_par']."', '".$row_course['hole_6_par']."', '".$row_course['hole_7_par']."', '".$row_course['hole_8_par']."', '".$row_course['hole_9_par']."', '".$row_course['hole_10_par']."', '".$row_course['hole_11_par']."', '".$row_course['hole_12_par']."', '".$row_course['hole_13_par']."', '".$row_course['hole_14_par']."', '".$row_course['hole_15_par']."', '".$row_course['hole_16_par']."', '".$row_course['hole_17_par']."', '".$row_course['hole_18_par']."', '$hole1', '$hole2', '$hole3', '$hole4', '$hole5', '$hole6', '$hole7', '$hole8', '$hole9', '$hole10', '$hole11', '$hole12', '$hole13', '$hole14', '$hole15', '$hole16', '$hole17', '$hole18', '$totOut', '$totIn', '$total')";

		$handi_insert = "INSERT INTO hanidcap (user_id, user_name, user_last_name, date_played, course_name, total, cor_rating, cor_slope, diff) VALUES ('".$row_user['user_id']."', '".$row_user['user_name']."', '".$row_user['user_last_name']."', '$date', '$course', '$total', '$cor_rating', '$cor_slope', '$diff')";
		
		$run_insert = mysqli_query($con,$insert);

		$run_handi = mysqli_query($con,$handi_insert);

		$rnd = "SELECT * FROM user_rounds WHERE user_id = '".$row_user['user_id']."' ORDER BY round_id DESC LIMIT 1"; 
		$gt = mysqli_query($con, $rnd); 
		$r_id = mysqli_fetch_array($gt);

		$diff_1_insert = "INSERT INTO score_diff (user_id, score_diff, course_id, round_id) VALUES ('".$row_user['user_id']."', '$hole1_diff', '$course_id', '".$r_id['round_id']."')"; 
		$diff_2_insert = "INSERT INTO score_diff (user_id, score_diff, course_id, round_id) VALUES ('".$row_user['user_id']."', '$hole2_diff', '$course_id', '".$r_id['round_id']."')";
		$diff_3_insert = "INSERT INTO score_diff (user_id, score_diff, course_id, round_id) VALUES ('".$row_user['user_id']."', '$hole3_diff', '$course_id','".$r_id['round_id']."')";
		$diff_4_insert = "INSERT INTO score_diff (user_id, score_diff, course_id, round_id) VALUES ('".$row_user['user_id']."', '$hole4_diff', '$course_id', '".$r_id['round_id']."')";
		$diff_5_insert = "INSERT INTO score_diff (user_id, score_diff, course_id, round_id) VALUES ('".$row_user['user_id']."', '$hole5_diff', '$course_id', '".$r_id['round_id']."')";
		$diff_6_insert = "INSERT INTO score_diff (user_id, score_diff, course_id, round_id) VALUES ('".$row_user['user_id']."', '$hole6_diff', '$course_id', '".$r_id['round_id']."')";
		$diff_7_insert = "INSERT INTO score_diff (user_id, score_diff, course_id, round_id) VALUES ('".$row_user['user_id']."', '$hole7_diff', '$course_id', '".$r_id['round_id']."')";
		$diff_8_insert = "INSERT INTO score_diff (user_id, score_diff, course_id, round_id) VALUES ('".$row_user['user_id']."', '$hole8_diff', '$course_id', '".$r_id['round_id']."')";
		$diff_9_insert = "INSERT INTO score_diff (user_id, score_diff, course_id, round_id) VALUES ('".$row_user['user_id']."', '$hole9_diff', '$course_id', '".$r_id['round_id']."')";
		$diff_10_insert = "INSERT INTO score_diff (user_id, score_diff, course_id, round_id) VALUES ('".$row_user['user_id']."', '$hole10_diff', '$course_id', '".$r_id['round_id']."')";
		$diff_11_insert = "INSERT INTO score_diff (user_id, score_diff, course_id, round_id) VALUES ('".$row_user['user_id']."', '$hole11_diff', '$course_id', '".$r_id['round_id']."')";
		$diff_12_insert = "INSERT INTO score_diff (user_id, score_diff, course_id, round_id) VALUES ('".$row_user['user_id']."', '$hole12_diff', '$course_id', '".$r_id['round_id']."')";
		$diff_13_insert = "INSERT INTO score_diff (user_id, score_diff, course_id, round_id) VALUES ('".$row_user['user_id']."', '$hole13_diff', '$course_id', '".$r_id['round_id']."')";
		$diff_14_insert = "INSERT INTO score_diff (user_id, score_diff, course_id, round_id) VALUES ('".$row_user['user_id']."', '$hole14_diff', '$course_id', '".$r_id['round_id']."')";
		$diff_15_insert = "INSERT INTO score_diff (user_id, score_diff, course_id, round_id) VALUES ('".$row_user['user_id']."', '$hole15_diff', '$course_id', '".$r_id['round_id']."')";
		$diff_16_insert = "INSERT INTO score_diff (user_id, score_diff, course_id, round_id) VALUES ('".$row_user['user_id']."', '$hole16_diff', '$course_id', '".$r_id['round_id']."')";
		$diff_17_insert = "INSERT INTO score_diff (user_id, score_diff, course_id, round_id) VALUES ('".$row_user['user_id']."', '$hole17_diff', '$course_id', '".$r_id['round_id']."')";
		$diff_18_insert = "INSERT INTO score_diff (user_id, score_diff, course_id, round_id) VALUES ('".$row_user['user_id']."', '$hole18_diff', '$course_id', '".$r_id['round_id']."')"; 

		$run_diff1 = mysqli_query($con, $diff_1_insert);
		$run_diff2 = mysqli_query($con, $diff_2_insert);
		$run_diff3 = mysqli_query($con, $diff_3_insert);
		$run_diff4 = mysqli_query($con, $diff_4_insert);
		$run_diff5 = mysqli_query($con, $diff_5_insert);
		$run_diff6 = mysqli_query($con, $diff_6_insert);
		$run_diff7 = mysqli_query($con, $diff_7_insert);
		$run_diff8 = mysqli_query($con, $diff_8_insert);
		$run_diff9 = mysqli_query($con, $diff_9_insert);
		$run_diff10 = mysqli_query($con, $diff_10_insert);
		$run_diff11 = mysqli_query($con, $diff_11_insert);
		$run_diff12 = mysqli_query($con, $diff_12_insert);
		$run_diff13 = mysqli_query($con, $diff_13_insert);
		$run_diff14 = mysqli_query($con, $diff_14_insert);
		$run_diff15 = mysqli_query($con, $diff_15_insert);
		$run_diff16 = mysqli_query($con, $diff_16_insert);
		$run_diff17 = mysqli_query($con, $diff_17_insert);
		$run_diff18 = mysqli_query($con, $diff_18_insert);

		if($run_diff18) {
	    	echo "<script>window.open('my-rounds.php?user_id=".$row_user['user_id']."','_self')</script>";
		    } 
		}

	}



?>
