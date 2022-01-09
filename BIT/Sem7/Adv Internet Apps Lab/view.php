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
			<?php 
				require 'connection.php';
				//$conn = connect();
				$sql = "select * from students";
				$result = $conn->query($sql);
				
				echo "<div class='w3-container w3-center'>";
				
				echo "<table class='w3-table' border='1px'>";
				echo "<th>student id</th><th>student name</th>";
				
				while($row = mysqli_fetch_array($result)){
					echo "<tr>";
					echo "<td>".$row["id"]."</td>";
					echo "<td>".$row["name"]."</td>";
					echo "</tr>";
				}
				echo "</table></div>";
				echo count(mysqli_fetch_array($result));
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
			
		
		
