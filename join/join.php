<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 페이지</title>

    <?php include "../include/head.php" ?>
</head>
<body class="gray">

    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main" class="container">
        <div class="intro__inner center bmStyle">
            <picture class="intro__images">
                <source srcset="../assets/img/join01.png, ../assets/img/join01@2x.png 2x, ../assets/img/join01@3x.png 3x" />
                <img src="../assets/img/join01.png" alt="회원가입 이미지">
            </picture>
            <p class="intro__text">
                회원가입을 해주시면 다양한 정보를 자유롭게 볼 수 있습니다.
            </p>
        </div>
        <!-- intro__inner -->
        
        <div class="join__inner">
            <h2>회원가입</h2>
            <div class="join__form">
                <form action="joinSave.php" name="join" method="post">
                    <fieldset>
                        <legend class="blind">회원가입</legend>
                        <div>
                            <label for="youEmail" class="required">이메일</label>
                            <input type="text" id="youEmail" class="inputStyle" name= "youEmail" placeholder="이메일을 적어주세요!" required>
                        </div>
                        <div>
                            <label for="youName" class="required">이름</label>
                            <input type="text" id="youName" class="inputStyle" name= "youName" placeholder="이름을 적어주세요!" required>
                        </div>
                        <div>
                            <label for="youPass" class="required">비밀번호</label>
                            <input type="password" id="youPass" class="inputStyle" name= "youPass" placeholder="비밀번호를 적어주세요!" required>
                        </div>
                        <div>
                            <label for="youPassC" class="required">비밀번호 확인</label>
                            <input type="password" id="youPassC" class="inputStyle" name= "youPassC" placeholder="비밀번호를 한번 더 적어주세요!" required>
                        </div>
                        <div>
                            <label for="youPhone" class="required">연락처</label>
                            <input type="text" id="youPhone" class="inputStyle" name= "youPhone" placeholder="연락처를 적어주세요!" required>
                        </div>
                        <button type="submit" class="btnStyle" >회원가입완료</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </main>
    <!-- //main -->
    <?php include "../include/footer.php" ?>
    <!-- //footer -->
</body>
</html>