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
				<a href="home.html" class="w3-bar-item w3-button w3-hover-green">Home</a>
				<a href="insert.php" class="w3-bar-item w3-button w3-hover-green">Insert</a>
				<a href="update.php" class="w3-bar-item w3-button w3-hover-green">Edit</a>
				<a href="delete.php" class="w3-bar-item w3-button w3-hover-green">Delete</a>
				<a href="view.php" class="w3-bar-item w3-button w3-hover-green">View</a>
			</div>
			<br><br>
			<div class="w3-container">
				<form class="w3-form w3-card" action="insert.php" method="post">
				<div class="w3-container">
				<h4>Insert student details</h4>
				Name : <input class="w3-input" type="text" name="user"/>
				<br>
				
				Password : <input class="w3-input" type="password" name="pass"/>
				
				<input class="w3-input w3-green" type="submit" name="submit"/>
				</div>
			</form>
			</div>
			<?php
				require 'connection.php';
				
				//$conn = connect();
				
				if(isset($_POST["submit"])){
				$name = $_POST["user"];
				$pass = $_POST["pass"];
				
				$query = "insert into students(name,pass) values ('".$name."','".$pass."')";
				
				$success = $conn->query($query);
				
				if(!$success){
					die("couldnt update data " . $conn->error);
				}
				else 
					echo "<center> insert successful </center>";
				}
				$conn->close();
				
			?>
			<br><br>
			<br><br>
		<div>
		<footer class="w3-container w3-green">
			<div class="w3-container w3-center">
				<h3>my school</h3>
				<h4>developed by Hassan Issa Hassan</h4>
			</div>
		</footer>
		</div>
		

	</body>
</html>
			
		
		
