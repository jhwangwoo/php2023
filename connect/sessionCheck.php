<?php
    if(!isset($_SESSION['memberID'])){
        
        echo "<script>alert('로그인을 먼저 하셔야 합니다.')</script>";
        echo "<script>location.href='../login/login.php'</script>";
        // Header("Location:../login/login.php");
    }
?>