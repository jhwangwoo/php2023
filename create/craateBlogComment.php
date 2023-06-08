<?php
    include "../connect/connect.php";
    
    $sql = "CREATE TABLE blogsComment (";
    $sql .= "commentID int(10) unsigned auto_increment,";
    $sql .= "memberID int(10) unsigned,";
    $sql .= "blogID int(10) unsigned,";
    $sql .= "commentName varchar(20) NOT NULL,";
    $sql .= "commentPass varchar(20) NOT NULL,";
    $sql .= "commentMsg varchar(255) NOT NULL,";
    $sql .= "commentDelete int(0) NOT NULL,";
    $sql .= "regTime int(20) NOT NULL,";
    $sql .= "PRIMARY KEY (commentID)";
    $sql .= ") charset=utf8";
    $connect -> query($sql);
?>