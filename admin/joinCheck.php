<?php
    include "../connect/connect.php";
    $type = $_POST['type'];
    $email = $_POST['youEmail'];
    $jsonResult = "bad";
    if( $type == "isEmailCheck"){
        $youEmail = $connect -> real_escape_string(trim($email));
        $sql = "SELECT adminEmail FROM adminMembers WHERE adminEmail = '{$youEmail}'";
    }
    $result = $connect -> query($sql);
    if( $result -> num_rows == 0 ){
        $jsonResult = "good";
    }
    echo json_encode(array("result" => $jsonResult));
?>