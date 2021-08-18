<?php

// Require the correct variable type to be used (no auto-converting)
declare (strict_types = 1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Use this function when you need to need an overview of these variables
function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    echo('<pre>');
    var_dump($_POST);
    echo('</pre>');
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}

whatIsHappening();

session_start();

// Load you classes
require_once 'config.php';
require_once 'classes/DatabaseManager.php';
require_once 'classes/CardRepository.php';


$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password'], $config['dbname']);
$databaseManager->connect();



// This example is about a Pokémon card collection
// Update the naming if you'd like to work with another collection
$cardRepository = new CardRepository($databaseManager);
$createWorked = $cardRepository->create();
if (!$createWorked && isset($_POST['addBook'])) {
    $emptyFieldsMessage = "Enter author and title to add the book";
}

$cards = $cardRepository->get();
$find = $cardRepository->find();

if (empty($_GET)){
    require 'overview.php';
} else {
    require 'edit.php';
}




// Load your view
// Tip: you can load this dynamically and based on a variable, if you want to load another view
