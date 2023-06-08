<div class="cate">
    <h4>최신 댓글</h4>
    <ul>
        <?php
            $blogcomment = "SELECT * FROM blogscomment WHERE commentDelete = 0 ORDER BY commentID DESC LIMIT 4";
            $blogcommentResult = $connect -> query($blogcomment);

            foreach($blogcommentResult as $comment){ ?>
                <li>
                    <a href="blogView.php?blogID=<?=$comment['blogID']?>">
                        <span><?=$comment['commentMsg']?></span>
                    </a>
                </li>
            <?php }?>
    </ul>
</div>