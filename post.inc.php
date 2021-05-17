
<?php
include_once("bootstrap.php");

?>
<a href="article.php?title=<?php echo $feed[$id]["title"] ?>&description=<?php echo $feed[$id]["description"] ?>&image=<?php echo $feed[$id]["image"] ?>&firstname=<?php echo $feed[$id]["firstname"] ?>&lastname=<?php echo $feed[$id]["lastname"] ?>" style="text-decoration: none;" class="article_clickable">
          <div class="article ">
          
            <img src="<?php echo htmlspecialchars($post["image"]) ?>" alt="" style="width: 200px; height: 200px;">
            <h4><?php echo htmlspecialchars($post["title"]) ?></h4>
            
          </div>
          <div class="grey">
            <p>
            <?php echo ($post["firstname"]) ?> <?php echo ($post["lastname"]) ?>
            </p>
          </div>
        </a>
        