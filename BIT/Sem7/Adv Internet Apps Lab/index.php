<html>
	<head>
		<title>My School</title>
		<link rel="stylesheet" href="main.css">
		<link rel="stylesheet" href="w3.css">
	</head>
	<div class="w3-container w3-green">
		<h3>My School</h3>
	</div>
	<body>
			<div class="w3-container w3-center w3-text-green">
				<!--a href="home.html" class="w3-bar-item w3-button w3-hover-green">Home</a>
				<a href="update.php" class="w3-bar-item w3-button w3-hover-green">Edit</a>
				<a href="delete.php" class="w3-bar-item w3-button w3-hover-green">Delete</a>
				<a href="view.php" class="w3-bar-item w3-button w3-hover-green">View</a-->
			</div>
			<br><br><br>
			<div class="w3-container w3-center">
				<h2>
					<b>Login</b>
				</h2>
				
				
			</div>
			<div class="w3-container" width="50%">
			<div class="w3-container">
				<form class="w3-form w3-card" action="index.php" method="post">
				<div class="w3-container">
				
				Name : <input class="w3-input" type="text" name="old_user"/>
				<br>
				
				Password : <input class="w3-input" type="password" name="pass"/>
				
				<input class="w3-input w3-green" type="submit" name="submit"/>
				</div>
			</form>
			</div>
			</div>
			<?php
				require 'connection.php';
				
				//$conn = connect();
				
				if(isset($_POST["submit"])){
					$oldName = $_POST["old_user"];
					$pass = $_POST["pass"];
				
					$query = "select * from students where name = '" . $oldName . "' and pass = '" . $pass . "'";
					
					$success = $conn->query($query);
					
					if(!$success -> num_rows > 0){
						die("<center>couldnt login " . $conn->error . "</center>");
					}
					else 
						echo "<center>login successful,<a href='home.html'>enter</a></center>";
					}
				$conn->close();
				
			?>
			<br><br><br><br><br>
		<footer class="w3-container w3-green">
			<div class="w3-container">
				<h3>my school</h3>
				<h4>developed by Hassan Issa Hassan</h4>
			</div>
		</footer>
	</body>
</html>
	
