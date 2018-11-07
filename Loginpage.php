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
       
        
            
            <h1><div align="center">Academy Library and Learning Tools <br>
                   
             <div id="logo">
                 <a href="index.php"><img src="images/Semicolon.jpg" alt="Believe in Better" width="150"height="150"/></a>
                  
            </div>
                    Login or create a new user
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
           <h1>Login <br>
               Not user? Don't worry ! Click <a href='newuser.php'> here </a></h1>
    
    <form action= "login.php" 
          method= "post"
          enctype="multipart/form-data">
        
        
Username:<br>
<input type ="text"
       name="username" 
       size="20"><br>


email:<br>
<input  type="email"
        name="email"  
        size="30"><br>


<br>
    
<br>
<input type="submit" 
       name="insert" 
       value="Send">

    
    </form>
