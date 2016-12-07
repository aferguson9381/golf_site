<?php 
include('includes/connection.php'); 
global $con;

if (isset($_POST['score_sub'])) {

	$team = $_POST['players'];
	$hole_1 = $_POST['hole_1'];
	$hole_2 = $_POST['hole_2'];
	$hole_3 = $_POST['hole_3'];
	$hole_4 = $_POST['hole_4'];
	$hole_5 = $_POST['hole_5'];
	$hole_6 = $_POST['hole_6'];
	$hole_7 = $_POST['hole_7'];
	$hole_8 = $_POST['hole_8'];
	$hole_9 = $_POST['hole_9'];
	$hole_10 = $_POST['hole_10'];
	$hole_11 = $_POST['hole_11'];
	$hole_12 = $_POST['hole_12'];
	$hole_13 = $_POST['hole_13'];
	$hole_14 = $_POST['hole_14'];
	$hole_15 = $_POST['hole_15'];
	$hole_16 = $_POST['hole_16'];
	$hole_17 = $_POST['hole_17'];
	$hole_18 = $_POST['hole_18'];

	$tot_score = $hole_1 + $hole_2 + $hole_3 + $hole_4 + $hole_5 + $hole_6 + $hole_7 + $hole_8 + $hole_9 + $hole_10 + $hole_11 + $hole_12 + $hole_13 + $hole_14 + $hole_15 + $hole_16 + $hole_17 + $hole_18;

	if ($tot_score == 73 || $tot_score == 76 || $tot_score == 81 || $tot_score == 86 || $tot_score == 91 || $tot_score == 96 || $tot_score == 101 || $tot_score == 106 || $tot_score == 111 || $tot_score == 116 || $tot_score == 121 || $tot_score == 126 || $tot_score == 131) {

		$adjustment = -2; 

	} elseif ($tot_score == 74 || $tot_score == 77 || $tot_score == 82 || $tot_score == 87 || $tot_score == 92 || $tot_score == 97 || $tot_score == 102 || $tot_score == 107 || $tot_score == 112 || $tot_score == 117 || $tot_score == 122 || $tot_score == 127 || $tot_score == 132) {

		$adjustment = -1;

	} elseif ($tot_score == 71 || $tot_score == 79 || $tot_score == 84 || $tot_score == 89 || $tot_score == 94 || $tot_score == 99 || $tot_score == 104 || $tot_score == 109 || $tot_score == 114 || $tot_score == 119 || $tot_score == 124 || $tot_score == 129 || $tot_score == 134) {

		$adjustment = 1;

	} elseif ($tot_score == 72 || $tot_score == 80 || $tot_score == 85 || $tot_score == 90 || $tot_score == 95 || $tot_score == 100 || $tot_score == 105 || $tot_score == 110 || $tot_score == 115 || $tot_score == 120 || $tot_score == 125 || $tot_score == 130 || $tot_score == 135) {

		$adjustment = 2;

	} 

	$final_score;
	if ($tot_score == 70 || $tot_score == 71 || $tot_score == 72) {

			$final_score = $tot_score + $adjustment; 

		} else {

			if ($tot_score == 73 || $tot_score == 74 || $tot_score == 75) {

				$worst = max($hole_1, $hole_2, $hole_3, $hole_4, $hole_5, $hole_6, $hole_7, $hole_8, $hole_9, $hole_10, $hole_11, $hole_12, $hole_13, $hole_14, $hole_15, $hole_16, $hole_17, $hole_18);

				$handicap = $worst / 2; 

				$new_score = $tot_score - $worst; 

				$final_score = ($new_score + $handicap) + $adjustment;

			} elseif ($tot_score == 76 || $tot_score == 77 || $tot_score == 78 || $tot_score == 79 || $tot_score == 80) {

				$worst = max($hole_1, $hole_2, $hole_3, $hole_4, $hole_5, $hole_6, $hole_7, $hole_8, $hole_9, $hole_10, $hole_11, $hole_12, $hole_13, $hole_14, $hole_15, $hole_16, $hole_17, $hole_18);

				$final_score = ($tot_score - $worst) + $adjustment;

			} elseif ($tot_score == 81 || $tot_score == 82 || $tot_score == 83 || $tot_score == 84 || $tot_score == 85) {

				$worst = array($hole_1, $hole_2, $hole_3, $hole_4, $hole_5, $hole_6, $hole_7, $hole_8, $hole_9, $hole_10, $hole_11, $hole_12, $hole_13, $hole_14, $hole_15, $hole_16, $hole_17, $hole_18);

				rsort($worst);

				$first = array_shift($worst);
				$second = array_shift($worst);

				$handicap2 = $second / 2; 

				$handicap = $first + $handicap2;

				$final_score = ($tot_score - $handicap) + ($adjustment); 

			} elseif ($tot_score == 86 || $tot_score == 87 || $tot_score == 88 || $tot_score == 89 || $tot_score == 90) {

				$worst = array($hole_1, $hole_2, $hole_3, $hole_4, $hole_5, $hole_6, $hole_7, $hole_8, $hole_9, $hole_10, $hole_11, $hole_12, $hole_13, $hole_14, $hole_15, $hole_16, $hole_17, $hole_18);

				rsort($worst);

				$first = array_shift($worst);
				$second = array_shift($worst);

				$handicap = $first + $second;

				$final_score = ($tot_score - $handicap) + ($adjustment); 

			} elseif ($tot_score == 91 || $tot_score == 92 || $tot_score == 93 || $tot_score == 94 || $tot_score == 95) {

				$worst = array($hole_1, $hole_2, $hole_3, $hole_4, $hole_5, $hole_6, $hole_7, $hole_8, $hole_9, $hole_10, $hole_11, $hole_12, $hole_13, $hole_14, $hole_15, $hole_16, $hole_17, $hole_18);

				rsort($worst);

				$first = array_shift($worst);
				$second = array_shift($worst);
				$third = array_shift($worst); 

				$handicap2 = $third / 2; 

				$handicap = $first + $second + $handicap2;

				$final_score = ($tot_score - $handicap) + ($adjustment); 

			} elseif ($tot_score == 96 || $tot_score == 97 || $tot_score == 98 || $tot_score == 99 || $tot_score == 100) {

				$worst = array($hole_1, $hole_2, $hole_3, $hole_4, $hole_5, $hole_6, $hole_7, $hole_8, $hole_9, $hole_10, $hole_11, $hole_12, $hole_13, $hole_14, $hole_15, $hole_16, $hole_17, $hole_18);

				rsort($worst);

				$first = array_shift($worst);
				$second = array_shift($worst);
				$third = array_shift($worst); 

				$handicap = $first + $second + $third;

				$final_score = ($tot_score - $handicap) + ($adjustment); 

			} elseif ($tot_score == 101 || $tot_score == 102 || $tot_score == 103 || $tot_score == 104 || $tot_score == 105) {

				$worst = array($hole_1, $hole_2, $hole_3, $hole_4, $hole_5, $hole_6, $hole_7, $hole_8, $hole_9, $hole_10, $hole_11, $hole_12, $hole_13, $hole_14, $hole_15, $hole_16, $hole_17, $hole_18);

				rsort($worst);

				$first = array_shift($worst);
				$second = array_shift($worst);
				$third = array_shift($worst); 
				$fourth = array_shift($worst);

				$handicap2 = $fourth / 2;

				$handicap = $first + $second + $third + $handicap2;

				$final_score = ($tot_score - $handicap) + ($adjustment); 

			} elseif ($tot_score == 106 || $tot_score == 107 || $tot_score == 108 || $tot_score == 109 || $tot_score == 110) {

				$worst = array($hole_1, $hole_2, $hole_3, $hole_4, $hole_5, $hole_6, $hole_7, $hole_8, $hole_9, $hole_10, $hole_11, $hole_12, $hole_13, $hole_14, $hole_15, $hole_16, $hole_17, $hole_18);

				rsort($worst);

				$first = array_shift($worst);
				$second = array_shift($worst);
				$third = array_shift($worst); 
				$fourth = array_shift($worst);

				$handicap = $first + $second + $third + $fourth;

				$final_score = ($tot_score - $handicap) + ($adjustment); 

			} elseif ($tot_score == 111 || $tot_score == 112 || $tot_score == 113 || $tot_score == 114 || $tot_score == 115) {

				$worst = array($hole_1, $hole_2, $hole_3, $hole_4, $hole_5, $hole_6, $hole_7, $hole_8, $hole_9, $hole_10, $hole_11, $hole_12, $hole_13, $hole_14, $hole_15, $hole_16, $hole_17, $hole_18);

				rsort($worst);

				$first = array_shift($worst);
				$second = array_shift($worst);
				$third = array_shift($worst); 
				$fourth = array_shift($worst);
				$fifth = array_shift($worst); 

				$handicap2 = $fifth / 2;

				$handicap = $first + $second + $third + $fourth + $handicap2;

				$final_score = ($tot_score - $handicap) + ($adjustment); 

			} elseif ($tot_score == 116 || $tot_score == 117 || $tot_score == 118 || $tot_score == 119 || $tot_score == 120) {

				$worst = array($hole_1, $hole_2, $hole_3, $hole_4, $hole_5, $hole_6, $hole_7, $hole_8, $hole_9, $hole_10, $hole_11, $hole_12, $hole_13, $hole_14, $hole_15, $hole_16, $hole_17, $hole_18);

				rsort($worst);

				$first = array_shift($worst);
				$second = array_shift($worst);
				$third = array_shift($worst); 
				$fourth = array_shift($worst);
				$fifth = array_shift($worst); 

				$handicap = $first + $second + $third + $fourth + $fifth;

				$final_score = ($tot_score - $handicap) + ($adjustment); 

			} elseif ($tot_score == 121 || $tot_score == 122 || $tot_score == 123 || $tot_score == 124 || $tot_score == 125) {

				$worst = array($hole_1, $hole_2, $hole_3, $hole_4, $hole_5, $hole_6, $hole_7, $hole_8, $hole_9, $hole_10, $hole_11, $hole_12, $hole_13, $hole_14, $hole_15, $hole_16, $hole_17, $hole_18);

				rsort($worst);

				$first = array_shift($worst);
				$second = array_shift($worst);
				$third = array_shift($worst); 
				$fourth = array_shift($worst);
				$fifth = array_shift($worst);
				$sixth = array_shift($worst); 

				$handicap2 = $sixth / 2; 

				$handicap = $first + $second + $third + $fourth + $fifth + $handicap2;

				$final_score = ($tot_score - $handicap) + ($adjustment); 

			} elseif ($tot_score == 126 || $tot_score == 127 || $tot_score == 128 || $tot_score == 129 || $tot_score == 130) {

				$worst = array($hole_1, $hole_2, $hole_3, $hole_4, $hole_5, $hole_6, $hole_7, $hole_8, $hole_9, $hole_10, $hole_11, $hole_12, $hole_13, $hole_14, $hole_15, $hole_16, $hole_17, $hole_18);

				rsort($worst);

				$first = array_shift($worst);
				$second = array_shift($worst);
				$third = array_shift($worst); 
				$fourth = array_shift($worst);
				$fifth = array_shift($worst);
				$sixth = array_shift($worst); 

				$handicap = $first + $second + $third + $fourth + $fifth + $sixth;

				$final_score = ($tot_score - $handicap) + ($adjustment); 

			} elseif ($tot_score == 131 || $tot_score == 132 || $tot_score == 133 || $tot_score == 134 || $tot_score == 135) {

				$worst = array($hole_1, $hole_2, $hole_3, $hole_4, $hole_5, $hole_6, $hole_7, $hole_8, $hole_9, $hole_10, $hole_11, $hole_12, $hole_13, $hole_14, $hole_15, $hole_16, $hole_17, $hole_18);

				rsort($worst);

				$first = array_shift($worst);
				$second = array_shift($worst);
				$third = array_shift($worst); 
				$fourth = array_shift($worst);
				$fifth = array_shift($worst);
				$sixth = array_shift($worst); 
				$seventh = array_shift($worst);

				$handicap2 = $seventh / 2; 

				$handicap = $first + $second + $third + $fourth + $fifth + $sixth + $handicap2;

				$final_score = ($tot_score - $handicap) + ($adjustment); 

			}

		}

		$insert = "INSERT INTO big_dog_scores (hole_1, hole_2, hole_3, hole_4, hole_5, hole_6, hole_7, hole_8, hole_9, hole_10, hole_11, hole_12, hole_13, hole_14, hole_15, hole_16, hole_17, hole_18, final_score, players) VALUES ('$hole_1', '$hole_2', '$hole_3', '$hole_4', '$hole_5', '$hole_6', '$hole_7', '$hole_8', '$hole_9', '$hole_10', '$hole_11', '$hole_12', '$hole_13', '$hole_14', '$hole_15', '$hole_16', '$hole_17', '$hole_18', '$final_score', '$team')";

		if ($con->query($insert) === TRUE) {
        	echo "<script>window.open('/scoring-entry.php','_self')</script>";
	    } else {
	        echo "NOPE: " . $insert . "<br>" . $con->error;
	    }
	}


?>
