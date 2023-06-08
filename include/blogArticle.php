<div class="blog__article">
    <h3>관련글</h3>
    <ul>
<?php
    if(isset($_GET['blogID'])){
        $blogID = $_GET['blogID'];
    } else {
        Header("Location: blog.php");
    }

    $blogNew = "SELECT * FROM blogs WHERE blogDelete = 0 AND blogCategory = (SELECT blogCategory FROM blogs WHERE blogID = $blogID) ORDER BY RAND() DESC LIMIT 4";
    $blogNewResult = $connect -> query($blogNew);

    foreach($blogNewResult as $blog){ ?>

        <div class="card">
            <figure class="card__img">
                <source srcset="assets/img/blog04.png, assets/img/blog04@2x.png 2x, assets/img/blog04@3x.png 3x" />
                <a href="blogView.php?blogID=<?=$blog['blogID']?>" class="more"><img src="../assets/blog/<?=$blog['blogImgFile']?>" alt="<?=$blog['blogTitle']?>"></a>
            </figure>
            <div class="card__title">
                <h3><?=$blog['blogTitle']?></h3>
            </div>
        </div>
<?php }?>
    </ul>
</div>