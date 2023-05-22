<div class="blog__article">
    <h3>관련글</h3>
    <ul>
<?php
    if(isset($_GET['blogID'])){
        $blogID = $_GET['blogID'];
    } else {
        Header("Location: blog.php");
    }

    $blogNew = "SELECT * FROM blog WHERE blogDelete = 0 AND blogCategory = (SELECT blogCategory FROM blog WHERE blogID = $blogID) ORDER BY RAND() DESC LIMIT 4";
    $blogNewResult = $connect -> query($blogNew);

    foreach($blogNewResult as $blog){ ?>
        <li>
            <a href="blogView.php?blogID=<?=$blog['blogID']?>">
                <img src="../assets/blog/<?=$blog['blogImgFile']?>" alt="<?=$blog['blogTitle']?>">
                <span><?=$blog['blogTitle']?></span>
            </a>
        </li>
    <?php }?>
    </ul>
</div>