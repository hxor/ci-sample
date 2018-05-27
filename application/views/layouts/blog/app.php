<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
</head>
<body>
	<div id="header">
		<h1>Blog CI318</h1>
	</div>
	<hr>

	<div id="main">
		<?php $this->load->view($main_view) ?>
	</div>

	<div id="footer">
		<small>&copy; <?= date('Y') ?> Codeigniter</small>
	</div>
</body>
</html>
