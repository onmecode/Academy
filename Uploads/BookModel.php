<?php

class BookModel {
    
    private $book_id;
    private $title;
    private $author;
    private $programme;
    private $level;
    private  $description;
    private $image;
  
    
    function __construct($book_id, $title, $author, $programme, $level, $description,$image) {
        $this->book_id =  $book_id;
        $this->title = $title;
        $this->author= $author;
        $this->programme = $programme;
        $this->level = $level;
        $this->description = $description;
        $this->image = $image;
    }
    
    function getId() {
        return $this->book_id;
    }
   function getTitle() {
        return $this->title;
    }
    function getAuthor() {
        return $this->author;
    }
    function getProgramme() {
        return $this->programme;
    }

    function getLevel() {
        return $this->level;
    }

    function getImage() {
        return $this->image;
    }

    function getDescription() {
        return $this->description;
    }
    
    public static function add_book($pdo, $book_id){
   
    $title = $_POST['title'];
    $programme = $_POST['author'];
    $image = $_POST['image'];
    
    // mysql query to insert data
    $pdoQuery = "INSERT INTO `books`(`book_id`, `title`, `author`) VALUES (:book_id,:title,:author)";
    
    $pdoResult = $pdo->prepare($pdoQuery);
    
    $pdoResult->execute(array(":book_id"=>$book_id,":title"=>$title,":author"=>$author));
    }
    
        
     public static function get_titles_and_author ($pdo, $title){
    $sql = "SELECT * FROM books WHERE title = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$title]);

    $article = $stmt->fetch(PDO::FETCH_ASSOC); 
    
    return new self($book['book_id'],  $book['title'], $book['author'],$book ['programme'], $book['level'], $book['image']);
    }
    
    
    
     public static function get_image ($pdo, $image){
    $sql = "SELECT image FROM books WHERE book_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$image]);

    $article = $stmt->fetch(PDO::FETCH_ASSOC); 
    
    return new self($book['book_id'],  $book['title'], $book['author'],$book ['programme'], $book['level'], $book['image']);
    }
    
}
