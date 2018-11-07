<?php
    include 'common.php';
    ?>

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
                 <a href="index.php"><img src="images/notebooks.jpg" alt="Believe in Better" width="150"height="150"/></a>
            </div>
            
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
<h2>Upload Datafile </h2>
       
      <!-- The data encoding type, enctype, MUST be specified as below -->
      <form enctype="multipart/form-data" action="Upload.php" method="POST">
    <!-- MAX_FILE_SIZE must precede the file input field -->
    <input type="hidden" name="MAX_FILE_SIZE" value="500000" />
    <!-- Name of input element determines name in $_FILES array -->
    Send this file: <input name="UploadFileField" type="file" id="UploadFileField" />
    <input type="submit" value="Send File" />
</form>
 
      
<h2>Upload Image </h2>
       
      <!-- The data encoding type, enctype, MUST be specified as below -->
      <form enctype="multipart/form-data" action="Upload2.php" method="POST">
    <!-- MAX_FILE_SIZE must precede the file input field -->
    <input type="hidden" name="MAX_FILE_SIZE" value="500000" />
    <!-- Name of input element determines name in $_FILES array -->
    Send this file: <input name="UploadFileField" type="file" id="UploadFileField" />
    <input type="submit" value="Send File" />
</form>      
      
      
   </body>
</html>


