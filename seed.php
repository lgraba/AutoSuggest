<?php

// seed.php
// Use Faker to create 1000 username records in autosuggest database, table users

// Require Composer's autoload file
require 'vendor/autoload.php';

// New Database connection via PDO
$db = new PDO('mysql:host=127.0.0.1;dbname=autosuggest', 'root', '');

// New instance of Faker
$faker = Faker\Factory::create();

// Generate 10000 username records
foreach(range(1, 10000) as $x) {
	$db->query("
		INSERT INTO users (username)
		VALUES ('{$faker->userName}')
	");
}