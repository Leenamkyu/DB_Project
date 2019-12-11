<?php
    require_once('../dbconfig.php');


    $revs = array();
    $allrevs = array();
    try {

        $sql = "delete from actor where a_id = '$_POST[a_id]'";
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
