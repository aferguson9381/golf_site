<?php
if($get_handi >= 10 && $get_handi <= 19) {

      if($row_round['hole1'] >= 7) {
            $as1 = 7;
      } elseif($row_round['hole1'] <= 7) {
            $as1 = $row_round['hole1'];
      }
      
} elseif($get_handi <= 9) {

	if($ha1 >= ($row_round['hole1_par'] + 3)) {
		$as1 = $row_round['hole1_par'] + 2;
	} elseif($ha1 <= $row_round['hole1_par'] + 2) {
		$as1 = $ha1;
	}
	if($ha2 >= ($row_round['hole2_par'] + 3)) {
		$as2 = $row_round['hole2_par'] + 2;
	} elseif($ha2 <= $row_round['hole2_par'] + 2) {
		$as2 = $ha2;
	}
	if($ha3 >= ($row_round['hole3_par'] + 3)) {
		$as3 = $row_round['hole3_par'] + 2;
	} elseif($ha3 <= $row_round['hole3_par'] + 2) {
		$as3 = $ha3;
	}
	if($ha4 >= ($row_round['hole4_par'] + 3)) {
		$as4 = $row_round['hole4_par'] + 2;
	} elseif($ha4 <= $row_round['hole4_par'] + 2) {
		$as4 = $ha4;
	}
	if($ha5 >= ($row_round['hole5_par'] + 3)) {
		$as5 = $row_round['hole5_par'] + 2;
	} elseif($ha5 <= $row_round['hole5_par'] + 2) {
		$as5 = $ha5;
	}
	if($ha6 >= ($row_round['hole6_par'] + 3)) {
		$as6 = $row_round['hole6_par'] + 2;
	} elseif($ha6 <= $row_round['hole6_par'] + 2) {
		$as6 = $ha6;
	}
	if($ha7 >= ($row_round['hole7_par'] + 3)) {
		$as7 = $row_round['hole7_par'] + 2;
	} elseif($ha7 <= $row_round['hole7_par'] + 2) {
		$as7 = $ha7;
	}
	if($ha8 >= ($row_round['hole8_par'] + 3)) {
		$as8 = $row_round['hole8_par'] + 2;
	} elseif($ha8 <= $row_round['hole8_par'] + 2) {
		$as8 = $ha8;
	}
	if($ha9 >= ($row_round['hole9_par'] + 3)) {
		$as9 = $row_round['hole9_par'] + 2;
	} elseif($ha9 <= $row_round['hole9_par'] + 2) {
		$as9 = $ha9;
	}
	if($ha10 >= ($row_round['hole10_par'] + 3)) {
		$as10 = $row_round['hole10_par'] + 2;
	} elseif($ha10 <= $row_round['hole10_par'] + 2) {
		$as10 = $ha10;
	}
	if($ha11 >= ($row_round['hole11_par'] + 3)) {
		$as11 = $row_round['hole11_par'] + 2;
	} elseif($ha11 <= $row_round['hole11_par'] + 2) {
		$as11 = $ha11;
	}
	if($ha12 >= ($row_round['hole12_par'] + 3)) {
		$as12 = $row_round['hole12_par'] + 2;
	} elseif($ha12 <= $row_round['hole12_par'] + 2) {
		$as12 = $ha12;
	}
	if($ha13 >= ($row_round['hole13_par'] + 3)) {
		$as13 = $row_round['hole13_par'] + 2;
	} elseif($ha13 <= $row_round['hole13_par'] + 2) {
		$as13 = $ha13;
	}
	if($ha14 >= ($row_round['hole14_par'] + 3)) {
		$as14 = $row_round['hole14_par'] + 2;
	} elseif($ha14 <= $row_round['hole14_par'] + 2) {
		$as14 = $ha14;
	}
	if($ha15 >= ($row_round['hole15_par'] + 3)) {
		$as15 = $row_round['hole15_par'] + 2;
	} elseif($ha15 <= $row_round['hole15_par'] + 2) {
		$as15 = $ha15;
	}
	if($ha16 >= ($row_round['hole16_par'] + 3)) {
		$as16 = $row_round['hole16_par'] + 2;
	} elseif($ha16 <= $row_round['hole16_par'] + 2) {
		$as16 = $ha16;
	}
	if($ha17 >= ($row_round['hole17_par'] + 3)) {
		$as17 = $row_round['hole17_par'] + 2;
	} elseif($ha17 <= $row_round['hole17_par'] + 2) {
		$as17 = $ha17;
	}
	if($ha18 >= ($row_round['hole18_par'] + 3)) {
		$as18 = $row_round['hole18_par'] + 2;
	} elseif($ha18 <= $row_round['hole18_par'] + 2) {
		$as18 = $ha18;
	}

}

      $as_f9 = $as1 + $as2 + $as3 + $as4 + $as5 + $as6 + $as7 + $as8 + $as9;
      $as_b9 = $as10 + $as11 + $as12 + $as13 + $as14 + $as15 + $as16 + $as17 + $as18;
?>















