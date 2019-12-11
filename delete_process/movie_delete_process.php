<?php
    require_once('dbconfig.php');


    $revs = array();
    $allrevs = array();
    try {

        $sql = "delete from movie where m_id = '$_POST[m_id]'";
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
