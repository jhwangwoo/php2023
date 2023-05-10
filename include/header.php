<header id="header">
    <div class="header__inner container">
        <div class="left">
            <a href="../index.html" class="star">
                <span class="blind">메인으로</span>
            </a>
        </div>
        <h1 class="logo">
            <a href="../main/main.php">Developer Blog</a>
        </h1>
        <div class="right">
            <!-- 로그인이 된 경우 -->
            <?php
                if(isset($_SESSION['memberID'])){ ?>
                    <ul>
                        <li><a href="../mypage/mypage.php"><?=$_SESSION['youName'] ?>님 환영합니다.</a></li>
                        <li><a href="../login/logOut.php">로그아웃</a></li>
                    </ul>
            <?php  } else { ?>
                <ul>
                    <li><a href="../join/join.php">회원가입</a></li>
                </ul>
                <?php   } ?>
                <!-- 로그인이 안된 경우 -->
        </div>
    </div>
    <nav class="nav__inner">
        <ul>
            <li><a href="../join/join.php">회원가입</a></li>
            <li><a href="../login/login.php">로그인</a></li>
            <li><a href="../board/board.php">게시판</a></li>
            <li><a href="#">블로그</a></li>
        </ul>
    </nav>
</header>
<!-- //header -->