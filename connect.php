
<?php
    $server = "localhost";
    $user = "root";
    
    $password = "";
    $database = "project";
    $conn = new mysqli($server,$user,$password,$database);
    if($conn){
        echo "Connected!";
  } else {
    echo "Connection Failed";
  }
?>






