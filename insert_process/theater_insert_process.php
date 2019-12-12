<?php
    require_once('../dbconfig.php');

    $revs = array();
    $allrevs = array();
    try {
        $sql = "insert into theater values('$_POST[sql_theater_name]','$_POST[sql_si_do]','$_POST[sql_si_gun_gu]','$_POST[sql_phone_number]')";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "추가되었습니다";
        }
        else{
            echo "Error";
        }
    }
    catch (Exception $e) {
        
    }  
?>
