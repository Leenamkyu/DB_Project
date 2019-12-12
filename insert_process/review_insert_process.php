<?php
    require_once('../dbconfig.php');
    // header('Content-type:application/json');
    // $json = file_get_contents('php://input'); //allows the server to read raw POST data from the request body.
    // $data = json_decode($json, true);

    $revs = array();
    $allrevs = array();
    try {
        // $sql = $_POST['sql'];
        $sql = "insert into movie_review values(null,'$_POST[m_id]','$_POST[review]')";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "추가되었습니다";
        }
        else{
            echo "Error";
        }
        // echo json_encode($allrevs);
    }
    catch (Exception $e) {
        
    }  
?>
