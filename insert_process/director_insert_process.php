<?php
    require_once('../dbconfig.php');

    $revs = array();
    $allrevs = array();
    try {

        $sql = "insert into director values(null,'$_POST[sql_name]','$_POST[sql_birth]','$_POST[sql_gender]','$_POST[sql_country]')";
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
