<html>
<head>
<title>Subject Listing | Admin Dashboard | AMS</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>

<div class="box admin">
<h2>Admin Dashboard</h2>

<p>ADMIN - &nbsp; <a href="logout.php">[Logout]</a> </p> <hr /> <br />

	<div class="form-style-6">
		<h2>Add a Subject</h2>
		<form action="subject_listing_process.php" method="post">
			<input class="input" type="text" name="subjectName" placeholder="Subject Name" />
			<input class="input" type="text" name="subjectID" placeholder="Subject ID" />
			<input class="button" type="submit" name="submit" value="&nbsp; + ADD &nbsp;" />
		</form>
	</div>
</div>
</body>
</html>