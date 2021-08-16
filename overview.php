<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goodreads - track which books you already read</title>
</head>
<body>

<h1>Goodreads - track which books you already read</h1>

<ul>
    <?php foreach ($cards as $card) : ?>
        <li><?= $card['Author'] ?> - <?= $card['Title'] ?> - <?= $card['Read'] ?>
        <button type="submit" name="edit">Edit</button></li>
    <?php endforeach; ?>
</ul>
<br>
<br>
<form method="post">Add new book
    <br>
    <br>
    <label for="author">Author</label>
    <input type="text" name="author" placeholder="Add author of the book">
    <br>
    <br>
    <label for="title">Title</label>
    <input type="text" name="title" placeholder="Add title of the book">
    <br>
    <br>
    <button type="submit" name="addBook">Add book</button>
</form>
        <?php if (!empty($emptyFieldsMessage)) : ?>
        <p> <?php echo $emptyFieldsMessage ?> </p>
        <?php endif; ?>


</body>
</html>