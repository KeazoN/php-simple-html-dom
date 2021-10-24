<?php
	require 'class.php';
	$html = file_get_html('//website'.$_GET['link']);

	$title = $html->find("//news head class",0)->innertext;
	$desp = $html->find("//news content class",0)->outertext;

	/*
		Please enter the data of the site you want to pull your own. 
	*/
?>

<!DOCTYPE html>
	<html>
	<head>
		<meta charset=utf-8>
		<meta name=viewport content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>World News | <?php echo $title; ?></title>
		<link rel="stylesheet" href="style.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
	</head>
	<body>
		<div class="news">
			<h1><?php echo $title; ?></h1>
			<h5><?php echo $desp; ?></h5>
		</div>
	</body>
</html>