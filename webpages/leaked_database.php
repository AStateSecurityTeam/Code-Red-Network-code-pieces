<!DOCTYPE html>
<html>
<head>
	<title>Unlocked Database</title>
</head>
<body>
<?php
                echo '<script type="text/javascript">';
                echo ' alert("Simple Joe website has been hacked!")';
                echo '</script>';


?>


	<center><h1>Welcome to Unlocked Database!</h1>
<h3>
	<?php
		echo 'Newest hash leak of "Joes Simple website" contained ' . rand(3,14) .' usernames and passwords';
	?>
</h3>
<h4>
included in list: <?php echo $_POST["username"]; ?>. with the password: <?php echo $_POST["password"]; ?>. </h4>


<hr>
	</center>
</body>
</html>
