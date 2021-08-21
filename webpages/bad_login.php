<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>

<body>
	<div id="main">
		<h1>SIMPLE LOGIN</h1>
		<form method="POST">
			Username <input type="text" name="username" class="text" autocomplete="off"
			required>
			Password <input type="password" name="password" class="text" required>
			<input type="Submit" name="submit" id="sub">
		</form>
	</div>
</body>

</html>

<?php
	if(isset($_POST['submit'])){
		$un=$_POST['username'];
		$pw=$_POST['password'];

		echo "I hope you didn't put anything important in there...";
		sleep(2);
		echo '<script type="text/javascript">';
		echo ' alert("Database intrusion detected")';
		echo '</script>';
		sleep(2);
		header("location:bad_database.php");
		exit();
	}
?>
