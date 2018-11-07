<?php
include 'common.php';

$pdo=  database_connect();

$query=$pdo->query("SELECT * FROM books");
$books=[];
while($row=$query->fetch(PDO::FETCH_OBJ)){
    $books[]=$row;
}
//print_r($books);
?>

<html>
    <head>  
    </head>
    <body>
        <?php        foreach ($books as $book): ?>
       <div class="book">
           <h3><a href="book.php?book_id=<?php echo $book->book_id; ?>"><?php echo $book->title; ?></a></h3>
           <div class="books-rating">Rating x/5</div>
       </div>
       
       <?php endforeach; ?>
    </body>
</html>