<?php
    require_once('../dbconfig.php');
    header('Content-type:application/json');
    $json = file_get_contents('php://input'); //allows the server to read raw POST data from the request body.
    $data = json_decode($json, true);

    $revs = array();
    $allrevs = array();
    try {
        $sql = "select title, review from movie_review r join movie m on r.m_id = m.m_id where m.m_id = '$_POST[m_id]'";
        $result = mysqli_query($conn, $sql);
        
        while($row = mysqli_fetch_assoc($result)){// array를 assoc로 수정
            $allrevs[] = $row;  
        }

        echo json_encode($allrevs);
    }
    catch (Exception $e) {
        
    }  
?>
