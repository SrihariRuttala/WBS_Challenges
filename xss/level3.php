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

		$tags = array('<a','<a2','<abbr','<acronym','<address','<animate','<animatemotion','<animatetransform','<applet','<area','<article','<aside','<audio','<audio2','<b','<bdi','<bdo','<big','<blink','<blockquote','<body','<br','<button','<canvas','<caption','<center','<cite','<code','<col','<colgroup','<command','<content','<custom tags','<data','<datalist','<dd','<del','<details','<dfn','<dialog','<dir','<div','<dl','<dt','<element','<em','<embed','<fieldset','<figcaption','<figure','<font','<footer','<form','<frame','<frameset','<h1','<head','<header','<hgroup','<hr','<html','<i','<iframe','<iframe2','<image','<image2','<image3','<img','<img2','<input','<input2','<input3','<input4','<ins','<kbd','<keygen','<label','<legend','<li','<link','<listing','<main','<map','<mark','<marquee','<menu','<menuitem','<meta','<meter','<multicol','<nav','<nextid','<nobr','<noembed','<noframes','<noscript','<object','<ol','<optgroup','<option','<output','<p','<param','<picture','<plaintext','<pre','<progress','<q','<rb','<rp','<rt','<rtc','<ruby','<s','<samp','<script','<section','<select','<set','<shadow','<slot','<small','<source','<spacer','<span','<strike','<strong','<style','<sub','<summary','<sup','<svg','<table','<tbody','<td','<template','<textarea','<tfoot','<th','<thead','<time','<title','<tr','<track','<tt','<u','<ul','<var','<video','<video2','<wbr','<xmp');
		
		if(isset($_GET['name']))
		{
			$data = $_GET['name'];
			$flag = FALSE;
			$string = current(explode(' ', $data));
			foreach($tags as $tag)
			{
				if(str_contains($data, $tag))
				{
					echo "Error: HTML Tag found";
					$flag = TRUE;
					break;
				}
			}
			if($flag == FALSE)
			{
				echo "<img src=\"";
				echo $data;
				echo "\">";
			}
		// $name = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $name);
		}
	?>

<p><a href="/xss/level2.php"> Previous Challenge </a></p>
	<p><a href="/xss/level4.php"> Next Challenge </a></p>


	<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <b>By &nbsp&nbspSrihari Ruttala</b></p>
	
</body>
</html>