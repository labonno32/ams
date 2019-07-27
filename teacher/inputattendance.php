<?php
session_start();

include '../dbconnect.php';

$studentid = $_POST['studentid'];
$subid = $_POST['subid'];
$datetoday = date('d/m/Y');
$presence = $_POST['presence'];

if(!$_POST['submit'])
  {		
	header("Location: attendance.php");
  }
else
  {
	$query1 = mysql_query("SELECT * FROM attendance WHERE studentid = '$studentid' && subid = '$subid' && datetoday = '$datetoday' ", $connection);

	   if($query1)
		{
		   while($got = mysql_fetch_array($query1)):
				$ispresent = $got['presence'];
			endwhile;
		if ($ispresent!=NULL) {
			if (($ispresent == 0) || ($ispresent == 1)) {

				$query = "UPDATE attendance SET 
							presence = '{$presence}' 

							WHERE studentid = '{$studentid}' && subid = '{$subid}' && datetoday = '{$datetoday}'
							";

					$result = mysql_query($query, $connection);

				
					if (!$result){ 
						
						$err = mysql_error();				
						header("Location: attendance.php?r=$err");
						}
					  		
					else {
						$stusess = $studentid.$subid;
						$_SESSION[$stusess]=1;
						header("Location: attendance.php?subid=$subid");															 		
						}						
			} else {
				$query = "INSERT INTO attendance SET
					studentid = '{$studentid}',
					subid = '{$subid}',
					datetoday = '{$datetoday}',
					presence = '{$presence}'
					";

					$result = mysql_query($query, $connection);

				
					if (!$result){ 
						
						$err = mysql_error();				
						header("Location: attendance.php?r=$err");
						}
					  		
					else {
						$stusess = $studentid.$subid;
						$_SESSION[$stusess]=1;
						header("Location: attendance.php?subid=$subid");															 		
						}
				}
			} else {
				$query = "INSERT INTO attendance SET
					studentid = '{$studentid}',
					subid = '{$subid}',
					datetoday = '{$datetoday}',
					presence = '{$presence}'
					";

					$result = mysql_query($query, $connection);

				
					if (!$result){ 
						
						$err = mysql_error();				
						header("Location: attendance.php?r=$err");
						}
					  		
					else {
						$stusess = $studentid.$subid;
						$_SESSION[$stusess]=1;
						header("Location: attendance.php?subid=$subid");															 		
						}
			}
		} else { echo $err = mysql_error(); }
	}
// if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
//     // last request was more than 30 minutes ago
//     session_unset();     // unset $_SESSION variable for the run-time 
//     session_destroy();   // destroy session data in storage
// }
// $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
?>