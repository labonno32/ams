<?php

session_start();
//include $_SERVER['DOCUMENT_ROOT'] . '/config.php';
if(isset($_SESSION['loggedUser'])) { header("Location: admin/dashboard.php"); }
else{
	if(!$_POST['submit']){ 
		header("Location: admin/index.php"); 
	}
	else{
		if ($_POST['un']=='admin') {
			if($_POST['pass']=='adminpass'){
					session_start();
					$_SESSION['loggedUser'] = "admin";
					header("Location: dashboard.php");
				}
			else { header("Location: index.php?r=wrong"); }
			}
		else { header("Location: index.php?r=wrong"); }
	}
}
?>