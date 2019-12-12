<?php
    require_once('../dbconfig.php');

    $revs = array();
    $allrevs = array();
    try {
        $sql = "insert into actor_awards values('$_POST[sql_a_id]','$_POST[sql_m_id]','$_POST[sql_appearance]','$_POST[sql_awards]')";
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