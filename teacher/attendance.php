<?php
session_start();

include '../dbconnect.php';
?>

<html>
<head>
<title>Attendance Sheet | AMS</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>

<div class="box teacher">
	<h2>Attendance Sheet [<?php echo $_GET['subid']; ?>]</h2>
<p><b>Instructor:</b> <a href="dashboard.php"><?php echo $_SESSION['loggedTeachersName']; ?></a> &nbsp; <a class="doitalic" href="../logout.php">[Logout]</a> </p> <br />
<hr/><br />
<div class="attendanceform">
	<table>
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>Student ID</th>
			<th> &nbsp; Present</th>
			<th> &nbsp; Absent</th>
		</tr>
<?php
$datetoday = date("d/m/Y");
$subid = $_GET['subid'];
$id = 1;
	$query = mysql_query("SELECT * FROM student", $connection);
	   if($query)
		{
		   while($got = mysql_fetch_array($query)):
				$sname = $got['sname'];
				$studentid = $got['studentid'];
				$coursesTaken = $got['coursesTaken'];

				$course = explode(",", $coursesTaken);
		   		$n = count($course);
		   		for ($i=0; $i < $n ; $i++) { 
		   			if ($subid == $course[$i]) { 
						$stusess = $studentid.$subid;
						if (isset($_SESSION[$stusess])) {
							if($_SESSION[$stusess] == 1){
								//Attendance of this ID has been taken
								?>
									<tr>
										<td style="color: #ccc;"><?php echo $id; ?></td>
										<td><?php echo $sname; ?></td>
										<td><?php echo $studentid; ?></td>
										<td>				
											<form action="inputattendance.php" method="post">
												<input type="hidden" name="studentid" value="<?php echo $studentid; ?>">
												<input type="hidden" name="subid" value="<?php echo $subid; ?>">
												<input type="hidden" name="presence" value="1">
												<input type="submit" name="submit" class="btninactive" value="PRESENT">
											</form>
										</td>
										<td>				
											<form action="inputattendance.php" method="post">
												<input type="hidden" name="studentid" value="<?php echo $studentid; ?>">
												<input type="hidden" name="subid" value="<?php echo $subid; ?>">
												<input type="hidden" name="presence" value="0">
												<input type="submit" name="submit" class="btninactive" value="ABSENT">
											</form>
										</td>
									</tr>
								<?php
							}
							else {
								//Attendance of this ID has NOT been taken	
								?>
									<tr>
										<td style="color: #ccc;"><?php echo $id; ?></td>
										<td><?php echo $sname; ?></td>
										<td><?php echo $studentid; ?></td>
										<td>				
											<form action="inputattendance.php" method="post">
												<input type="hidden" name="studentid" value="<?php echo $studentid; ?>">
												<input type="hidden" name="subid" value="<?php echo $subid; ?>">
												<input type="hidden" name="presence" value="1">
												<input type="submit" name="submit" class="present" value="PRESENT">
											</form>
										</td>
										<td>				
											<form action="inputattendance.php" method="post">
												<input type="hidden" name="studentid" value="<?php echo $studentid; ?>">
												<input type="hidden" name="subid" value="<?php echo $subid; ?>">
												<input type="hidden" name="presence" value="0">
												<input type="submit" name="submit" class="absent" value="ABSENT">
											</form>
										</td>
									</tr>								
								<?php
							} } 
							else {
								?>
									<tr>
										<td style="color: #ccc;"><?php echo $id; ?></td>
										<td><?php echo $sname; ?></td>
										<td><?php echo $studentid; ?></td>
										<td>				
											<form action="inputattendance.php" method="post">
												<input type="hidden" name="studentid" value="<?php echo $studentid; ?>">
												<input type="hidden" name="subid" value="<?php echo $subid; ?>">
												<input type="hidden" name="presence" value="1">
												<input type="submit" name="submit" class="present" value="PRESENT">
											</form>
										</td>
										<td>				
											<form action="inputattendance.php" method="post">
												<input type="hidden" name="studentid" value="<?php echo $studentid; ?>">
												<input type="hidden" name="subid" value="<?php echo $subid; ?>">
												<input type="hidden" name="presence" value="0">
												<input type="submit" name="submit" class="absent" value="ABSENT">
											</form>
										</td>
									</tr>								
								<?php
							}
						}
				} $id++;
			endwhile;
		}
?>
	</table>
</div>

</div>
</body>
</html>