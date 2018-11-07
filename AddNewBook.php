<?php

if(isset($_POST['insert']))
{
    try {

        // connect to mysql

        $pdoConnect = new PDO("mysql:host=localhost;dbname=academylibray2016","root","");
    } catch (PDOException $exc) {
        echo $exc->getMessage();
        exit();
    }

    // get values form input text and number
    $title = $_POST['title'];
    $author = $_POST['author'];
    $programme = $_POST['programme'];
    $description=$_POST['description'];
    //$image=$_POST['image];
    // mysql query to insert data

    $pdoQuery = "INSERT INTO `books`(`title`, `author`,`programme`,`description`) VALUES (:title,:author,:programme,:description)";
    
    $pdoResult = $pdoConnect->prepare($pdoQuery);
    
    $pdoExec = $pdoResult->execute(array(":title"=>$title,":author"=>$author,":programme"=>$programme,":description"=>$description));
    
        // check if mysql insert query successful
    if($pdoExec)
    {
        echo 'Data Inserted';
    }else{
        echo 'Data Not Inserted';
    }
}

function Redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}

Redirect('Books.php', false);