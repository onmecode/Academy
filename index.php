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
       
             <?php
date_default_timezone_set('Europe/London');
echo " Time  ".date("H:i:s")." Day ".date("d/m/Y")."";
?>
            
        <h1><div align="center">Academy Library and Learning Tools 
             <div id="logo">
                 <img src="images/sky_logo.jpg" alt="Believe in Better" width="150"height="150"/>
            </div>
            HOME PAGE
            </div></h1>


         <div align="left"> 
            
        <ul id="navigation">
            
                
    <li><a href="index.php" target="_blank">Home </a></li>
    <li><a href="Loginpage.php" target="_blank">Login</a></li>
    <li><a href="Books.php" target="_blank">Books </a></li>
    <a href="uploadpage.php" target="_blank">Upload</a></li>
    <li><a href="Links.php" target="_blank">Links </a></li>
    <li><a href="App.php" target="_blank">Apps </a></li>
    <li><a href="FreeMaterials.php" target="_blank">Free Materials </a></li>
    <li><a href="YourExperience.php" target="_blank">Your Experience</a></li>
    <li><a href="forum.php" target="_blank">Forum</a></li>

        </ul>
        </div>
       
   <table class="one">
           
                 
    <tr>
        
        
   
            <td>
            <?php
            $pdo=  database_connect();
        
            $query= 'SELECT `image`FROM `books`WHERE `book_id`=(SELECT MAX(`book_id`) FROM books)';
       
            foreach ($pdo->query($query)as $row){
                     echo $row['image'];
                 } 
            ?></td> 
            
            <td>
                <?php
              $pdo=  database_connect();
              
               $query= 'SELECT `image`FROM `apps`WHERE `app_id`=(SELECT MAX(`app_id`) FROM apps)';
            foreach ($pdo->query($query)as $row){
                     echo $row['image'];
                 } 
                 ?> </td> 
            <td>
                <?php echo $test;
                
                 ?></td> 
            <td><img src="images/Semicolon.jpg" alt="Believe in Better" width="150"height="150"/></td>            
            <td> <?php
                $query= 'SELECT `image`FROM `experience`WHERE `ex_id`=(SELECT MAX(`ex_id`) FROM experience)';
            foreach ($pdo->query($query)as $row){
                     echo $row['image'];
                 } 
                 ?></td>  
                                   
                   </tr>               
                   
     </table>
                
    <table class="two">
           
                 
                   <tr>
                       <td>    <?php
            $pdo=  database_connect();
        
            $query= 'SELECT `title`FROM `books`WHERE `book_id`=(SELECT MAX(`book_id`) FROM books)';
       
            foreach ($pdo->query($query)as $row){
                     echo $row['title'];
                 }  ?>
         </td> 
                       <td> <?php
            $pdo=  database_connect();
        
            $query= 'SELECT `name`FROM `apps`WHERE `app_id`=(SELECT MAX(`app_id`) FROM books)';
       
            foreach ($pdo->query($query)as $row){
                     echo $row['name'];
                 }  ?></td> 
                       <td>Last WebSite</td> 
                       <td>Last Material Uploaded</td> 
                       <td>Your Experience</td> 
                
                
                   </tr>            
                   
     </table>
        
        <div class="article">
            
          <div>
            
                <h1>Speaking about Sky's Get into Tech</h1> </div>
            <div id="img_article">
                <img src="images/skyacademylogo.jpg" alt="Believe in Better" width="780"height="150"/>
            </div>
             
              Sky's Get into Tech initiative aims to provide a unique and supportive environment in 
            which women with little or no previous technical experience can learn some of the skills 
            necessary to begin a career in software development. Sky recognises the significant lack 
            of gender diversity in the technology industry, and we believe that encouraging capable, 
            talented women into technical roles can bring enormous benefits, both to the women themselves, 
            and also to the teams and companies they end up working with. 
            By introducing more women into this talent pool, we hope to increase diversity in Technology at Sky.

            The courses provide beginner level training which aim to give people the skills necessary to apply 
            for entry level jobs in software development. By the end of one of our courses you will be equipped
            with the technical skills you need to start building websites and applications, have an understanding 
            and some experience of Agile ways of working in software development, and you will have built your very 
            own original software project as part of a team. We hope you will leave the Academy inspired and empowered, 
            and in a strong position to apply for Junior software developer roles should you wish to.


            
            
        </div>
            
        <?php
        // put your code here
        ?>
            <script>
                
            </script>
                
        
        </body>
    
</html>
