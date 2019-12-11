<?php
    require_once('../dbconfig.php');


    $revs = array();
    $allrevs = array();
    try {

        $sql = "delete from theater where theater_name = '$_POST[theater_name]'";
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
