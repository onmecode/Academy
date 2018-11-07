<?php


include 'common.php';

$pdo=  database_connect();


$book=null;

if(isset($_GET['book_id'])){

    $book_id=(int)$_GET['book_id'];
 
  $book=$pdo->query("SELECT*FROM books WHERE book_id={$book_id}")->fetchObject();

}
?>
<html>
    <head>  
    </head>
    <body>
        <?php      if($book): ?>
       <div class="book">
           This book "<?php echo $book->title;?>".
        
           <div class="books-rating">Rating x/5</div>
           <div class="book-rate">
            <?php    foreach(range(1,5)as $rating): ?>
               <a href=""><?php echo $rating?></a>
               <?php endforeach; ?>
           </div>
       </div>
        <?php endif; ?>
       
   </body>
</html>
 