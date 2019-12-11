<?php
    require_once('dbconfig.php');
    header('Content-type:application/json');
    $json = file_get_contents('php://input'); //allows the server to read raw POST data from the request body.
    $data = json_decode($json, true);

    $revs = array();
    $allrevs = array();
    try {
        $sql = $_POST['sql'];
        $result = mysqli_query($conn, $sql);
        
        while($row = mysqli_fetch_assoc($result)){// array를 assoc로 수정
            // $revs['title']=$row['name']; 
            // $revs['birth']=$row['birth'];   
            // $revs['d_id']=$row['d_id']; 
            // $allrevs[] = $revs;   
            
            $allrevs[] = $row;  
        }

        echo json_encode($allrevs);
    }
    catch (Exception $e) {
        
    }  
?>
