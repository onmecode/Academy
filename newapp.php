<?php
include 'header.php';


?>
<html>
    <head>
        <meta charset="UTF-8">
                <title>academy </title>
                <link href="home.css" rel="stylesheet" type="text/css"/>
     
    </head>
    <body>
        <div id="page">
       
  <?php
include 'Nav.php';


?>
            <div>
                <h1> INSERT A NEW APP </h1>
                
                
                     </div>



<div>
    <h1>Upload your favorite App and let us why is good for you  </h1>
    
    <form action= "AddNewApp.php" 
          method= "post"
          enctype="multipart/form-data">
        
        
Title:<br>
<input type ="text"
       name="title" 
       size="100"><br>


Author:<br>
<input  type="text"
        name="author"  
        size="100"><br>

Language:<br>
<input  type="text"
        name="programme"  
        size="100"><br>

Description:<br>
<textarea name="description" rows="50" cols="100">
</textarea>

<br>
    
<br>
<input type="submit" 
       name="insert" 
       value="Send">

    </form>
    
<?php
include 'Footer.php';
?>
</div>

          
        