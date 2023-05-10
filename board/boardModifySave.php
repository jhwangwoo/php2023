<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $boardID = $_POST['boardID'];
    $boardTitle = $_POST['boardTitle'];
    $boardContents = $_POST['boardContents'];
    $boardPass = $_POST['boardPass'];

    echo $boardID, $boardTitle, $boardContents, $boardPass;

    $boardTitle = $connect -> real_escape_string($boardTitle);
    $boardContents = $connect -> real_escape_string($boardContents);
    $boardPass = $connect -> real_escape_string($boardPass);
    $memberID = $_SESSION['memberID'];
    
    // echo $memberID;
    $sql = "SELECT * FROM members WHERE memberID = {$memberID}"; //게시글을올린 보더에서 맴버ID와 현재 로그인되어있는 맴버의 ID가 같을때 수정해야함
    $result = $connect ->query($sql);

    if($result){
        $info = $result -> fetch_array(MYSQLI_ASSOC);
        
        if($info['memberID'] == $memberID && $info['youPass'] == $boardPass){
            $sql = "UPDATE board SET boardTitle = '{$boardTitle}', boardContents = '{$boardContents}' WHERE boardID = '{$boardID}'";
            $connect -> query($sql);

        } else {
            echo "<script>alert('비밀번호가 틀렸습니다. 다시 한번 확인해주세요!')</script>";
        }
    } else {
        echo "<script>alert('관리자에러!')</script>";
    };
?>

<Script>
    location.href = "board.php";
</Script>