<html>
<head>
	<title>Level3 - XSS</title>
</head>
<body>
	
	<h3> WBS XSS - Challenge 3 </h3>
	

	<form action="level3.php" method="GET">
		<label>Image path </label><input type="text" name="name">
		<input type="submit">
	</form>



	<?php
		echo "<img src=\"";
		if(isset($_GET['name'])){
		$name = $_GET['name'];
		$name = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $name);
		echo $name;
		}
	echo "\">";
	?>

<p><a href="/xss/level2.php"> Previous Challenge </a></p>
	<p><a href="/xss/level4.php"> Next Challenge </a></p>


	<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b>By &nbsp&nbspSrihari Ruttala</b></p>
	
</body>
</html>