<?php
    require_once('dbconfig.php');
    // header('Content-type:application/json');
    // $json = file_get_contents('php://input'); //allows the server to read raw POST data from the request body.
    // $data = json_decode($json, true);

    $revs = array();
    $allrevs = array();
    try {
        // $sql = $_POST['sql'];
        $sql = "insert into director values(null,'$_POST[sql_name]','$_POST[sql_birth]','$_POST[sql_gender]','$_POST[sql_country]')";
        $result = mysqli_query($conn, $sql);
        if($result){
        }
        else{
            echo "Error";
        }
        // echo json_encode($allrevs);
    }
    catch (Exception $e) {
        
    }  
?>
