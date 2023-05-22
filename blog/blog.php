<?php
        include "../connect/connect.php";
        include "../connect/session.php";

        echo "<pre>";
        var_dump($_SESSION);
        echo "</pre>";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>블로그</title>

    <?php include "../include/head.php" ?>
</head>
<body class="gray">

    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main" class="container">
        <div class="blog__search bmStyle">
            <h2>개발자 블로그 입니다.</h2>
            <p>개발과 관련된 블로그 입니다.</p>
            <div class="search">
                <form action="#" name="#" method="POST">
                    <legend class="blind">블로그 검색</legend>
                    <input type="search" class="inputStyle2" name="searchKeyword" aria-label="검색" placeholder="검색어를 입력하세요!">
                    <button type="submit" class="btnStyle4 ml20">검색하기</button>
                    <?php if(isset($_SESSION['memberID'])){ ?>
                        <div class="mt20"><a href="blogWrite.php" class="btnStyle4 white">글쓰기</a></div>
                    <?php } ?>
                </form>
            </div>
        </div>
        <div class="blog__inner">
            <div class="left">
                <div class="blog__wrap">
                    <h2>All Post</h2>
                    <div class="cards__inner col2 line2">
<?php
    $sql = "SELECT * FROM blog WHERE blogDelete = 0 ORDER BY blogID DESC";
    $result = $connect -> query($sql);

    foreach($result as $blog){?>
        <div class="card">
            <figure class="card__img">
                <a href="blogView.php?blogID=<?=$blog['blogID']?>">
                    <img src="../assets/blog/<?=$blog['blogImgFile']?>" alt="<?=$blog['blogTitle']?>">
                </a>
            </figure>
            <div class="card__title">
                <h3><?=$blog['blogTitle']?></h3>
                <p><?=$blog['blogContents']?></p>
            </div>
            <div class="card__info">
                <a href="#" class="more">더보기</a>
            </div>
        </div>
<?php } ?>
                    </div>
                </div>
            </div>
            <div class="right mt100">
                <div class="blog__aside">
<?php include "../include/blogTitle.php"?>

<?php include "../include/blogCate.php"?>

<?php include "../include/blogNew.php"?>

<?php include "../include/blogPopular.php"?>

<?php include "../include/blogComment.php"?>
                </div>
            </div>
        </div>
        <!-- //blog__inner -->
    </main>
    <!-- //main -->


    <?php include "../include/footer.php" ?>
    <!-- //footer -->
</body>
</html>