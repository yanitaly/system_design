 <?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "businessdb";
    $conn = "";



    
    try{
        $conn = mysql_connect($db_server,
        $db_user, 
        $db_pass,
        $db_name);
    }
    catch(mysql_sql_exception){
        echo "Could not connected";
    }

    if($conn){
        echo "You are connected";
    }
  


 ?>