<?php
    include "../connect/connect.php";
    
    $adminName = $_POST['youName'];
    $adminEmail = $_POST['youEmail'];
    $adminNick = $_POST['youNick'];
    $adminPass = sha1($_POST['youPass']); //sha1=비번암호화
    $adminBirth = $_POST['youBirth'];
    $adminPhone = $_POST['youPhone'];
    $regTime = time();

    $sql = "INSERT INTO adminMembers(adminEmail, adminName, adminNick, adminPass, adminBirth, adminPhone, adminDelete, adminRegtime, adminModtime) VALUES('$adminEmail', '$adminName', '$adminNick', '$adminPass', '$adminBirth', '$adminPhone', '1', '$regTime', '$regTime')";
    $connect -> query($sql);
?>

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
                회원 가입을 축하드립니다.<br>로그인을 해주세요!
            </p>
        </div>
        <div class="join__inner">
            <h2>회원가입 완료</h2>
            <div class="index">
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li class="active">3</li>
                </ul>
                <span class="pumping" data-text=""></span>
                <a href="#" class="btnStyle3">관리자 로그인</a>
            </div>
        </div>
        <!-- intro__inner -->
    </main>
    <!-- //main -->
    <?php include "../include/footer.php" ?>
    <!-- //footer -->
</body>
<script>
    const colors = ['#FC4F4F', '#FFBC80', '#FF9F45', '#F76E11']
    // const shapes = ['square', 'circle', 'triangle', 'heart']
    const shapes = ['heart']

    const randomIntBetween = (min, max) => {
        return Math.floor(Math.random() * (max - min + 1) + min)
    }

    class Particle {
        constructor({ x, y, rotation, shape, color, size, duration, parent }) {
            this.x = x
            this.y = y
            this.parent = parent
            this.rotation = rotation
            this.shape = shape
            this.color = color
            this.size = size
            this.duration = duration
            this.children = document.createElement('div')
        }

        draw() {
            this.children.style.setProperty('--x', this.x + 'px')
            this.children.style.setProperty('--y', this.y + 'px')
            this.children.style.setProperty('--r', this.rotation + 'deg')
            this.children.style.setProperty('--c', this.color)
            this.children.style.setProperty('--size', this.size + 'px')
            this.children.style.setProperty('--d', this.duration + 'ms')
            this.children.className = `shape ${this.shape}`
            this.parent.append(this.children)
        }

        animate() {
            this.draw()

            const timer = setTimeout(() => {
                this.parent.removeChild(this.children)
                clearTimeout(timer)
            }, this.duration)
        }
    }

    function animateParticles({ total }) {
        for (let i = 0; i < total; i++) {
            const particle = new Particle({
                x: randomIntBetween(-200, 200),
                y: randomIntBetween(-100, -500),
                rotation: randomIntBetween(-360 * 5, 360 * 5),
                shape: shapes[randomIntBetween(0, shapes.length - 1)],
                color: colors[randomIntBetween(0, colors.length - 1)],
                size: randomIntBetween(4, 7),
                duration: randomIntBetween(400, 800),
                parent
            })
            particle.animate()
        };
    };

    let intervalTimer = setInterval(() => {
        animateParticles({ total: 8 })
    }, 100)

    const parent = document.querySelector('.join__inner .index span')
    parent.addEventListener("touchstart", () => { }, false);
    parent.addEventListener('click', e => {
        if (intervalTimer) {
            clearInterval(intervalTimer)
            intervalTimer = null
            parent.classList.remove('pumping')
        }
        animateParticles({ total: 40 })
    });
</script>
</html>