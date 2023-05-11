<?php
    include "../connect/connect.php";
    $sql = "CREATE TABLE blog (";
    $sql .= "blogID int(10) unsigned auto_increment,";
    $sql .= "memberID int(10) unsigned NOT NULL,";
    $sql .= "blogTitle varchar(255) NOT NULL,";
    $sql .= "blogContents longtext NOT NULL,";
    $sql .= "blogCategory varchar(40) NOT NULL,";
    $sql .= "blogAuthor varchar(40) NOT NULL,";
    $sql .= "blogView int(10) NOT NULL,";
    $sql .= "blogLike int(10) NOT NULL,";
    $sql .= "blogImgFile varchar(100) DEFAULT NULL,";
    $sql .= "blogImgSize varchar(100) DEFAULT NULL,";
    $sql .= "blogDelete int(10) NOT NULL,";
    $sql .= "blogRegTime int(10) NOT NULL,";
    $sql .= "blogModTime int(10) DEFAULT NULL,";
    $sql .= "PRIMARY KEY (blogID)";
    $sql .= ") charset=utf8";
    $connect -> query($sql);
?>