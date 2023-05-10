<?php
    include "../connect/connect.php";

    // NOT NULL : 빈칸 못들어감
    // auto_increment : 자동 증가
    // logtext : 문장이 길때
    $sql = "CREATE TABLE board(";
    $sql .= "boardID int(10) unsigned NOT NULL auto_increment,";
    $sql .= "memberID int(10) NOT NULL,";
    $sql .= "boardTitle varchar(100) NOT NULL,";
    $sql .= "boardContents longtext NOT NULL,";
    $sql .= "boardView int(10) NOT NULL,";
    $sql .= "regTime int(20) NOT NULL,";
    $sql .= "PRIMARY KEY(boardID)";
    $sql .= ") charset=utf8;";

    $connect -> query($sql);
?>