<?php
    require_once('dbconfig.php');


    $revs = array();
    $allrevs = array();
    try {
        // $sql = $_POST['sql'];
        $sql = "insert into movie values(null,'$_POST[sql_title]','$_POST[sql_genre]','$_POST[sql_country]','$_POST[sql_running_time]',
                                              '$_POST[sql_release_date]','$_POST[sql_age_limit]','$_POST[sql_d_id]','$_POST[sql_rating]','$_POST[sql_opening_period]','$_POST[sql_booking_rate]')";
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
