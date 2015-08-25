<?php

// index.php
// Pull in JS components and give input form

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>AutoSuggest - Search Users</title>

		<link rel="stylesheet" href="assets/css/global.css">
	</head>
	<body>

		<form action="index.php" method="get" autocomplete="off">
			<label for="users">Search Users</label>
			<input type="text" name="user" id="users">
			<input type="submit" value="Search">
		</form>


		<script src="bower_components/jquery/dist/jquery.min.js"></script>
		<script src="bower_components/typeahead.js/dist/typeahead.bundle.min.js"></script>
		<script src="assets/js/global.js"></script>
	</body>
</html>

