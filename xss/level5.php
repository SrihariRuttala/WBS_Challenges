<html>
<head>
	<title>Level5 - XSS</title>
</head>
<body>
	
	<h3> WBS XSS - Challenge 5 </h3>
	

	<form action="level5.php" method="GET">
		<label>Link </label><input type="text" name="name">
		<input type="submit">
	</form>

	<?php
		echo "<a href=\"";
		if(isset($_GET['name'])){
		$data = $_GET['name'];
		$input = str_replace("<", "&lt;", $data);
    	$input = str_replace(">", "&gt;", $input);
		echo $input;
		}
	echo "\">link</a>";
	echo "\n";
	?>

	<p><a href="/xss/level4.php"> Previous Challenge </a></p>
	<p><a href="/xss/level6.php"> Next Challenge </a></p>


	<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b>By &nbsp&nbspSrihari Ruttala</b></p>
</body>
</html>