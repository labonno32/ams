<?php
session_start();

include '../dbconnect.php';
?>

<html>
<head>
<title>AMS - HOME</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>

<div class="box teacher">
	<h2>Teacher's Dashboard</h2>
<p><?php echo $_SESSION['loggedTeachersName']; ?> &nbsp; <a class="doitalic" href="../logout.php">[Logout]</a> </p> <br />
<hr/><br />
<?php
$tid = $_SESSION['loggedUser'];
	$query = mysql_query("SELECT * FROM subjects WHERE assignedto = '$tid' ", $connection);

	   if($query)
		{
		   while($got = mysql_fetch_array($query)):
				$dbsubid = $got['subid'];
				$dbsubname = $got['subname'];

				$_SESSION[$dbsubid] = "Start";
?>
<?php echo $dbsubid.": ".$dbsubname ?>  <a href="attendance.php?subid=<?php echo $dbsubid; ?>"><button class="button">Take Attendance</button> </a> <br /> <br /><br />
<?php

			endwhile;
		}
?>
</div>
</body>
</html>