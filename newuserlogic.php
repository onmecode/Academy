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
    $username = $_POST['username'];
    $email = $_POST['email'];
   
    
    
    
    $pdoQuery = "INSERT INTO `users`(`username`, `email`) VALUES (:username,:email)";
    
    $pdoResult = $pdoConnect->prepare($pdoQuery);
    
    $pdoExec = $pdoResult->execute(array(":username"=>$username,":email"=>$email));
    
        // check if mysql insert query successful
    if($pdoExec)
    {
        echo 'Data Inserted';
    }else{
        echo 'Data Not Inserted';
    }
}
    
    /*
     * 
     * 
     * 
     * 
    
     * 
     * 
     * 
     * add next spring
    $username = $_POST['username'];
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
     $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
   
    // mysql query to insert data
    
   
    $pdoQuery = "INSERT INTO `users`(`username`, `email`,`firstname`, `lastname`,`password`) VALUES (:username,:email;:firstname,:lastname,:password)";
    
    $pdoResult = $pdoConnect->prepare($pdoQuery);
    
    $pdoExec = $pdoResult->execute(array(":username"=>$username,":email"=>$email,":firstname"=>$firstname,":lastname"=>$lastname,":password"=>$password));
    
        // check if mysql insert query successful
    if($pdoExec)
    {
        echo 'Data Inserted';
    }else{
        echo 'Data Not Inserted';
    }
}
*/