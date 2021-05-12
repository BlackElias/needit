
<?php
include_once("bootstrap.php");





?>
<a href="" style="text-decoration: none;" class="article_clickable">
          <div class="article ">
          
            <img src="<?php echo htmlspecialchars($post["picture"]) ?>" alt="" style="width: 200px; height: 200px;">
            <h4><?php echo htmlspecialchars($post["title"]) ?></h4>
            
          </div>
          <div class="grey">
            <p>
            <?php echo htmlspecialchars($user["fistname"]) ?><?php echo htmlspecialchars($user["lastname"]) ?>
            </p>
          </div>
        </a>