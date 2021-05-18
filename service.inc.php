<?php
include_once("bootstrap.php");

?>
<a href="service.php?title=<?php echo $feed[$id]["title"] ?>>&id=<?php echo $feed[$id]["postId"] ?>&description=<?php echo $feed[$id]["description"] ?>&image=<?php echo $feed[$id]["image"] ?>&firstname=<?php echo $feed[$id]["firstname"] ?>&lastname=<?php echo $feed[$id]["lastname"] ?>" style="text-decoration: none;" class="article_clickable">
          <div class="article ">
          
            <img src="<?php echo htmlspecialchars($service["image"]) ?>" alt="" style="width: 200px; height: 200px;">
            <h4><?php echo htmlspecialchars($service["title"]) ?></h4>
            
          </div>
          <div class="grey">
            <p>
            <?php echo ($service["firstname"]) ?> <?php echo ($service["lastname"]) ?>
            </p>
          </div>
        </a>