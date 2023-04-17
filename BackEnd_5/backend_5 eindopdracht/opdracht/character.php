<div id="container_info">
    
    <div class="left">
        <img src="images/<?php echo $char_item['avatar'] ?> " alt="img">
    </div>
    <div class="right">
        <h2> <?php echo $char_item['name'] ?></h2>
        <div class="stats">
            <p><?php echo $char_item['bio'] ?></p>
        </div>
    </div>
    <a class="item" href="?character_info=">
        <div class="BackButton"><i class="fas fa-arrow-left"></i> terug</div>
    </a>
</div>