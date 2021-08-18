<?php

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//// Use this function when you need to need an overview of these variables
//function whatIsHappening() {
//    echo '<h2>$_GET</h2>';
//    var_dump($_GET);
//    echo '<h2>$_POST</h2>';
//    echo('<pre>');
//    var_dump($_POST);
//    echo('</pre>');
//    echo '<h2>$_COOKIE</h2>';
//    var_dump($_COOKIE);
//    echo '<h2>$_SESSION</h2>';
//    var_dump($_SESSION);
//}
//
//whatIsHappening();
//
//session_start();
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>


<h1>Edit the book data:</h1>


<form action="" method="post">
    <label for="authorEdit">Author</label>
    <input type="text" name="authorEdit" placeholder="<?= $_GET['author'] ?>">
    <br><br>
    <label for="titleEdit">Title</label>
    <input type="text" name="titleEdit" placeholder="<?= $_GET['title'] ?>">
    <br><br>
    <label for="readEdit">Read</label>
    <input type="text" name="readEdit" placeholder="<?= $_GET['read'] ?>">
    <br><br>
    <button type="submit" name="save">Save</button>

    <?php
    if (isset($_POST['save'])) {
        if (isset($_POST['save']) && !empty($_POST['authorEdit']) && !empty($_POST['titleEdit']) && !empty($_POST['readEdit'])) {
            $cardRepository->update($_POST['authorEdit'], $_POST['titleEdit'], $_POST['readEdit'], $_GET['title']);
            header('Location: index.php');
        }
    }
    ?>

</form>


</body>
</html>