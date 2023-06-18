<html>
<head>
	<title>Level8 - XSS</title>
</head>
<body>
	
	<h3> WBS XSS - Challenge 8 </h3>
	
<p><b>Hint: Inject payload in URL</b></p>


<form action="level8.php" method="GET">
		<input type="text" name="name">
		<input type="submit">
	</form>

 <?php
if(isset($_GET['name'])){
	
	$data = $_GET['name'];
    $input = str_replace("<", "&lt;", $data);
    $input = str_replace(">", "&gt;", $input);
    $input = urldecode($input);
    echo $input;
}

?> 


	<p><a href="/xss/level6.php"> Previous Challenge </a></p>
	<p><a href="/xss/level8.php"> Next Challenge </a></p>

	<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b>By &nbsp&nbspSrihari Ruttala</b></p>
</body>
</html>