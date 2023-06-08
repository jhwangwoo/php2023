<div class="cate list2">
    <h4>인기 글</h4>
    <ul>
        <?php
            $blogNew = "SELECT * FROM blogs WHERE blogDelete = 0 ORDER BY blogView DESC LIMIT 4";
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