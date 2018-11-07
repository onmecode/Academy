<?php

// upload the file 
if (isset($_FILES['UploadFileField'])){
    
    $UploadName=$_FILES['UploadFileField']['name'];
    $UploadTmp=$_FILES['UploadFileField']['tmp_name'];
    $UploadType=$_FILES['UploadFileField']['type'];       
    
}

$UploadName=  preg_replace("#[^a-z0-9.]#i","", $UploadName);

if(!$UploadTmp){
die("No file selected. Please Upload again");}
    else{
       // move it in the folder uploads
        move_uploaded_file($UploadTmp, "images/$UploadName");
         echo "File Uploaded";
          
    }

    
    
    
    // return to content page (index.php) 
    
    function Redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}

Redirect('index.php', false);











   
