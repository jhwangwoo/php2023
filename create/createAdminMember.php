<?php
    include "../connect/connect.php";
    
    $sql = "create table adminMembers (";
    $sql .= "adminMemberID int(10) unsigned auto_increment,";
    $sql .= "adminEmail varchar(40) NOT NULL,";
    $sql .= "adminName varchar(40) NOT NULL,";
    $sql .= "adminNick varchar(40) NOT NULL,";
    $sql .= "adminPass varchar(40) NOT NULL,";
    $sql .= "adminSite varchar(40) DEFAULT NULL,";
    $sql .= "adminIntro varchar(40) DEFAULT NULL,";
    $sql .= "adminBirth varchar(40) DEFAULT NULL,";
    $sql .= "adminPhone varchar(40) DEFAULT NULL,";
    $sql .= "adminImgSrc varchar(40) DEFAULT NULL,";
    $sql .= "adminImgSize varchar(40) DEFAULT NULL,";
    $sql .= "adminDelete int(10) DEFAULT 1,";
    $sql .= "adminRegtime int(40) NOT NULL,";
    $sql .= "adminModtime int(40) DEFAULT NULL,";
    $sql .= "PRIMARY KEY (adminMemberID)";
    $sql .= ") charset=utf8;";


    
    $result = $connect -> query($sql);

    if($result){
        echo "create tables complete";
    } else {
        echo "create tables false";
    }
?>