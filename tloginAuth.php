<?php

session_start();
include 'dbconnect.php';

if(isset($_SESSION['loggedUser'])) { header("Location: teacher/dashboard.php"); }
else{
	if(!$_POST['submit']){ 
		header("Location: index.php"); 
	}
	else{

		$tid = $_POST['un'];
		$query = mysql_query("SELECT * FROM teacher WHERE tid = '$tid' ", $connection);

			   if($query)
				{
				   while($got = mysql_fetch_array($query)):
						$dbpassword = $got['tpass'];
						$dbtid = $got['tid'];
						$dbtname = $got['tname'];
					endwhile;
				}

			   else
				{
					$err = mysql_error();				
					header("Location: advertiserLogin.php?r=$err");
				}

			if($_POST['un']==$dbtid && $_POST['pass']==$dbpassword){
					session_start();
					$_SESSION['loggedUser'] = $dbtid;
					$_SESSION['loggedTeachersName'] = $dbtname;
					header("Location: teacher/dashboard.php");
				}
			else { header("Location: index.php?r=wrong"); }	
		}
}
?>