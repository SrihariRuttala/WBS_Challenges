<html>
<head>
	<title>Level2 - XSS</title>
</head>
<body>
	
	<h3> WBS XSS - Challenge 2 </h3>
	

	<form action="level2.php" method="GET">
		<input type="text" name="name">
		<input type="submit">
	</form>



	<?php
		echo "<textarea> Value : ";
		if(isset($_GET['name'])){
		$name = $_GET['name'];
		echo $name;
		}
	echo "</textarea>"
	?>


<p><a href="/xss/level1.php"> Previous Challenge </a></p>
	<p><a href="/xss/level3.php"> Next Challenge </a></p>

	<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b>By &nbsp&nbspSrihari Ruttala</b></p>
</body>
</html>