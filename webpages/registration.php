<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>
<body>
	<div>
		<?php
/*
                        if(isset($_POST['create'])){

                                $username = $_POST['username'];
                                $password = $_POST['password'];

                                $sql = "INSERT INTO users (username, password) VALUES(?,?)";
                                $stmtinsert = $db->prepare($sql);
                                $result = $stmtinsert->execute([$usernmame, $password]);
                                if($result){
                                        echo 'Successfully saved';
                                }else{
                                        echo 'There were errors while saving your data.';
                        }
*/
		
		?>
	</div>

	<div>
		<form action="registration.php" method="post">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
					<h1>Registration</h1>
						<label for="username"><b>Username</b></label>
						<input class="form-control" type="text" name="username" required>

						<label for="password"><b>Password</b></label>
        	        	                <input class="form-control" type="password" name="password" required>
						<hr class="mb-3">
						<input class="btn btn-primary" type="submit" name="create" value="Sign up">
					</div>
				</div>
			</div>
		</form>
	</div>
</body>
</html>
