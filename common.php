
<?php

const DB_DSN = 'mysql:host=localhost;dbname=academylibray2016';
const DB_USER = 'root';
const DB_PASS = '';


function database_connect(){
    try {
          $pdo = new PDO(DB_DSN, DB_USER, DB_PASS);
          $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
          return $pdo;
    }
    catch (PDOException $e) {
            echo "Exception creating database connection";
            die($e->getMessage());
    }  
}

$test = test($query);
$query = 'SELECT `image`FROM `link`WHERE `link_id`=(SELECT MAX(`link_id`) FROM link)';
 

        

       function test($query){
          $pdo=  database_connect();
        $query= 'SELECT `image`FROM `link`WHERE `link_id`=(SELECT MAX(`link_id`) FROM link)';


            foreach ($pdo->query($query)as $row){
                     return $row['image'];

            }      //  }
       }
/*}

$mysql=  mysqli_connect('localhost', 'root', '', 'academylibray2016')
        OR die(mysqli_connect_error());
mysqli_set_charset($mysql, 'utf-8');


*/