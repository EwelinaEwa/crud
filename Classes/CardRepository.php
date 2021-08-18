<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class CardRepository
{
    private DatabaseManager $databaseManager;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create()
    {
        if (isset($_POST['addBook']) && $_POST['author']  && $_POST['title']){
            $addedAuthor = $_POST['author'];
            $addedTitle = $_POST['title'];

            $sql = "INSERT INTO books(Author,Title) VALUES('$addedAuthor','$addedTitle')";
            $this->databaseManager->connection->query($sql);
            return true;
        } else {
            return false;
        }
    }

    // Get one
    public function find()
    {
//        if (isset($_GET["edit"]) && $_POST["submitSearch"]) {
//            $author = $_GET["edit"];
//            $bookTitle = $_POST["bookTitle"];
//            $sql = "SELECT * FROM books WHERE Author=\"$author\" AND Title=\"$bookTitle\"";
//            $result = $this->databaseManager->connection->query($sql)->fetchAll();
//            var_dump($result);
//            return $result;
//        }
    }

    // Get all
    public function get()
    {
        // TODO: replace dummy data by real one

        $sql = "SELECT * FROM books";
        $result = $this->databaseManager->connection->query($sql);
        return $result;

        // We get the database connection first, so we can apply our queries with it
        // return $this->databaseManager->connection-> (runYourQueryHere)
    }

    public function update($authorEdit, $titleEdit, $readEdit, $oldTitle)
    {
        $sql = "UPDATE books SET Author=\"{$authorEdit}\", Title=\"{$titleEdit}\", Already_read=\"{$readEdit}\" WHERE Title=\"{$oldTitle}\"";
        $this->databaseManager->connection->query($sql);

    }

    public function delete($oldTitle)
    {
        $sql = "DELETE FROM books WHERE Title=\"{$oldTitle}\";";
        $this->databaseManager->connection->query($sql);
    }

}