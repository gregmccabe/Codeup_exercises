<?php

// date_default_timezone_set('America/Chicago');
// 
// $day_of_week = date('N');
// // $day_of_week = ;
// switch($day_of_week) {
//     case 1:
// 		echo "Monday\n";
// 		break;
// 	case 2:
// 		echo "tuesday\n";
// 		break;
// 	case 3:
// 		echo "wednesday\n";
// 		break;
// 	case 4:
// 		echo "Thursday\n";
// 		break;
// 	case 5:
// 		echo "Friday\n";
// 		break;
// 	case 6:
// 		echo "Saturday\n";
// 		break;
// 	case 7:
// 		echo "Sunday\n";
// 		break;
// }
	
date_default_timezone_set('America/Chicago');

$day_of_week = date('N');

if ($day_of_week == 1) {
	echo "Monday\n";
  } 
  elseif ($day_of_week == 2) {
		echo "Tuesday\n";
  }	
  elseif ($day_of_week == 3) {
		echo "Wednesday\n";
  }
  elseif ($day_of_week == 4) {
	  echo "Thursday\n";
  }
  elseif ($day_of_week == 5) {
	  echo "Friday\n";
  }
  elseif ($day_of_week == 6) {
	  echo "Saturday\n";
  }
  elseif ($day_of_week == 7) {
	  echo "Sunday\n";
  }
  ?>