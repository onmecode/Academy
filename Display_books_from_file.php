

<?php


$html="";

$file='books2.xml';

$xml=  simplexml_load_file($file);

for($i=0;$i>20;$i++){
   // $title=$xml->books[$i]->title;
    $author=$xml->books[$i]->author;
   // $programme=$xml->books[$i]->programme;
   // $level=$xml->books[$i]->level;
            
    $html .= "<h1>$author </h1>";
            
    
    
    
    
}




echo $html;







/*
$xmlget=  file_get_contents("books2.xml");
$xmlget = preg_replace('#&(?=[a-z_0-9]+=)#', '&amp;', $xmlget);

$xml=  simplexml_load_string($xmlget);




foreach($xml->books as $book )
echo $book->book_id . "<br>";
echo $book->title ."<br>";
echo $book->author . "<br>";
echo $book->level ."<br>";


//print_r($xml);


/*

$hola= fopen("books2.xml","r");


    echo $hola;






$xml=simplexml_load_file("books2.xml") or die("Error: Cannot create object");
foreach($xml->children() as $books) { 
    echo $books->title . ", "; 
    echo $books->author . ", "; 
    echo $books->year . ", ";
    echo $books->price . "<br>"; 
}




$xml=simplexml_load_file('Uploads/books2.xml');

foreach($xml->books()as $book )
echo $book->book_id . "<br>";
echo $book->title ."<br>";
echo $book->author . "<br>";
echo $book->level ."<br>";


//print_r($xml);
$xml=[];

while($row=$xml->$_GET[book_id])){
    $xml[]=$row;
} 
echo $row;


/* need to think better
foreach($xml->book as  $row){
    echo $row;
    
}

$xml=simplexml_load_file("Uploads/books.xml");
// Mi connetto al server Mysql e seleziono il DB da usare
$pdo= database_connect();

foreach ($xml ->book as $row) {
    $title=$row->title;
    $author=$row->author;
    $description=$row->description;
    $programme=$row->programme;
    $level=$row->level;
    $description=$row->description;
    $image=$row->image;
    
   $sql="INSERT INTO TABLE `books`(`book_id`, `title`, `author`, `programme`, `level`, `description`, `image`) "
           . "VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])" ;
   
   $result=  mysql_query($sql);
 if (!$result){
     echo 'error it is not working';
 } else {
 echo 'big manu';    
 }
}

// Creo una variabile con il file CSV da importare
$CSVFile = "Uploads/books.xml";
/*
// creo una variabile con la mia query
$SQL = "LOAD DATA LOCAL INFILE '" . $CSVFile . "' INTO TABLE books "
     . "FIELDS TERMINATED BY ',' LINES TERMINATED BY '\\r\\n'"

// Eseguo la query per l'importazione
*/






/*
 * 
$var=fopen("Uploads/books.xml","r");
$dest=fread($var,filesize("Uploads/books.xml"));
fclose($var);
$sss=nl2br($dest); 
echo $sss;
 * 
 * 
 * 
 * 
$pdo= database_connect();


$load=LOAD XML LOCAL INFILE 'Uploads/books.xml';
$query= 'INSERT INTO TABLE`books`SET ID=NULL';

LOAD XML LOCAL INFILE 'Uploads/books.xml' INTO TABLE my_tablename SET ID=NULL;



$xml=simplexml_load_file("Uploads/books.xml");
print_r($xml);
*/
?>