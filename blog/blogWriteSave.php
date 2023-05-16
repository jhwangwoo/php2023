<?php 
    include "../connect/connect.php";
    include "../connect/session.php";

    $memberID = $_SESSION['memberID'];
    $blogAuthor = $_SESSION['youName'];

    $blogCategory = $_POST['blogCategory'];
    $blogTitle = $_POST['blogTitle'];
    $blogContents = nl2br($_POST['blogContents']);

    $blogView = 1;
    $blogLike = 0;
    $regTime = time();


    //enctype="multipart/form-data" 이미지 파일넘길려면 form에 이거써야함
    $blogImgFile = $_FILES['blogFile'];
    $blogImgSize = $_FILES['blogFile']['size'];
    $blogImgType = $_FILES['blogFile']['type'];
    $blogImgName = $_FILES['blogFile']['name'];
    $blogImgTmp = $_FILES['blogFile']['tmp_name'];

    // echo $memberID, $blogAuthor, $blogCategory, $blogTitle, $blogContents

    // echo "<pre>";
    // var_dump($blogImgFile);
    // echo "</pre>";

    //이미지 파일명 확인
    if($blogImgType){
        $fileTypeExtension = explode("/", $blogImgType);
        $fileType = $fileTypeExtension[0];   //image
        $fileExtension = $fileTypeExtension[1];   //jpeg

        //이미지 타입 확인
        if($fileType == "image"){
            if($fileExtension == "jpg" || $fileExtension == "jpeg" || $fileExtension == "png" || $fileExtension == "gif"){
                $blogImgDir = "../assets/blog/"; //이미지경로
                $blogImgName = "Img_".time().rand(1,99999)."."."{$fileExtension}"; //이미지이름저장

                echo "이미지 파일이 맞습니다.";

                $sql = "INSERT INTO blog(memberID, blogTitle, blogContents, blogCategory, blogAuthor, blogView, blogLike, blogImgFile, blogImgSize, blogDelete, blogRegTime) VALUES('$memberID', '$blogTitle', '$blogContents', '$blogCategory', '$blogAuthor', '$blogView', '$blogLike', '$blogImgName', '$blogImgSize', '0', '$regTime')";

            } else {
                echo "<script>alert('이미지 파일이 아닙니다.')</script>";
            }
        } else {
            echo "<script>alert('이미지 파일이 아닙니다.')</script>";
        }
    } else {
        echo "이미지 파일을 첨부하지 않았습니다.";
        $sql = "INSERT INTO blog(memberID, blogTitle, blogContents, blogCategory, blogAuthor, blogView, blogLike, blogImgFile, blogImgSize, blogDelete, blogRegTime) VALUES('$memberID', '$blogTitle', '$blogContents', '$blogCategory', '$blogAuthor', '$blogView', '$blogLike', 'Img_default.jpg', '$blogImgSize', '0', '$regTime')";
    }  

    //이미지 사이즈 확인
    if($blogImgSize > 10000000){
        echo "<script>alert('이미지의 파일 용량이 1메가를 초과했습니다.')</script>";
    }
    $result = $connect -> query($sql);
    $result = move_uploaded_file($blogImgTmp, $blogImgDir.$blogImgName);

    Header("Location: blog.php")

?>