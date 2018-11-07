<?php
    include 'common.php';
    ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
                <title>academy </title>
                <link href="home.css" rel="stylesheet" type="text/css"/>
     
    </head>
    <body>
        <div id="page">
       
        
            
        <h1><div align="center">Academy Library and Learning Tools 
             <div id="logo">
               <a href="index.php"><img src="images/w3schools.jpg" alt="Believe in Better" width="150"height="150"/></a>
            </div>
               
            LINKS

            </div></h1>


         <div align="left"> 
            
        <ul id="navigation">
            
                
   <li><a href="index.php" target="_blank">Home </a></li>
    <li><a href="Loginpage.php" target="_blank">Login</a></li>
    <li><a href="Books.php" target="_blank">Books </a></li>
    <li> <a href="uploadpage.php" target="_blank">Upload</a></li>
    <li><a href="Links.php" target="_blank">Links </a></li>
    <li><a href="App.php" target="_blank">Apps </a></li>
    <li><a href="FreeMaterials.php" target="_blank">Free Materials </a></li>
    <li><a href="YourExperience.php" target="_blank">Your Experience</a></li>
    <li><a href="forum.php" target="_blank">Forum</a></li>

        </ul>
        </div>
            <div>
            
             <?php
               
              
                $pdo = database_connect();
                 /*
                     $query =$pdo->query('SELECT `image`FROM `link` WHERE `link_id`=1');
                    $link=['image'];
                    while ($row = $query->fetch()) {
                     $link['image']=$row['image'];
                    }
                    print_r($link);
                   */
                    
               
                $query ='SELECT `image`FROM `link` WHERE `link_id`=1';
                foreach($pdo->query($query)as $row){
                    echo $row['image'];
                    
                }
                
                
                
                ?>
                
            </div>
            
             <div>
            
                           
              <?php
                $pdo = database_connect();
                 /*
                     $query =$pdo->query('SELECT `image`FROM `link` WHERE `link_id`=2');
                    $link=['image'];
                    while ($row = $query->fetch()) {
                    $link['image']=$row['image'];
                    }
                    print_r($link);
                   */
                 $query ='SELECT `image`FROM `link` WHERE `link_id`=2';
                 foreach ($pdo->query($query)as $row){
                     echo $row['image'];
                 }
                

                ?>
                
            </div>
                
                
                
     
       