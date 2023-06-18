<html>
<head>
	<title>Level7 - XSS</title>
</head>
<body>
	
	<h3> WBS XSS - Challenge 7 </h3>
	
	<p><b>Hint: Referer header </b></p>

	    <?php
		if (isset($_SERVER['HTTP_REFERER'])){
            echo "<br>";
			echo utf8_decode(urldecode($_SERVER['HTTP_REFERER']));
		}

?>

	<p><a href="/xss/level6.php"> Previous Challenge </a></p>
	<p><a href="/xss/level8.php"> Next Challenge </a></p>

	<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b>By &nbsp&nbspSrihari Ruttala</b></p>
</body>
</html>