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
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog01.png, ../assets/img/blog01@2x.png 2x, ../assets/img/blog07@3x.png 3x" />
                                <img src="../assets/img/blog01.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>코딩 기본 사항에 대한 자습서</h3>
                                <p>코딩을 처음 접하는 경우 변수, 조건문, 반복문과 같은 코딩의 기초를 이해하는 것이 중요합니다. 자습서는 이러한 개념을 설명하고 코딩의 기초를 배우는 방법을 단계별로 안내합니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="author">정황우</span>
                                <span class="date">2023.05.11</span>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog02.png, ../assets/img/blog02@2x.png 2x, ../assets/img/blog02@3x.png 3x" />
                                <img src="../assets/img/blog02.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>코딩 문제 해결에 대한 팁과 트릭</h3>
                                <p>코딩을 하다 보면 문제가 발생할 수 있습니다. 이러한 팁과 트릭은 문제를 해결하는 데 도움이 됩니다. 여기에는 디버깅, 오류 추적 및 문제 해결 방법에 대한 팁이 포함됩니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="author">정황우</span>
                                <span class="date">2023.05.11</span>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog05.png, ../assets/img/blog05@2x.png 2x, ../assets/img/blog05@3x.png 3x" />
                                <img src="../assets/img/blog05.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>코딩 경력에 대한 조언</h3>
                                <p>코딩 경력에 관심이 있다면 조언을 찾을 수 있는 좋은 출처가 많이 있습니다. 이러한 블로그 게시물은 취업 면접 기술, 이력서 작성 방법 및 경력 개발에 대한 팁을 제공합니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="author">정황우</span>
                                <span class="date">2023.05.11</span>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog07.png, ../assets/img/blog07@2x.png 2x, ../assets/img/blog07@3x.png 3x" />
                                <img src="../assets/img/blog01.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>코딩 기본 사항에 대한 자습서</h3>
                                <p>코딩을 처음 접하는 경우 변수, 조건문, 반복문과 같은 코딩의 기초를 이해하는 것이 중요합니다. 자습서는 이러한 개념을 설명하고 코딩의 기초를 배우는 방법을 단계별로 안내합니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="author">정황우</span>
                                <span class="date">2023.05.11</span>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog06.png, ../assets/img/blog06@2x.png 2x, ../assets/img/blog02@3x.png 3x" />
                                <img src="../assets/img/blog06.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>코딩 문제 해결에 대한 팁과 트릭</h3>
                                <p>코딩을 하다 보면 문제가 발생할 수 있습니다. 이러한 팁과 트릭은 문제를 해결하는 데 도움이 됩니다. 여기에는 디버깅, 오류 추적 및 문제 해결 방법에 대한 팁이 포함됩니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="author">정황우</span>
                                <span class="date">2023.05.11</span>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog03.png, ../assets/img/blog03@2x.png 2x, ../assets/img/blog05@3x.png 3x" />
                                <img src="../assets/img/blog03.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>코딩 경력에 대한 조언</h3>
                                <p>코딩 경력에 관심이 있다면 조언을 찾을 수 있는 좋은 출처가 많이 있습니다. 이러한 블로그 게시물은 취업 면접 기술, 이력서 작성 방법 및 경력 개발에 대한 팁을 제공합니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="author">정황우</span>
                                <span class="date">2023.05.11</span>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog04.png, ../assets/img/blog04@2x.png 2x, ../assets/img/blog07@3x.png 3x" />
                                <img src="../assets/img/blog04.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>코딩 기본 사항에 대한 자습서</h3>
                                <p>코딩을 처음 접하는 경우 변수, 조건문, 반복문과 같은 코딩의 기초를 이해하는 것이 중요합니다. 자습서는 이러한 개념을 설명하고 코딩의 기초를 배우는 방법을 단계별로 안내합니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="author">정황우</span>
                                <span class="date">2023.05.11</span>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog02.png, ../assets/img/blog02@2x.png 2x, ../assets/img/blog02@3x.png 3x" />
                                <img src="../assets/img/blog02.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>코딩 문제 해결에 대한 팁과 트릭</h3>
                                <p>코딩을 하다 보면 문제가 발생할 수 있습니다. 이러한 팁과 트릭은 문제를 해결하는 데 도움이 됩니다. 여기에는 디버깅, 오류 추적 및 문제 해결 방법에 대한 팁이 포함됩니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="author">정황우</span>
                                <span class="date">2023.05.11</span>
                            </div>
                        </div>
                        <div class="card">
                            <figure class="card__img">
                                <source srcset="../assets/img/blog08.png, ../assets/img/blog08@2x.png 2x, ../assets/img/blog05@3x.png 3x" />
                                <img src="../assets/img/blog08.jpg" alt="소개이미지">
                            </figure>
                            <div class="card__title">
                                <h3>코딩 경력에 대한 조언</h3>
                                <p>코딩 경력에 관심이 있다면 조언을 찾을 수 있는 좋은 출처가 많이 있습니다. 이러한 블로그 게시물은 취업 면접 기술, 이력서 작성 방법 및 경력 개발에 대한 팁을 제공합니다.</p>
                            </div>
                            <div class="card__info">
                                <span class="author">정황우</span>
                                <span class="date">2023.05.11</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right mt100">
                <div class="blog__aside">
                    <div class="intro">
                        <picture class="img">
                            <source srcset="../assets/img/intro01.png, ../assets/img/intro01@2x.png 2x, ../assets/img/intro01@3x.png 3x" />
                            <img src="../assets/img/intro01.png" alt="소개이미지">
                        </picture> 
                        <p class="text">
                            어떤 일이라도 노력하고 즐기면 그 결과는 빛을 바란다고 생각합니다.
                        </p>
                    </div>
                    <div class="cate">
                        <h4>카테고리</h4>
                    </div>
                    <div class="cate">
                        <h4>최신 글</h4>
                    </div>
                    <div class="cate">
                        <h4>인기 글</h4>
                    </div>
                    <div class="cate">
                        <h4>최신 댓글</h4>
                    </div>
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