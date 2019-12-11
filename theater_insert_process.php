<?php
    require_once('dbconfig.php');

    $revs = array();
    $allrevs = array();
    try {
        $sql = "insert into theater values(null,'$_POST[sql_theater_name]','$_POST[sql_si]','$_POST[sql_do]','$_POST[sql_gun]','$_POST[sql_gu]', '$_POST[sql_phone_number]')";
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
