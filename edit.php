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
    <label>Type book title here</label>
    <input type="text" value="bookTitle" name="bookTitle">

    <input type="submit" name="submitSearch">
</form>

<form action="" method="post">
    <label for="authorEdit">Author</label>
    <input type="text" name="authorEdit" placeholder="author">

<!--    --><?php //echo $authorToEdit ?>
<!--    --><?php //echo $bookToEdit ?>
<!--    --><?php //echo $bookToEdit->authorToEdit ?>
<!--    --><?php //echo $cardRepository->update()?>
    <br><br>
    <label for="titleEdit">Title</label>
    <input type="text" name="titleEdit" placeholder="title">
    <br><br>
    <label for="readEdit">Read</label>
    <input type="text" name="readEdit" placeholder="read">
    <br><br>
    <button type="submit" name="save">Save</button>

</form>


</body>
</html>