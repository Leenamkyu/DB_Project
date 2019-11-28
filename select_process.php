<?php
    require_once('dbconfig.php');
    header('Content-type:application/json');
    $json = file_get_contents('php://input'); //allows the server to read raw POST data from the request body.
    $data = json_decode($json, true);

    $revs = array();
    $allrevs = array();
    try {
        $sql = "select * from director";
        $result = mysqli_query($conn, $sql);
        
        while($row = mysqli_fetch_array($result)){
            $revs['title']=$row['name']; 
            $revs['birth']=$row['birth'];   
            $revs['d_id']=$row['d_id'];    
            $allrevs[] = $revs;  
        }

        echo json_encode($allrevs);
    }
        catch (Exception $e) {
        
        }  
?>
