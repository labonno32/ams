<?php

	session_start();
	if(isset($_SESSION['loggedUser'])) {
		if($_SESSION['loggedUser']=='admin'){
			header("Location: admin/dashboard.php"); 
		}
		else{
			header("Location: teacher/dashboard.php");
		}
	}
	else { ?>

<html>
<head>
<title>AMS - HOME</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>

<div class="box">
<h1>Attendance Management System</h1>
	<?php
	if(isset($_GET['r'])) { $r = $_GET['r']; } else { $r = 'none'; }
	if($r == 'wrong'){ ?> <p class="warningText"><span class="icon-cancel-circle"></span> Wrong Username/Password! Try again...</p> <?php }
	?>

	<div class="form-style-6">
		<h2>Admin Login</h2>
		<form action="aloginAuth.php" method="post">
			<input class="input" type="text" name="un" placeholder="Username or Email" />
			<input class="input" type="password" name="pass" placeholder="Password" />
			<input class="button" type="submit" name="submit" value="&nbsp; LOGIN &nbsp;" />
		</form><br />
		<p><a href="#" style="color: #666; font-size: 12px;">Forgot Password?</a></p><br/>
	</div>
</div>
</body>
</html>
<?php } ?>