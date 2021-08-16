<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class CardRepository
{
    private $databaseManager;
    public string $emptyFieldsMessage;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create()
    {
        if (isset($_POST['addBook']) && !empty($_POST['author'])  && !empty($_POST['title'])){
            $addedAuthor = $_POST['author'];
            $addedTitle = $_POST['title'];
            $sql = "INSERT INTO books(Author,Title) VALUES('$addedAuthor','$addedTitle')";
            $result = $this->databaseManager->connect()->query($sql)->fetchAll();
            return $result;
        } else {
            $this->message("Enter author & title.");
        }
    }

    public function message($thisMessage)
    {
        $this->emptyFieldsMessage = $thisMessage;
        return $this->emptyFieldsMessage;
    }

    // Get one
    public function find()
    {

    }

    // Get all
    public function get()
    {
        // TODO: replace dummy data by real one

        $sql = "SELECT * FROM books";
        $result = $this->databaseManager->connect()->query($sql);
        return $result;

        // We get the database connection first, so we can apply our queries with it
        // return $this->databaseManager->connection-> (runYourQueryHere)
    }

    public function update()
    {

    }

    public function delete()
    {

    }

}