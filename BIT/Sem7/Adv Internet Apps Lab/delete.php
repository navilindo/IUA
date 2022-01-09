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
				<form class="w3-form w3-card" action="delete.php" method="post">
				<div class="w3-container">
				<h4>Delet student details</h4>
				Student Name : <input class="w3-input" type="text" name="old_user"/>
				<br>
				
				<input class="w3-input w3-green" type="submit" name="submit" value="delete"/>
				</div>
			</form>
			</div>
			<?php
				require 'connection.php';
				
				//$conn = connect();
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				} 
				
				if(isset($_POST["submit"])){
				$oldName = $_POST["old_user"];
				
				//$sql = "select * from students where name = '" . $oldName . "'";
				
				//$result = $conn->query($sql);
				
				//while($row = mysqli_fetch_array($result)){
					
				$query = "delete from students where name = '" . $oldName . "'";
				
				//$success =  or die();
				
				if($conn->query($query)){
					echo "<center> deleted successful </center>";
					
				}
				else 
					die("<center>could not delete data " . $conn->error . "</center>");
				}
				//}
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
			
		
		
