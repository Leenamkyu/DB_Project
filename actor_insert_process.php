<?php
    require_once('dbconfig.php');

    $revs = array();
    $allrevs = array();
    try {
        $sql = "insert into actor values(null,'$_POST[sql_name]','$_POST[sql_birth]','$_POST[sql_gender]','$_POST[sql_country]')";
        $result = mysqli_query($conn, $sql);
        if($result){
        }
        else{
            echo "Error";
        }
    }
    catch (Exception $e) {
        
    }  
?>
