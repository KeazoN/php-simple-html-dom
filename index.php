<?php 
	require 'class.php';
	$html = file_get_html('//website URL');
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
		<title>World News</title>
		<link rel="stylesheet" href="style.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
	</head>
	<body>
		<h1 class="title">Earth News</h1>
		<div class="draw"></div>
		<div class="cards">
			<?php foreach ($html->find('.//News card class') as $element) { ?>
				<a href="news.php?link=<?php echo $element->find("a",0)->href; ?>">
					<div class="card">
						<div class="card-head">
							<h2><?php echo $element->find(".//news title class",0)->innertext; ?></h2>
						</div>
						<div class="card-desp">
							<p><?php echo $element->find(".//news spot class",0)->innertext; ?></p>
						</div>
					</div>
				</a>
			<?php } ?>
		</div>
	</body>
</html>