<html>
<head>
	<title>Level4 - XSS</title>
</head>
<body>
	
	<h3> WBS XSS - Challenge 4 </h3>
	

	<form action="level4.php" method="GET">
		<label>Name </label><input type="text" name="name">
		<input type="submit">
	</form>


	<script>
	<?php
		echo "var \$a=\"";
		if(isset($_GET['name'])){
		$data = $_GET['name'];
		$input = str_replace("<", "&lt;", $data);
    	$name = str_replace(">", "&gt;", $input);
		echo $name;
		}
	echo "\";";
	echo "\n";
	?>
	</script>


	<p><a href="/xss/level3.php"> Previous Challenge </a></p>
	<p><a href="/xss/level5.php"> Next Challenge </a></p>


	<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b>By &nbsp&nbspSrihari Ruttala</b></p>
</body>
</html>