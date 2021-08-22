<!DOCTYPE html>
<html>
<head>
	<title>SIMPLE JOE'S LOGIN</title>
</head>

<body>
	<center>
	<div id="main">
		<h1>SIMPLE JOE'S LOGIN</h1>
		<p> Please fill out this form to register your account</p>
		<form action="leaked_database.php" method="POST">
			Username <input type="text" name="username" class="text" autocomplete="off"
			required>
			Password <input type="password" name="password" class="text" required>
			<input type="Submit" name="submit" id="sub">
		</form>
	</div>
	</center>
</body>

</html>

<?php

	if(isset($_POST['submit'])){

		echo ' <a href=\\leaked_database.php>I hope you did not put anything important in there...</a>';

		echo '<script type="text/javascript">';
		echo ' alert("Password Database intrusion detected")';
		echo '</script>';
	}

?>
