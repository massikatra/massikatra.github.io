<!DOCTYPE html>
<html>
<head>
	<title>Ailan-Web</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap&family=Pacifico" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="libs/css/vend/normalize.css">
	<link rel="stylesheet" type="text/css" href="libs/css/vend/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="libs/css/main.css">
</head>
<body>
	<?php include 'includs\navbar.php'; ?>
	<div class="view fx">
		<?php include 'includs\sidebar.php'; ?>
		<div id="content" class="content br-rd">
			<?php include 'includs/sections/home.php'; ?>
		</div>
	</div>

	<script type="text/javascript" src="libs/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="libs/js/plugins.js"></script>
	<script type="text/javascript" src="ajax/global.js"></script>
</body>
</html> 