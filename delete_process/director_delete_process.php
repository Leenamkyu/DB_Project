<?php
    require_once('../dbconfig.php');


    $revs = array();
    $allrevs = array();
    try {

        $sql = "delete from director where d_id = '$_POST[d_id]'";
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
