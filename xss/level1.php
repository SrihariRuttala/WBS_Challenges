<html>
<head>
	<title>Level1 - XSS</title>
</head>
<body>
	
	<h3> WBS XSS - Challenge 1 </h3>
	

	<form action="level1.php" method="GET">
		<input type="text" name="name">
		<input type="submit">
	</form>



	<?php
		echo "<br> Value : ";
		if(isset($_GET['name'])){
		$name = $_GET['name'];
		echo $name;
		}
	?>


	<p><a href="/xss/level2.php"> Next Challenge </a></p>

	<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b>By &nbsp&nbspSrihari Ruttala</b></p>


</body>
</html>