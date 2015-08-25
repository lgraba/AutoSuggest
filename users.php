<?php

// users.php
// Take a query and output a list of records as JSON

// Define application content-type to JSON
header('Content-Type: application/json');

// Check that query exists, otherwise output an empty JSON string
if(!isset($_GET['query'])) {
	echo json_encode([]);
	exit();
}

// Create database PDO
$db = new PDO('mysql:host=127.0.0.1;dbname=autosuggest', 'root', '');
// Prepare statement
$users = $db->prepare("
	SELECT id, username
	FROM users
	WHERE username LIKE :query
");

// Execute query that provides for matching of the first part of a username
$users->execute([
	'query' => "{$_GET['query']}%"
]);

// Fetch query results in an associative array and output JSON encoded array
echo json_encode($users->fetchAll(PDO::FETCH_ASSOC));